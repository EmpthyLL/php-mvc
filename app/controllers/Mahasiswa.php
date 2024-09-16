<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data["mahasiswa"] = $this->model('Mahasiswa_model')->getData();
        $this->view("mahasiswa/index", $data, 'Info Mahasiswa');
    }    
    public function search()
    {
        if($_POST['keyword']){
            $data["mahasiswa"] = $this->model('Mahasiswa_model')->searchData($_POST['keyword']);
            if(count($data["mahasiswa"]) === 0){
                Flasher::setFlash('Tidak ada data yang ditemukan!','warning',false,2);
                header('Location:'.PATHNAME."mahasiswa");
            exit;
            }
            $this->view("mahasiswa/index", $data, 'Info Mahasiswa');
        }
        else{
            Flasher::setFlash('Tolong ketikkan keyword pencarian!','warning',true,2);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
    }
    public function detail($id = null){
        if(is_null($id)){
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        $mahasiswa = $this->model('Mahasiswa_model')->getIDData($id);
        $data = [];
        if($mahasiswa){
            $data['id'] = $mahasiswa['id'];
            $data['nama'] = $mahasiswa['nama'];
            $data['nim'] = $mahasiswa['nim'];
            $data['email'] = $mahasiswa['email'];
            $data['jurusan'] = $mahasiswa['jurusan'];
        }
        $this->view("mahasiswa/detail", $data, 'Detail Mahasiswa');
    }
    public function add(){
        if(count($_POST) === 0){
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        $res = $this->model('Mahasiswa_model')->postData($_POST);
        if($res === 2){
            Flasher::setFlash('NIM tidak valid!','danger',true,4);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        else if($res === 1){
            Flasher::setFlash('Data berhasil ditambahkan!','success',false,2);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        else{
            Flasher::setFlash('Data tidak berhasil ditambahkan!','danger',false,4);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
    }
    public function delete($id = null){
        if(is_null($id)){
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        $res = $this->model('Mahasiswa_model')->deleteData($id);
        if($res === 1){
            Flasher::setFlash('Data berhasil dihapus!','success',false,2);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        else{
            Flasher::setFlash('Data tidak berhasil dihapus!','danger',false,4);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
    }    
    public function update($id = null){
        if(is_null($id)){
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        if(count($_POST) === 0){
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        $res = $this->model('Mahasiswa_model')->updateData($_POST,$id);
        if($res === 2){
            Flasher::setFlash('NIM tidak valid!','danger',true,4);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        else if($res === 1){
            Flasher::setFlash('Data berhasil diubah!','success',false,2);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
        else{
            Flasher::setFlash('Data tidak berhasil diubah!','danger',false,4);
            header('Location:'.PATHNAME."mahasiswa");
            exit;
        }
    }
}