<?php $this->extend("layoutuser/template") ?>

<?php $this->Section("content") ?>

<body style="background-color: #26355D;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-3" style="color: white;">Course Tersedia</h1>
                <hr>
                <?php foreach ($matkul as $k) : ?>
                    <div class="card mb-3" style="max-width: 1240px; height:230px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/<?= $k["sampul"]; ?>" class="img-fluid rounded-start" alt="..." width="400px" style="margin: 17px 17px; ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $k["judul"]; ?></h5>
                                    <hr>
                                    <p class="card-text" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden; text-overflow: ellipsis;">
                                        <b>Deskripsi: </b><?= $k["deskripsi"]; ?>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary"><b>Tutor: </b><?= $k["tutor"]; ?></small></p>
                                    <a href="" class="btn btn-outline-danger" style=" margin-left: 90%;margin-top: -4%;">Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php $this->endSection(); ?>
</body>