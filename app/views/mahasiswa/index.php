<div class="row mt-5">
    <div class="col-6">
        <h1>Daftar Mahasiswa</h1>
        <div class="ms-4">
            <?php $i = 1 ?>
            <?php foreach ($data["mahasiswa"] as $mhs) : ?>
                <h4><?= $i++ ?>. <?= $mhs["nama"] ?> (<?= $mhs['nim'] ?>)</h4>
                <ul>
                    <li><?= $mhs['email'] ?></li>
                    <li><?= $mhs['jurusan'] ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>