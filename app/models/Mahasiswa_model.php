<?php
class Mahasiswa_model
{
    private $mahasiswa = [
        [
            "nama" => "Kira",
            "nim" => "24143364",
            "email" => "kirana.kirana@msic.com",
            "jurusan" => "Ilmu Tumbuhan",
        ],
        [
            "nama" => "Jaka",
            "nim" => "241133431",
            "email" => "jaka.desana@msic.com",
            "jurusan" => "Teknik Kehutanan",
        ],
        [
            "nama" => "Hari",
            "nim" => "241243452",
            "email" => "hari.hari@msic.com",
            "jurusan" => "Manajemen Pemasaran",
        ],
        [
            "nama" => "Lola",
            "nim" => "243133354",
            "email" => "lolia.eriana@msic.com",
            "jurusan" => "Ilmu Komunikasi dan Sosial",
        ],
        [
            "nama" => "Saka",
            "nim" => "242433112",
            "email" => "saka.taruma@msic.com",
            "jurusan" => "Seni Kriya",
        ],
    ];
    public function getData()
    {
        return $this->mahasiswa;
    }
}
