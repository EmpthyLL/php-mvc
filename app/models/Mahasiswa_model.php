<?php
class Mahasiswa_model
{
    // private $mahasiswa = [
    //     [
    //         "nama" => "Kira",
    //         "nim" => "24143364",
    //         "email" => "kirana.kirana@msic.com",
    //         "jurusan" => "Ilmu Tumbuhan",
    //     ],
    //     [
    //         "nama" => "Jaka",
    //         "nim" => "241133431",
    //         "email" => "jaka.desana@msic.com",
    //         "jurusan" => "Teknik Kehutanan",
    //     ],
    //     [
    //         "nama" => "Hari",
    //         "nim" => "241243452",
    //         "email" => "hari.hari@msic.com",
    //         "jurusan" => "Manajemen Pemasaran",
    //     ],
    //     [
    //         "nama" => "Lola",
    //         "nim" => "243133354",
    //         "email" => "lolia.eriana@msic.com",
    //         "jurusan" => "Seni Kriya",
    //     ],
    //     [
    //         "nama" => "Saka",
    //         "nim" => "242433112",
    //         "email" => "saka.taruma@msic.com",
    //         "jurusan" => "Ilmu Komunikasi dan Sosial",
    //     ],
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getData()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
    public function getIDData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function searchData($keyword){
        $this->db->query("SELECT * FROM $this->table WHERE nama LIKE :keyword");
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }
    public function postData($data)
    {
        $nama = $data ['name'];
        $nim = $data['nim'];
        $email = $data['email'];
        $jurusan = $data['major'];
        if(!is_numeric($nim)){
            return 2;
        }
        $this->db->query("INSERT INTO $this->table VALUE ('', :nama, :nim, :email, :jurusan)");
        $this->db->bind('nama',$nama);
        $this->db->bind('nim',$nim);
        $this->db->bind('email',$email);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
        return $this->db->changes();
    }
    public function deleteData($id){
        $this->db->query("DELETE FROM $this->table WHERE id = :id");
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->changes();
    }
    public function updateData($data,$id)
    {
        $nama = $data ['name'];
        $nim = $data['nim'];
        $email = $data['email'];
        $jurusan = $data['major'];
        if(!is_numeric($nim)){
            return 2;
        }
        $this->db->query("UPDATE $this->table SET nama=:nama, nim=:nim, email=:email, jurusan=:jurusan WHERE id=:id");
        $this->db->bind('nama',$nama);
        $this->db->bind('nim',$nim);
        $this->db->bind('email',$email);
        $this->db->bind('jurusan',$jurusan);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->changes();
    }
}