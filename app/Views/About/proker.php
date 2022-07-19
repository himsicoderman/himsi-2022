<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<section class="features section profiles" id="features">
    <h1 class="timeline section-title-post proker-title">PROKER HIMSI FASILKOM UNSRI 2022</h1>
    <span class="border"></span>
    <div class="wrapper">
        <div class="center-line">
            <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
        </div>
        <?php $rowNumber = 1; ?>
        <?php foreach ($prokers as $proker) : ?>
            <div class="row row-<?= $rowNumber; ?>">
                <section>
                    <?= $proker["icon"]; ?>
                    <div class="details">
                        <span class="title"><?= $proker["nama"]; ?></span>
                    </div>
                    <span class="title">
                        <p><?= date('d F Y', strtotime($proker["pelaksanaan"])); ?></p>
                    </span>
                    <div class="bottom">
                        <a class="button btn-danger proker-view" type="button" data-toggle="modal" data-target="#myModal<?= $proker["prokerID"]; ?>">View Proker</a>
                    </div>
                </section>
            </div>
            <?php
            if ($rowNumber === 2) {
                $rowNumber = 1;
            } else {
                $rowNumber++;
            }
            ?>
            <div class="modal fade" id="myModal<?= $proker["prokerID"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?= $proker["nama"]; ?> <?= $proker["finished"]; ?> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item <?= $proker["poster"] === "NULL" ? "d-none" : ""; ?>">
                                    <img src="/Assets/img/proker-himsi/<?= $proker["poster"]; ?>" alt="" width="300">
                                </li>
                                <?php if ($proker["finished"] === "") : ?>
                                    <li class="list-group-item"><span class="font-weight-bold text-danger">Coming Soon</span></li>
                                <?php endif; ?>
                                <li class="list-group-item"><span class="font-weight-bold">Waktu Pelaksanaan:</span> <?= date('D, d M Y', strtotime($proker["pelaksanaan"])); ?></li>
                                <li class="list-group-item"><span class="font-weight-bold">Sasaran:</span> <?= $proker["sasaran"]; ?></li>
                                <li class="list-group-item"><span class="font-weight-bold">Deskripsi:</span> <?= $proker["deskripsi"]; ?></li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection(); ?>