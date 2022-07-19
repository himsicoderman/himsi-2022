<?php

namespace App\Controllers\Admin;

use App\Models\{StaffsModel, PojokHimsiModel, AkademikModel, UsersModel};
use App\Controllers\BaseController;

date_default_timezone_set('Asia/Jakarta');

class Users extends BaseController
{

    protected $staffModel, $pojokHimsiModel, $akademikModel, $usersModel;

    public function __construct()
    {
        $this->staffModel = new StaffsModel();
        $this->pojokHimsiModel = new PojokHimsiModel();
        $this->akademikModel = new AkademikModel();
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'nav'   => 'dashboard',
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/index', $data);
    }

    public function login()
    {
        if (session()->get("USERID")) {
            return redirect()->to('/admin');
        }

        return view('Admin/login');
    }

    public function logout()
    {
        session()->remove("USERID");
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function loginProcess()
    {
        // validation input
        if (!$this->validate([
            'username' => [
                'rules' => "required",
            ],
            'password' => 'required',
        ])) {
            return redirect()->to('/admin/login')->withInput();
        }

        $post = $this->request->getPost();
        $user = $this->usersModel->where(['username' => $post["username"]])->first();
        if ($user) {
            if ($user["password_hash"] === "ristekhimsioyeoye") {
                $params = ["USERID" => $user["id"]];
                session()->set($params);
                session()->setFlashdata('login', 'Login Berhasil!');
                return redirect()->to("/admin");
            }else {
                session()->setFlashdata('password', 'Password Salah!');
                return redirect()->to("/admin/login");
            }
        } else {
            session()->setFlashdata('error', 'Username tidak ada!');
            return redirect()->to("/admin/login");
        }
    }

    /* ==================== STAFFS ==================== */
    public function staffs()
    {
        $data = [
            'title'  => 'Staffs',
            'nav'    => 'staff',
            'staffs' => $this->staffModel->findAll(),
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/staffs', $data);
    }

    public function saveStaff()
    {
        // catch thumbnail
        $fileThumb = $this->request->getFile('picture');

        // move thumbnail to folder assets/img/pojok-himsi
        $fileThumb->move("Assets/img/" . $this->request->getVar('dinas') . "/staffs");

        // generate name random
        $fileName = $fileThumb->getName();

        $this->staffModel->save([
            'nama' => $this->request->getVar('nama'),
            'dinas' => $this->request->getVar('dinas'),
            'TTL'  => $this->request->getVar('TTL'),
            'jabatan' => $this->request->getVar('jabatan'),
            'alamat' => $this->request->getVar('alamat'),
            'angkatan' => $this->request->getVar('angkatan'),
            'hobi' => $this->request->getVar('hobi'),
            'instagram' => $this->request->getVar('instagram'),
            'email' => $this->request->getVar('email'),
            'kesan_pesan' => $this->request->getVar('kesan_pesan'),
            'picture' => $fileName
        ]);

        session()->setFlashdata('pesan', 'Data Staff berhasil dipost!');

        return redirect()->to('/admin/users/staffs');
    }

    public function deleteStaff($id)
    {
        $this->staffModel->delete($id);
        session()->setFlashdata('pesan', 'Data Staff berhasil dihapus!');
        return redirect()->to('admin/users/staffs');
    }

    public function editStaff()
    {

        $this->staffModel->save([
            'staffID' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'dinas' => $this->request->getVar('dinas'),
            'TTL'  => $this->request->getVar('TTL'),
            'jabatan' => $this->request->getVar('jabatan'),
            'alamat' => $this->request->getVar('alamat'),
            'angkatan' => $this->request->getVar('angkatan'),
            'hobi' => $this->request->getVar('hobi'),
            'instagram' => $this->request->getVar('instagram'),
            'email' => $this->request->getVar('email'),
            'kesan_pesan' => $this->request->getVar('kesan_pesan'),
        ]);

        session()->setFlashdata('pesan', 'Data Staff berhasil diubah!');

        return redirect()->to('/admin/users/staffs');
    }

    /* ==================== POJOK HIMSI ==================== */
    public function pojok_himsi()
    {
        $data = [
            'title' => 'Pojok HIMSI',
            'nav'   => 'pojok_himsi',
            'posts' => $this->pojokHimsiModel->orderBy('updated', 'desc')->findAll()
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/pojok-himsi', $data);
    }

    public function createPost()
    {
        session();

        $data = [
            'title'  => 'Create Post',
            'nav'    => 'pojok_himsi',
            'validation' => \Config\Services::validation()
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/create-post', $data);
    }

    public function savePost()
    {

        // validation input
        if (!$this->validate([
            'title' => [
                'rules' => "required|is_unique[pojok_himsi.title]",
                'errors' => [
                    'required' => '{field} title harus diisi.',
                    'is_unique' => '{field} judul post sudah pernah dibuat'
                ]
            ],
            'author' => 'required',
            'triggers' => 'required',
            'content' => 'required',
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,100000]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/users/createPost')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/users/createPost')->withInput();
        }

        // catch thumbnail
        $fileThumb = $this->request->getFile('thumbnail');

        // if there is no uploaded file
        if ($fileThumb->getError() == 4) {
            $fileName = 'default.jpg';
        } else {
            // generate name random
            $fileName = $fileThumb->getRandomName();

            // move thumbnail to folder assets/img/pojok-himsi
            $fileThumb->move('Assets/img/uploads', $fileName);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->pojokHimsiModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'slug'  => $slug,
            'content' => $this->request->getVar('content'),
            'thumbnail' => $fileName,
            'triggers' => $this->request->getVar('triggers')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil dipost!');

        return redirect()->to('/admin/users/pojok_himsi');
    }

    public function delete($id)
    {
        // catch image based on id
        $post = $this->pojokHimsiModel->find($id);

        // check if file imgage default
        if ($post["thumbnail"] != 'news.jpg') {
            // delete image
            unlink('Assets/img/uploads/' . $post["thumbnail"]);
        }

        $this->pojokHimsiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('admin/users/pojok_himsi');
    }

    public function editPost($slug)
    {
        session();

        $post = $this->pojokHimsiModel->where(['slug' => $slug])->first();
        $data = [
            'title'  => $post["title"],
            'nav'    => 'pojok_himsi',
            'validation' => \Config\Services::validation(),
            'post' => $post
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/edit-post', $data);
    }

    public function detailPost($slug)
    {

        $post = $this->pojokHimsiModel->where(['slug' => $slug])->first();

        $data = [
            'title' => $post["title"],
            'nav'   => 'pojok_himsi',
            'post' => $post,
            'folder' => 'pojok-himsi'
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/detail-post', $data);
    }

    public function update($id)
    {

        // validation input
        // cek title
        $oldPost = $this->pojokHimsiModel->where(['slug' => $this->request->getVar('slug')])->first();

        if ($oldPost['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[pojok_himsi.title]';
        }

        if (!$this->validate([
            'title' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => '{field} title harus diisi.',
                    'is_unique' => '{field} judul post sudah pernah dibuat'
                ]
            ],
            'triggers' => 'required',
            'author' => 'required',
            'content' => 'required',
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,100000]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/users/pojok_himsi')->withInput();
        }

        $fileThumb = $this->request->getFile('thumbnail');

        // check image, changed or old image
        if ($fileThumb->getError() == 4) {
            $fileName = $this->request->getVar('oldThumb');
        } else {
            // generate random file name
            $fileName = $fileThumb->getRandomName();

            // upload image
            $fileThumb->move('Assets/img/uploads', $fileName);

            // delete old file
            unlink('Assets/img/uploads/' . $this->request->getVar('oldThumb'));
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $updated   = date('Y-m-d H:i:s', time());

        $this->pojokHimsiModel->save([
            'postID' => $id,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'slug'  => $slug,
            'content' => $this->request->getVar('content'),
            'thumbnail' => $fileName,
            'updated' => $updated,
            'triggers' => $this->request->getVar('triggers')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/admin/users/pojok_himsi');
    }

    /* ==================== AKADEMIK ==================== */
    public function akademik()
    {
        $posts = $this->akademikModel->orderBy('updated', 'desc')->findAll();
        $data = [
            'title' => 'Akademik',
            'nav'   => 'akademik',
            'posts' => $posts,
            'validation' => \Config\Services::validation()
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/akademik', $data);
    }

    public function createPostAkademik()
    {
        session();

        $data = [
            'title'  => 'Create Post Akademik',
            'nav'    => 'akademik',
            'validation' => \Config\Services::validation()
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/create-akademik', $data);
    }

    public function savePostAka()
    {
        // validation input
        if (!$this->validate([
            'title' => 'required|is_unique[akademik.title]',
            'author' => 'required',
            'category' => 'required',
            'triggers' => 'required',
            'content' => 'required',
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,100000]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/users/createPostAkademik')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/users/createPostAkademik')->withInput();
        }

        // catch thumbnail
        $fileThumb = $this->request->getFile('thumbnail');

        // if there is no uploaded file
        if ($fileThumb->getError() == 4) {
            $fileName = 'default.jpg';
        } else {
            // generate name random
            $fileName = $fileThumb->getRandomName();

            // move thumbnail to folder assets/img/pojok-himsi
            $fileThumb->move('Assets/img/uploads', $fileName);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->akademikModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'slug'  => $slug,
            'category' => $this->request->getVar('category'),
            'content' => $this->request->getVar('content'),
            'thumbnail' => $fileName,
            'triggers' => $this->request->getVar('triggers')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil dipost!');

        return redirect()->to('/admin/users/akademik');
    }

    public function deleteAka($id)
    {
        // catch image based on id
        $post = $this->akademikModel->find($id);

        // check if file imgage default
        if ($post["thumbnail"] != 'news.jpg') {
            // delete image
            unlink('Assets/img/uploads/' . $post["thumbnail"]);
        }

        $this->akademikModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('admin/users/akademik');
    }

    public function editPostAkademik($slug)
    {
        session();

        $data = [
            'title'  => 'Edit Post',
            'nav'    => 'akademik',
            'validation' => \Config\Services::validation(),
            'post' => $this->akademikModel->where(['slug' => $slug])->first()
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/edit-akademik', $data);
    }

    public function detailPostAkademik($slug)
    {

        $post = $this->akademikModel->where(['slug' => $slug])->first();

        $data = [
            'title' => $post["title"],
            'nav'   => 'akademik',
            'post' => $post,
            'folder' => 'akademik'
        ];

        if (!session()->get("USERID")) {
            return redirect()->to('/admin/login');
        }

        return view('Admin/detail-post', $data);
    }

    public function updateAka($id)
    {
        // validation input
        // cek title
        $oldPost = $this->akademikModel->where(['slug' => $this->request->getVar('slug')])->first();

        if ($oldPost['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[pojok_himsi.title]';
        }

        if (!$this->validate([
            'title' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => '{field} title harus diisi.',
                    'is_unique' => '{field} judul post sudah pernah dibuat'
                ]
            ],
            'triggers' => 'required',
            'author' => 'required',
            'content' => 'required',
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,100000]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/users/pojok_himsi')->withInput();
        }

        $fileThumb = $this->request->getFile('thumbnail');

        // check image, changed or old image
        if ($fileThumb->getError() == 4) {
            $fileName = $this->request->getVar('oldThumb');
        } else {
            // generate random file name
            $fileName = $fileThumb->getRandomName();

            // upload image
            $fileThumb->move('Assets/img/uploads', $fileName);

            // delete old file
            unlink('Assets/img/uploads/' . $this->request->getVar('oldThumb'));
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $updated   = date('Y-m-d H:i:s', time());

        $this->akademikModel->save([
            'postID' => $id,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'slug'  => $slug,
            'category' => $this->request->getVar('category'),
            'content' => $this->request->getVar('content'),
            'thumbnail' => $fileName,
            'updated' => $updated,
            'triggers' => $this->request->getVar('triggers')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/admin/users/akademik');
    }

    /* ==================== SUMMER NOTE : TEXT EDITOR ==================== */
    public function upload()
    {

        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move('assets/img/uploads/', $fileName);
            echo base_url("assets/img/uploads/$fileName");
        }
    }

    public function deleteImg()
    {
        $src = $this->request->getVar('src');
        // http://localhost:8080/assets/img/uploads/1648635866_65a5c4eac6c471150ecd.jpeg
        if ($src) {
            $fileName = str_replace(base_url() . "/", "", $src);
            if (unlink($fileName)) {
                echo "Delete File Success!";
            }
        }
    }
}
