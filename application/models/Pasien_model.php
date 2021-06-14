  
<?php 

class Pasien_model extends CI_Model {
    
    public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;



    public function jenisKelamin(){
        return $this->gender=="L" ? "Laki-Laki" : "Perempuan";
    }
}
?>
