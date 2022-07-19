    <?= $this->extend('Layouts/Web/templates.php'); ?>

    <?= $this->section('main-content'); ?>
    <!--==================== HOME ====================-->
    <section class="home" id="home">
      <div class="home__container container grid">
        <!-- <img src="<?= base_url(); ?>/Assets/img/home.png" alt="" class="home__img" /> -->
        <div class="home__img swiper">
          <div class="swiper-wrapper">
            <div class="decoration__data inti__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Fajrul.png" alt="" class="decoration__img inti__img" />
              <h3 class="decoration__title">M Fajrul Azhim</h3>
              <h6>Bupati HIMSI Fasilkom UNSRI 2022</h6>
              <!-- <a href="#" class="button button-link inti__button">Go Shopping</a> -->
            </div>

            <div class="decoration__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Fahada.png" alt="" class="decoration__img" />
              <h3 class="decoration__title">M Fahada Al Ghifary</h3>
              <h6>Wakil Bupati HIMSI <br />Fasilkom UNSRI 2022</h6>
              <!-- <a href="#" class="button button-link">Go Shopping</a> -->
            </div>

            <div class="decoration__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Ayesha.png" alt="" class="decoration__img" />
              <h3 class="decoration__title">Ayesha Putri Malika</h3>
              <h6>
                Sekretaris Umum HIMSI <br />
                Fasilkom UNSRI 2022
              </h6>
              <!-- <a href="#" class="button button-link">Go Shopping</a> -->
            </div>

            <div class="decoration__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Millah.png" alt="" class="decoration__img" />
              <h3 class="decoration__title">Izzati Millah Hanifah</h3>
              <h6>
                Wakil Sekretaris Umum HIMSI <br />
                Fasilkom UNSRI 2022
              </h6>
              <!-- <a href="#" class="button button-link">Go Shopping</a> -->
            </div>

            <div class="decoration__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Muti.png" alt="" class="decoration__img" />
              <h3 class="decoration__title">Mutiara Fajaria</h3>
              <h6>
                Bendahara Umum HIMSI <br />
                Fasilkom UNSRI 2022
              </h6>
              <!-- <a href="#" class="button button-link">Go Shopping</a> -->
            </div>

            <div class="decoration__data swiper-slide">
              <img src="<?= base_url(); ?>/Assets/img/home/Inti_Adya.png" alt="" class="decoration__img" />
              <h3 class="decoration__title">Adya Salwa Dyani</h3>
              <h6>
                Wakil Bendahara Umum HIMSI <br />
                Fasilkom UNSRI 2022
              </h6>
              <!-- <a href="#" class="button button-link">Go Shopping</a> -->
            </div>
          </div>
          <div class="swiper-pagination swiper-pagination-bullets"></div>
        </div>

        <div class="home__data">
          <h1 class="home__title">
            HIMSI FASILKOM <br />
            UNIVERSITAS SRIWIJAYA
          </h1>
          <p class="home__description">
            Salah satu HMJ (Himpunan Mahasiswa Jurusan) yang ada di Fakultas
            Ilmu Komputer Universitas Sriwijaya yang berfokus pada kegiataan
            kemahasiswaan yang membangun dan memajukan fakultas dan jurusan.
          </p>
          <a href="#about" class="button button--flex">
            Explore <i class="ri-arrow-right-down-line button__icon"></i>
          </a>
        </div>

        <div class="home__social">
          <span class="home__social-follow">Follow Us</span>

          <div class="home__social-links">
            <a href="https://www.youtube.com/channel/UCmyzeEb4Q1FCrGQ2kxeIiLQ" target="_blank" class="home__social-link">
              <i class="ri-youtube-line"></i>
            </a>
            <a href="https://www.instagram.com/himsiunsri/" target="_blank" class="home__social-link">
              <i class="ri-instagram-line"></i>
            </a>
            <a href="https://page.line.me/?accountId=himsiunsri" target="_blank" class="home__social-link">
              <i class="ri-line-line"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- <section>
      <h1 class="home__typed">#NyatakanAmbisiDenganAksi</h1>
    </section> -->

    <!--==================== ABOUT ====================-->
    <section class="about section container" id="about">
      <div class="about__container grid">
        <img src="<?= base_url(); ?>/Assets/img/about.png" alt="" class="about__img" />

        <div class="about__data">
          <h2 class="section__title about__title">
            Nyatakan Ambisi <br />
            Dengan Aksi
          </h2>

          <p class="about__description">
            <b style="color: var(--first-color);">#NyatakanAmbisiDenganAksi</b> merupakan tagline untuk HIMSI Fasilkom UNSRI Periode 2022. Yang selalu mengingatkan seluruh anggota didalamnya agar selalu beraksi untuk m.ewujudkan ambisi yang kuat
          </p>

          <div class="about__details">
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              Terdiri dari 8 Dinas beserta 6 Divisi.
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              Terdapat banyak sekali proker - proker keren! Cek <a href="/about/proker">disini</a>
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              Sudah berdiri dan aktif beroperasi lebih dari 13 tahun.
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              Yang paling utama, HIMSI Fasilkom UNSRI Solid 🔥.
            </p>
          </div>

          <a href="/about/logo" class="button--link button--flex">
            More About HIMSI <i class="ri-arrow-right-down-line button__icon"></i>
          </a>
        </div>
      </div>
    </section>

    <br><br><img src="Assets/img/redzone-banner.png" class="img__banner__home" alt="" srcset=""><br><br><br>

    <!-- ==================== FEATURES ==================== -->
    <section class="features section" id="features">
      <h1 class="features-title">Features</h1>
      <span class="border"></span>


      <div class="features__container bd-grid">
        <div class="features__data">
          <i class="uil uil-newspaper features__icon"></i>
          <h3 class="features__title">Pojok HIMSI</h3>
          <a href="/pojok-himsi" class="button-link available">Tersedia</a>
        </div>

        <div class="features__data">
          <i class="uil uil-font features__icon"></i>
          <h3 class="features__title">Akademik</h3>
          <a href="/akademik" class="button-link available">Tersedia</a>
        </div>

        <div class="features__data">
          <i class="uil uil-microphone features__icon"></i>
          <h3 class="features__title">Ekspresi</h3>
          <a href="/ekspresi" class="button-link available">Tersedia</a>
        </div>

        <div class="features__data">
          <i class="uil uil-clipboard features__icon"></i>
          <h3 class="features__title">BAPERAN</h3>
          <a href="https://baperan.himsiunsri.org/landing/" class="button-link available">Tersedia</a>
        </div>

        <div class="features__data">
          <i class="uil uil-box features__icon"></i>
          <h3 class="features__title">ASPIRASI</h3>
          <a href="#" class="button-link coming-soon">Coming Soon</a>
        </div>

        <div class="features__data">
          <i class="uil uil-graduation-cap features__icon"></i>
          <h3 class="features__title">iMABA</h3>
          <a href="/imaba" class="button-link coming-soon">Coming Soon</a>
        </div>

      </div>
    </section>

    <!-- ==================== POJOK HIMSI ==================== -->
    <section class="pojokHIMSI section" id="pojokHIMSI">
      <h2 class="features-title">
        PROGRAM KERJA HIMSI
      </h2>
      <span class="border"></span>

      <div class="pojokHIMSI__container container-post swiper">
        <div class="swiper-wrapper">
          <?php

          use App\Helpers\Helpers;

          foreach ($posts as $post) : ?>
            <!-- ==================== CONTENT 1 ==================== -->
            <div class="pojokHIMSI__content grid-post swiper-slide">
              <img src="Assets/img/uploads/<?= $post["thumbnail"]; ?>" alt="" class="pojokHIMSI__img" />

              <div class="pojokHIMSI__data">
                <h3 class="pojokHIMSI__title about__title"><?= $post["title"]; ?></h3>
                <div class="pojokHIMSI__description">
                  <?= Helpers::excerpt($post["triggers"]); ?>
                </div>
                <a href="/pojok-himsi/<?= $post["slug"]; ?>" class="button button--flex button--small pojokHIMSI__button">
                  Read More <i class="uil uil-arrow-right button__icon"></i>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-next">
          <i class="uil uil-angle-right swiper-pojok-icon"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="uil uil-angle-left swiper-pojok-icon"></i>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!--==================== STEPS ====================-->
    <section class="steps section container">
      <div class="steps__bg">
        <h2 class="section__title-center steps__title">
          Web HIMSI Menyediakan <br />
          Informasi Akademik
        </h2>

        <div class="steps__container grid">
          <div class="steps__card">
            <h3 class="steps__card-title"><a href="/beasiswa">Beasiswa</a></h3>
            <img src="<?= base_url(); ?>/Assets/img/bea.png" alt="" width="90">
            <p class="steps__card-description">
              Informasi terkait beasiswa - beasiswa yang sangat menguntungkan.
            </p>
          </div>

          <div class="steps__card">
            <h3 class="steps__card-title"><a href="/lomba">Lomba</a></h3>
            <img src="<?= base_url(); ?>/Assets/img/lomba.png" alt="" width="90">
            <p class="steps__card-description">
              Informasi terkait lomba - lomba tingkat mahasiswa baik universitas maupun nasional.
            </p>
          </div>

          <div class="steps__card">
            <h3 class="steps__card-title"><a href="/webinar">Webinar</a></h3>
            <img src="<?= base_url(); ?>/Assets/img/webinar.png" alt="" width="90">
            <p class="steps__card-description">
              Informasi terkait Webinar yang sangat meaningfull dan inspiratif.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== GREETING ==================== -->
    <section class="greeting section">
      <h2 class="features-title">
        Apa Kata Mereka?
      </h2>
      <span class="border"></span>
      <span class="section__subtitle"></span>
      <div class="greeting__container bd-container__post swiper">
        <div class="swiper-wrapper">
          <div class="greeting__content swiper-slide">
            <div class="greeting__data">
              <div class="greeting__header">
                <img src="<?= base_url(); ?>/Assets/img/fajrul.png" alt="" class="greeting__img" />

                <div>
                  <h3 class="greeting__name">Muhammad Fajrul Azhim</h3>
                  <span class="greeting__level">Bupati HIMSI UNSRI 2021 / 2022</span>
                </div>
              </div>
            </div>

            <p class="greeting__description">
              HIMSI atau Himpunan Mahasiswa Sistem Informasi adalah salah satu
              HMJ yang ada di Fakultas Ilmu Komputer Universitas Sriwijaya.
              HIMSI hadir sebagi jembatan bagi mahasiswa dan pihak jurusan
              dalam berbagai hal. Harapannya website ini dapat membantu
              mahasiswa SI, khususnya dalam mencari dan mengakses berbagai
              informasi terkait akademik, fakultas, dan jurusan, serta sebagai
              sarana bagi HIMSI itu sendiri dalam membagikan kegiatan-kegiatan
              yang dilakukan. Tentunya, kami selalu membuka segala macam
              bentuk saran dan kritik demi penyempurnaan website ini dan
              kebaikan untuk fakultas, jurusan, dan HIMSI. Semoga website ini
              dapat bermanfaat untuk kita semua dan semoga mahasiswa SI dapat
              memanfaatkan serta memaksimalkan fungsi dari website ini dan
              dapat membantu kita semua. Terima kasih dan semangat!
              <b>#NyatakanAmbisiDenganAksi</b>
            </p>
          </div>

          <div class="greeting__content swiper-slide">
            <div class="greeting__data">
              <div class="greeting__header">
                <img src="<?= base_url(); ?>/Assets/img/fahada.png" alt="" class="greeting__img" />

                <div>
                  <h3 class="greeting__name">Muhammad Fahada Al Ghifary</h3>
                  <span class="greeting__level">Wakil Bupati HIMSI UNSRI 2021 / 2022</span>
                </div>
              </div>
            </div>

            <p class="greeting__description">
              Perjalanan jauh yang diisi dengan kebersamaan pasti akan terasa
              singkat dan menyenangkan. Kebersamaan adalah suatu hal yang
              mahal dan tak ternilai harganya, maka beruntunglah kita yang
              mampu mendapatkannya. Akan ada banyak sekali kesempatan yang
              datang tetapi kesempatan hanya untuk orang yang berani untuk
              mengambil kesempatan tersebut, orang yang berani untuk memulai
              suatu proses. Di HIMSI, kita dapat memanfaatkan kesempatan
              tersebut dan jangan lewatkan kesempatan itu menjadi sebuah hal
              yang sia sia. Mari kita rancang masa depan kita dari sekarang
              dan mari kita buat mimpi-mimpi kita menjadi kenyataan di esok
              hari. Ingatlah, suatu hal akan terihat tidak mungkin jika kita
              belum menyelesaikannya. Selaku pemuda penerus bangsa, kita harus
              mewarisi api semangat para pendahulu kita! Hidup Mahasiswa!
            </p>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-greeting"></div>
      </div>
    </section>

    <!--========== SEND GIFT ==========-->
    <!-- <section class="send section__send">
      <div class="send__container bd-container__post bd-grid">
        <div class="send__content">
          <h2 class="section-title-center send__title">Send Gift Now</h2>
          <p class="send__description">
            Start giving away before the holidays are over. Write the home
            address of the person who will send the gift.
          </p>
          <form action="">
            <div class="send__direction">
              <input type="text" placeholder="House address" class="send__input" />
              <a href="#" class="button">Send</a>
            </div>
          </form>
        </div>

        <div class="send__img">
          <img src="<?= base_url(); ?>/Assets/img/send.png" alt="" />
        </div>
      </div>
    </section> -->

    <!--==================== INSTAGRAM ====================-->
    <section class="about section container" id="about">
      <div class="about__container grid">
        <img src="<?= base_url(); ?>/Assets/img/himsi-unsri-ig.png" alt="" class="about__img follow-ig" width="350" />

        <div class="about__data" style="align-self: center;">
          <h2 class="section__title about__title">
            Follow Our Instagram<br />
            at @himsiunsri
          </h2>

          <a href="https://www.instagram.com/himsiunsri/" class="button--link button--flex">
            Follow Us <i class="ri-arrow-right-down-line button__icon"></i>
          </a>
        </div>
      </div>
    </section>

    <!--==================== QUESTIONS ====================-->
    <section class="questions section" id="faqs">
      <h2 class="section__title-center questions__title container">
        FAQ <br />
        HIMSI Fasilkom UNSRI
      </h2>

      <div class="questions__container container grid">
        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Apa itu HIMSI Fasilkom UNSRI?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Salah satu HMJ (Himpunan Mahasiswa Jurusan) yang ada di Fakultas Ilmu Komputer Universitas Sriwijaya yang berfokus pada kegiataan kemahasiswaan yang membangun dan memajukan fakultas dan jurusan.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Siapa Saja Yang Ada di HIMSI Fasilkom UNSRI?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mahasiswa Aktif Sistem Informasi Angkatan 2020 dan 2021 yang telah mengikuti rangkaian Open Recruitment.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Bagaimana Cara Bergabung di HIMSI Fasilkom UNSRI?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Untuk bergabung di HIMSI Fasilkom UNSRI, kalian harus mengikuti rangkaian Open Recruitment yang diadakan di awal periode baru HIMSI Fasilkom UNSRI tiap tahunnya. Untuk Informasi Lebih lanjut dapat mengakses link <a target="_blank" href="https://oprec.himsiunsri.org">More Information</a>
              </p>
            </div>
          </div>
        </div>

        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Bagaimana Cara Bergabung di HIMSI Fasilkom UNSRI?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">Ada Berapa Dinas dalam HIMSI Fasilkom UNSRI?</h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                HIMSI Fasilkom UNSRI terdiri atas tujuh dinas, yang bergerak di bidangnya masing - masing dengan tujuan memajukan HIMSI Fasilkom UNSRI. Ada beberpa dinas yang dipecah menjadi beberapa divisi, yang menangani tupoksi lebih spesifik. Cari di bagian Profile jika anda ingin mengenal lebih jauh dinas yang ada di HIMSI Fasilkom UNSRI
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Apa Program Kerja Terbesar di HIMSI Fasilkom UNSRI?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                SI FEST (Sistem Informasi Festival) di tahun ini. SI FEST merupakan acara tahunan yang selalu berinovasi untuk tetap berkontribusi aktif memberikan edukasi khususnya di bidang teknologi. Adapun kegiatan yang akan diadakan di SI FEST 2021 yaitu Lomba, Bazar, dan Webinar. Kalau ingin tahu lebih banyak proker - proker keren yang ada di HIMSI Fasilkom UNSRI, kunjungi halaman <a href="/about/proker">Program Kerja</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== CONTACT ====================-->
    <section class="contact section container" id="contact">
      <div class="contact__container grid">
        <div class="contact__box">
          <h2 class="section__title">
            Berikan feedback <br />
            dan kontak kami untuk <br />
            informasi lebih
          </h2>

          <div class="contact__data">
            <div class="contact__information">
              <h3 class="contact__subtitle">Visit Our OA Line</h3>
              <span class="contact__description">
                <i class="ri-line-fill contact__icon"></i>
                @himsiunsri
              </span>
            </div>

            <div class="contact__information">
              <h3 class="contact__subtitle">Write us by mail</h3>
              <span class="contact__description">
                <i class="ri-mail-line contact__icon"></i>
                himsifasilkomunsri@gmail.com
              </span>
            </div>
          </div>
        </div>

        <form action="/home/contactUs" method="POST" class="contact__form">
          <?= csrf_field(); ?>
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              Success! <?= session()->getFlashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <div class="contact__inputs">
            <div class="contact__content">
              <input type="email" placeholder=" " class="contact__input" name="email" />
              <label for="" class="contact__label">Email</label>
            </div>

            <div class="contact__content">
              <input type="text" placeholder=" " class="contact__input" name="subject" />
              <label for="" class="contact__label">Subject</label>
            </div>

            <div class="contact__content contact__area">
              <textarea name="message" placeholder=" " class="contact__input"></textarea>
              <label for="" class="contact__label">Message</label>
            </div>
          </div>

          <button class="button button--flex" type="submit" name="send">
            Send Message
            <i class="ri-arrow-right-up-line button__icon"></i>
          </button>
        </form>
      </div>
    </section>
    <?= $this->endSection(); ?>