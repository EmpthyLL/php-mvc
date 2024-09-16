<div class="row mt-3 mb-5">
    <div class="col-6">
        <h1>Detail Mahasiswa</h1>
        <?php if($data): ?>
        <?php 
            $index = $data['id'];
            if($index % 21 == 0){
                $index = 21;
            } else {
                $index = $index % 21;
            }
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= BASEURL?>img/mikir <?= $index ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $data['nama']?> (<?= $data['nim']?>)</h5>
                <p class="card-subtitle mb-1 text-body-secondary"><?= $data['email']?></p>
                <p class="card-text"><?= $data['jurusan']?></p>
                <div class="d-flex justify-content-between">
                    <a href="<?= PATHNAME?>mahasiswa"
                        class="btn btn-sm btn-primary d-flex align-items-center gap-1"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-left-from-line">
                                <path d="m9 6-6 6 6 6" />
                                <path d="M3 12h14" />
                                <path d="M21 19V5" />
                            </svg></span><span>Go back</span></a>
                    <span class="d-flex gap-1">
                        <button data-bs-toggle="modal" data-bs-target="#UpdateModal"
                            class="btn btn-sm btn-warning text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen">
                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                <path
                                    d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                            </svg></button>
                        <button data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-sm btn-danger"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trash-2">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg></button>
                    </span>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Data Mahasiswa tidak ditemukan!
        </div>
        <?php endif ?>
    </div>
</div>
<div class="modal fade" id="UpdateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Ubah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= PATHNAME?>/mahasiswa/update/<?= $data['id']?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" value="<?= $data['nama']?>" required name="name" class="form-control"
                            id="name" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" value="<?= $data['nim']?>" required minlength="9" maxlength="9" name="nim"
                            class="form-control" id="nim" placeholder="NIM">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="<?= $data['email']?>" type="email" required name="email" class="form-control"
                            id="email" placeholder="example@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Jurusan</label>
                        <select class="form-select" required name="major" class="form-control" id="major">
                            <option disabled <?= empty($data['jurusan']) ? 'selected' : '' ?> value="">Pilih Jurusan
                            </option>
                            <option value="Arsitektur" <?= $data['jurusan'] == 'Arsitektur' ? 'selected' : '' ?>>
                                Arsitektur</option>
                            <option value="Seni Rupa" <?= $data['jurusan'] == 'Seni Rupa' ? 'selected' : '' ?>>Seni Rupa
                            </option>
                            <option value="Teknik Kehutanan"
                                <?= $data['jurusan'] == 'Teknik Kehutanan' ? 'selected' : '' ?>>Teknik Kehutanan
                            </option>
                            <option value="Ilmu Tumbuhan" <?= $data['jurusan'] == 'Ilmu Tumbuhan' ? 'selected' : '' ?>>
                                Ilmu Tumbuhan</option>
                            <option value="Seni Kriya" <?= $data['jurusan'] == 'Seni Kriya' ? 'selected' : '' ?>>Seni
                                Kriya</option>
                            <option value="Manajemen Bisnis"
                                <?= $data['jurusan'] == 'Manajemen Bisnis' ? 'selected' : '' ?>>Manajemen Bisnis
                            </option>
                            <option value="Ilmu Komunikasi dan Sosial"
                                <?= $data['jurusan'] == 'Ilmu Komunikasi dan Sosial' ? 'selected' : '' ?>>Ilmu
                                Komunikasi dan Sosial</option>
                            <option value="Teknik Informatika"
                                <?= $data['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik Informatika
                            </option>
                            <option value="Manajemen Pemasaran"
                                <?= $data['jurusan'] == 'Manajemen Pemasaran' ? 'selected' : '' ?>>Manajemen Pemasaran
                            </option>
                            <option value="Desain Komunikasi Visual"
                                <?= $data['jurusan'] == 'Desain Komunikasi Visual' ? 'selected' : '' ?>>Desain
                                Komunikasi Visual</option>
                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="return confirm('Anda Yakin?');" name="update"
                        class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Anda Yakin?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data akan dihapus secara permanen dan tidak akan bisa lagi dikembalikan. <strong>Anda Yakin?</strong>
            </div>
            <form action="<?= PATHNAME?>mahasiswa/delete/<?= $data['id']?>" method="post">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="delete" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>