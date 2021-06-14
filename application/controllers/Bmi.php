<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function index()
	{
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->id=1;
        $this->bmi1->tanggal='01/07/2021';
        $this->bmi1->kode='010001';
        $this->bmi1->nama='Faiz Fikri';
        $this->bmi1->gender='L';
        $this->bmi1->tinggi=169;
        $this->bmi1->berat=64.2;
        

        $this->load->model('bmi_model','bmi2');
        $this->bmi2->id=2;
        $this->bmi2->tanggal='02/07/2021';
        $this->bmi2->kode='020001';
        $this->bmi2->nama='Pandan Wangi';
        $this->bmi2->gender='P';
        $this->bmi2->tinggi=152;
        $this->bmi2->berat=40.2;
       

        $this->load->model('bmi_model','bmi3');
        $this->bmi3->id=3;
        $this->bmi3->tanggal='03/07/2021';
        $this->bmi3->kode='010002';
        $this->bmi3->nama='Riyadi Salim';
        $this->bmi3->gender='L';
        $this->bmi3->tinggi=159;
        $this->bmi3->berat=90.8;
     


       
        
        $data['bmi1']=$this->bmi1;
        $data['list_bmi']=[$this->bmi1,$this->bmi2,$this->bmi3];
        
		
        $this->load->view('header');
        $this->load->view('bmi/index', $data);
        $this->load->view('footer');
	}

}