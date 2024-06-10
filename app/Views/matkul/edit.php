<?php $this->extend('layout/template') ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3" style="margin-top: -100px;">Form Ubah Course</h1>
            <?php if (session('validation')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <?php foreach (session('validation')->getErrors() as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <form action="/matkul/update/<?= $matkul['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="matakuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="matakuliah" name="matakuliah" autofocus value="<?= $matkul['matakuliah']; ?>">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $matkul['judul']; ?>">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Deskripsi" name="deskripsi" value="<?= $matkul['deskripsi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tutor" class="col-sm-2 col-form-label">Tutor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tutor" name="tutor" value="<?= $matkul['tutor']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $matkul['sampul']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>