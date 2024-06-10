<?php $this->extend("layout/template") ?>


<?= $this->Section("content"); ?>
<div class="container" style="width: 60%;">
    <div class="row">
        <div class="col">
            <h2 class="mt-3" style="text-align: center;">Detail Course</h2>
            <hr border="3">
            <div class="card mb-3">
                <img src="/img/<?= $matkul["sampul"]; ?>" class="card-img-top" alt="..." width="">
                <div class="card-body">
                    <h5 class="card-title"><?= $matkul["judul"]; ?></h5>
                    <hr>
                    <p class="card-text"><b>Mata Kuliah: </b> <?= $matkul["matakuliah"]; ?></p>
                    <p class="card-text" style="font-size: 25px;"><small class="text-body-secondary"><b>Deskripsi: </b> <?= $matkul["deskripsi"]; ?></small></p>
                    <p class="card-text"><b>Tutor: </b> <?= $matkul["tutor"]; ?></p>
                    <a href="/matkul/edit/<?= $matkul['id']; ?>" class="submit1">Edit</a>
                    <form action="/matkul/<?= $matkul['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="submit1" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                    </form>
                    <br><br>
                    <a href="/matkul/index">Kembali ke daftar course</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>