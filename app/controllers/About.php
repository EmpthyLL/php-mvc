<?php
class About extends Controller
{
    public function index($nama = 'Sarah', $kerja = 'Seniman', $umur = 23): void
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
