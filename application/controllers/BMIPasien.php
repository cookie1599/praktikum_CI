<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BMIPasien extends CI_Controller {

    public function index()
	{
        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->kode='010001';
        $this->bmipasien1->nama='Faiz Fikri';
        $this->bmipasien1->nilaiBMI();
        $this->bmipasien1->statusBMI();
     
    

        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->kode='020001';
        $this->bmipasien2->nama='Pandan Wangi';
        $this->bmipasien2->nilaiBMI();
        $this->bmipasien2->statusBMI();
      

        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->kode='010002';
        $this->bmipasien3->nama='Riyadi Salim';
        $this->bmipasien3->nilaiBMI();
        $this->bmipasien3->statusBMI();
      


        $data['list_bmipasien']=[$this->bmipasien1,
                            $this->bmipasien2,$this->bmipasien3];
        
		
        $this->load->view('header');
        $this->load->view('bmipasien/index', $data);
        $this->load->view('footer');
	}

}