<?php
class Bmi_model extends CI_Model {
    public $berat; 
    public $tinggi; 
 
    public function nilaiBMI(){
        $tinggi_meter = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_meter,2);
        return $bmi;
 }
    public function statusBMI(){
        if ($this->nilaiBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }else if($this->nilaiBMI() < 25.0){
            return "Normal (Ideal)";
        }else if($this->nilaiBMI() < 30.0){
            return "Kelebihan Berat Badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }
    
    public function jenisKelamin(){
        return $this->gender=="L" ? "Laki-Laki" : "Perempuan";
    }

    public function getAll(){
        // select * from pasien
        $query = $this->db->get('pasien');
        return $query;
        }
       public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }
       
}