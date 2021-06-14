<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
		$this->load->model('pasien_model', 'pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode="010001";
        $this->pasien1->nama="Faiz Fikri";
        $this->pasien1->gender="L";

        $data['pasien1']=$this->pasien1;

        $this->load->view('header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('footer');
	}

    public function salam(){
        $this->load->view('header');
        $this->load->view('dashboard/salam');
        $this->load->view('footer');

    }

    public function hello($teman=""){
        $data["nama"]=$teman;
        $this->load->view('header');
        $this->load->view('dashboard/hello', $data);
        $this->load->view('footer');

    }

}