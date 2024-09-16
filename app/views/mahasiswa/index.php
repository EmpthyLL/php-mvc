<div class="row mt-3 mb-5">
    <div class="col-8">
        <h1>Daftar Mahasiswa</h1>
        <div class="d-flex align-items-center gap-2 mb-3">
            <div class="flex-grow-1">
                <form action="<?= PATHNAME?>mahasiswa/search" method="post">
                    <div class="input-group">
                        <input type="search" name="keyword" class="form-control" placeholder="Ketikkan nama disini..."
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-search">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div>
                <button type="button" class="btn btn-primary d-flex align-items-center gap-1" data-bs-toggle="modal"
                    data-bs-target="#AddModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-plus">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                    <span>Add Data</span>
                </button>
            </div>
        </div>

        <?php Flasher::flash(); ?>
        <?php if(count($data["mahasiswa"]) !== 0): ?>
        <?php $i = 1 ?>
        <?php foreach ($data["mahasiswa"] as $mhs) : ?>
        <ul class="list-group">
            <li class="list-group-item d-flex  justify-content-between">
                <span><?= $i++ ?>.
                    <?= $mhs['nama'] ?></span>
                <!-- <span class="badge d-flex align-items-center text-bg-dark text-white"><?= $mhs['nim'] ?></span> -->
                <span><a class="badge text-white text-bg-info align-items-center link-underline link-underline-opacity-0"
                        href="<?= PATHNAME?>mahasiswa/detail/<?= $mhs['id']?>"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg></a>
                </span>
            </li>
        </ul>
        <?php endforeach ?>
        <?php else: ?>
        <div class="alert alert-warning" role="alert">
            Daftar Mahasiswa masih kosong!
        </div>
        <?php endif ?>
    </div>
    </d>
</div>
<div class="modal fade" id="AddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= PATHNAME?>mahasiswa/add" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" required name="name" class="form-control" id="name" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" required minlength="9" maxlength="9" name="nim" class="form-control" id="nim"
                            placeholder="NIM">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" required name="email" class="form-control" id="email"
                            placeholder="example@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Jurusan</label>
                        <select class="form-select" required name="major" class="form-control" id="major">
                            <option disabled selected value="">Pilih Jurusan</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Seni Rupa">Seni Rupa</option>
                            <option value="Teknik Kehutanan">Teknik Kehutanan</option>
                            <option value="Ilmu Tumbuhan">Ilmu Tumbuhan</option>
                            <option value="Seni Kriya">Seni Kriya</option>
                            <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                            <option value="Ilmu Komunikasi dan Sosial">Ilmu Komunikasi dan Sosial</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>