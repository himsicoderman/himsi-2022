<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<section class="ekspresi__wrapper">
    <!-- Header -->
    <section class="top__section" style="background-image: url(/Assets/img/pojok-himsi/pojok-himsi-banner.png);">
        <section class="ekspresi__header">
            <h1 class="home__title" style="color: #F4F4F4;">POJOK HIMSI</h1>
            <p>Pojok HIMSI merupakan halaman informasi terkait program - program kerja beserta event atau kegiatan yang telah dilaksanakan di HIMSI Fasilkom UNSRI.</p>
            <a href="#pojok-himsi" class="venobox">
                <button>Explore <i class="ri-arrow-right-down-line button__icon"></i></button>
            </a>
        </section>
    </section>
</section>
<section class="section" id="pojok-himsi">
    <div class="pojok-himsi">
        <div class="col-div-8">

            <div class="blog-box">
                <img src="/Assets/img/pojok-himsi/SS_MO.jpg">
                <a href="/pojok-himsi/<?= $latest["slug"]; ?>" class="link-blog-box">
                    <div class="overlay">
                        <div class="content-box">
                            <span><?= $latest["published"]; ?></span>
                            <p><?= $latest["title"]; ?></p>
                        </div>
                    </div>
                </a>
            </div>

            <?php

            use App\Helpers\Helpers;

            foreach ($posts as $post) : ?>
                <div class="blog-box-s">
                    <img src="/Assets/img/uploads/<?= $post["thumbnail"]; ?>">
                    <div class="content" style="padding: .9rem;">
                        <p><?= $post["title"]; ?></p>
                        <p>
                            <?= Helpers::excerpt($post["triggers"], 200); ?>
                        </p>
                        <br />
                        <a href="/pojok-himsi/<?= $post["slug"]; ?>" class="self-page-link">[Continue Reading...]</a>
                        <br /><br />
                        <p><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= date('M d, Y', strtotime($post["published"])); ?> &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i></span></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="col-div-4">
            <div class="blog-box-m">
                <img src="/Assets/img/pojok-himsi/1.jpg">
                <div class="content">
                    <p>Pengukuhan Ormawa Fasilkom Universitas Sriwijaya 2022</p>
                    <p>The Post will be published Soon
                    </p>
                </div>
            </div>

            <div class="blog-box-m">
                <img src="/Assets/img/pojok-himsi/2.png">
                <div class="content">
                    <p>Workshop Design Grafis</p>
                    <p>The Post will be published Soon
                    </p>
                </div>
            </div>

            <div class="blog-box-m">
                <img src="/Assets/img/pojok-himsi/3.png">
                <div class="content">
                    <p>Rapat Global Perdana HIMSI Fasilkom UNSRI 2022</p>
                    <p>The Post will be published Soon
                    </p>
                </div>
            </div>

            <br><br>

            <div class="f-box" id="tentang">
                <p class="heading-1">Recent Post</p>
                <hr class="hr" />
                <br />
                <div class="blog-box-m">
                    <img src="/Assets/img/uploads/<?= $recent["thumbnail"]; ?>">
                    <div class="content">
                        <p><a href="/pojok-himsi/<?= $recent["slug"]; ?>" class="self-page-link"><?= $recent["title"]; ?></a></p>
                        <p><?= Helpers::excerpt($recent["triggers"], 70); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="f-box" id="terbaru">
                <!-- <p class="heading-1">Recent posts</p>
                <hr class="hr" style="left: 43%; width: 57%;" />
                <br />

                <div class="recent">
                    <div class="col-div-4">
                        <img src="/Assets/img/uploads/<?= $recent["thumbnail"]; ?>" style="width: 100%;">
                    </div>
                    <div class="col-div-8">
                        <p class="r-p"><a href="/pojok-himsi/<?= $recent["slug"]; ?>" class="self-page-link"><?= $recent["title"]; ?></a></p>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;July 24, 2016 &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i></span></p>
                    </div>
                    <div class="clearfix"></div>
                </div> -->

                <!-- <div class="recent">
                    <div class="col-div-4">
                        <img src="/Assets/img/pojok-himsi/list-img-4.jpg" style="width: 100%;">
                    </div>
                    <div class="col-div-8">
                        <p class="r-p"><a href="selfpage.html" class="self-page-link">Fashion fade, style is eternal</a></p>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;July 24, 2016 &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i> Travel</span></p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="recent">
                    <div class="col-div-4">
                        <img src="/Assets/img/pojok-himsi/list-img-4.jpg" style="width: 100%;">
                    </div>
                    <div class="col-div-8">
                        <p class="r-p"><a href="selfpage.html" class="self-page-link">Fashion fade, style is eternal</a></p>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;July 24, 2016 &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i> Travel</span></p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="recent">
                    <div class="col-div-4">
                        <img src="/Assets/img/pojok-himsi/list-img-4.jpg" style="width: 100%;">
                    </div>
                    <div class="col-div-8">
                        <p class="r-p"><a href="selfpage.html" class="self-page-link">Fashion fade, style is eternal</a></p>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;July 24, 2016 &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i> Travel</span></p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="recent">
                    <div class="col-div-4">
                        <img src="/Assets/img/pojok-himsi/list-img-4.jpg" style="width: 100%;">
                    </div>
                    <div class="col-div-8">
                        <p class="r-p"><a href="selfpage.html" class="self-page-link">Fashion fade, style is eternal</a></p>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;July 24, 2016 &nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa-fa-folder"></i> Travel</span></p>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
            </div>

            <div class="f-box" id="category">
                <p class="heading-1">Periode</p>
                <hr class="hr" style="left: 40%; width: 60%;">
                <br />
                <p class="c-p"><a href="#" class="self-link-page" style="color: #FFF;"><i class="fa fa-folder"></i>&nbsp;&nbsp; 2022 </a></p>
                <p class="c-p"><a href="#" class="self-link-page" style="color: #FFF;"><i class="fa fa-folder"></i>&nbsp;&nbsp; 2021 </a></p>
                <p class="c-p"><a href="#" class="self-link-page" style="color: #FFF;"><i class="fa fa-folder"></i>&nbsp;&nbsp; 2020 </a></p>
                <p class="c-p"><a href="#" class="self-link-page" style="color: #FFF;"><i class="fa fa-folder"></i>&nbsp;&nbsp; 2019 </a></p>
                <p class="c-p"><a href="#" class="self-link-page" style="color: #FFF;"><i class="fa fa-folder"></i>&nbsp;&nbsp; 2018 </a></p>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</section>
<?= $this->endSection(); ?>