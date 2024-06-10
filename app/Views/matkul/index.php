<?= $this->extend('layout/template'); ?>


<?= $this->Section('content'); ?>
<div class="continer">
    <div class="row">
        <div class="col">
            <main class="table">
                <section class="table__header">
                    <h2 class="mt-3">Data Course</h2>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <a href="/matkul/create" class="btn btn-primary mt-2">Tambah Data</a>
                </section>
                <section class="table__body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Sampul</th>
                                <th>Judul</th>
                                <th>Mata Kuliah</th>
                                <th>Deskripsi</th>
                                <th>Tutor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($matkul as $k) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><img src="/img/<?= $k["sampul"]; ?>" alt=""></td>
                                    <td><?= $k["judul"]; ?></td>
                                    <td><?= $k["matakuliah"]; ?></td>
                                    <td><?= $k["deskripsi"]; ?></td>
                                    <td><?= $k["tutor"]; ?></td>
                                    <td><a href="/matkul/<?= $k["id"]; ?>" class="btn btn-success">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>