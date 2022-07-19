        <?= $this->extend('Layouts/Web/templates.php'); ?>

        <?= $this->section('main-content'); ?>
        <!--==================== HOME ====================-->
        <!-- <h1 class="akademik-title">Akademik</h1>
        <span class="border"></span> -->
        <section class="akademik " id="home">
            <div class="grid-container">
                <div class="container aka-card">
                    <div class="card">
                        <img src="/Assets/img/akademik/beasiswa.jpg" alt="">
                    </div>
                    <div class="details">
                        <a href="/beasiswa">
                            <h2>Beasiswa</h2>
                            <i class='bx bxs-right-arrow-square bigger'></i>
                        </a>
                    </div>
                </div>
                <div class="container aka-card">
                    <div class="card">
                        <img src="/Assets/img/akademik/lomba.jpg" alt="">
                    </div>
                    <div class="details">
                        <a href="/lomba">
                            <h2>Lomba</h2>
                            <i class='bx bxs-right-arrow-square bigger'></i>
                        </a>
                    </div>
                </div>
                <div class="container aka-card">
                    <div class="card">
                        <img src="/Assets/img/akademik/webinar.jpg" alt="">
                    </div>
                    <div class="details">
                        <a href="/webinar">
                            <h2>Webinar</h2>
                            <i class='bx bxs-right-arrow-square bigger'></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="grid-container">
                <?php

                use App\Helpers\Helpers;

                foreach ($posts as $post) : ?>

                    <div class="container">
                        <div class="card">
                            <img src="/Assets/img/uploads/<?= $post["thumbnail"]; ?>" alt="">
                            <div class="desc">
                                <div class="title">
                                    <p class="title-aka">
                                        <?= $post["title"]; ?> | <span class="category-aka"><?= $post["category"]; ?></span> <br> 
                                    </p>
                                    <p class="content-description">
                                        <?= Helpers::excerpt($post["triggers"]); ?>
                                    </p>
                                </div>
                                <div class="btn-container">
                                    <div class="btn">
                                        <a href="/<?= strtolower($post["category"]); ?>/<?= $post["slug"]; ?>">
                                            <p class="xsamll">Lihat Detail</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?= $this->endSection(); ?>