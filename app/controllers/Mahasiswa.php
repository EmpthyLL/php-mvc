<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data["mahasiswa"] = $this->model('Mahasiswa_model')->getData();
        $this->view("mahasiswa/index", $data, 'Info Mahasiswa');
    }
}
