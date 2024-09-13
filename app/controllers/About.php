<?php
class About extends Controller
{
    public function index($nama = 'Howard', $kerja = 'Mahasiswa', $umur = 23)
    {
        $data["nama"] = $nama;
        $data["kerja"] = $kerja;
        $data["umur"] = $umur;
        $this->view("about/index", $data, 'About Me');
    }
    public function page()
    {
        $this->view("about/page", [], "Halaman Page");
    }
}
