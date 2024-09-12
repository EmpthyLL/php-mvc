<?php
class About
{
    public function index($nama = 'Howard', $kerja = 'Mahasiswa', $umur = 23)
    {
        echo "
        <h1>Dukung Legalisasi Ganja!</h1>
        <p>Saya $nama ($umur), saya merupakan seorang $kerja.</p>
        ";
    }
    public function page()
    {
        echo "About/page";
    }
}
