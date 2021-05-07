<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->model('M_Pasien', 'pasien1');
        $this->load->model('M_Pasien', 'pasien2');
        $this->load->model('M_Pasien', 'pasien3');

        $this->load->model('M_Bmi', 'bmi1');
        $this->load->model('M_Bmi', 'bmi2');
        $this->load->model('M_Bmi', 'bmi3');

        $this->load->model('M_BmiPasien', 'bmipasien1');
        $this->load->model('M_BmiPasien', 'bmipasien2');
        $this->load->model('M_BmiPasien', 'bmipasien3');
	}

	public function index()
	{
        // 1
        $this->pasien1->id = 1;
        $this->pasien1->kode = 'KD-1';
        $this->pasien1->nama = 'Pasien Pertama';
        $this->pasien1->tmp_lahir = 'Free York';
        $this->pasien1->tgl_lahir = '2020-12-12';
        $this->pasien1->gender = 'L';

        $this->bmi1->berat = 50;
        $this->bmi1->tinggi = 175;

        $this->bmipasien1->id = 1;
        $this->bmipasien1->tanggal = '2020-10-15';
        $this->bmipasien1->pasien = $this->pasien1;
        $this->bmipasien1->bmi = $this->bmi1;
        $this->bmipasien1->bmi->nilai = $this->bmi1->nilaiBMI();
        $this->bmipasien1->bmi->status = $this->bmi1->statusBMI();
        
        // 2
        $this->pasien2->id = 2;
        $this->pasien2->kode = 'KD-2';
        $this->pasien2->nama = 'Pasien Kedua';
        $this->pasien2->tmp_lahir = 'New York';
        $this->pasien2->tgl_lahir = '2020-11-11';
        $this->pasien2->gender = 'P';

        $this->bmi2->berat = 70;
        $this->bmi2->tinggi = 186;

        $this->bmipasien2->id = 2;
        $this->bmipasien2->tanggal = '2020-10-14';
        $this->bmipasien2->pasien = $this->pasien2;
        $this->bmipasien2->bmi = $this->bmi2;
        $this->bmipasien2->bmi->nilai = $this->bmi2->nilaiBMI();
        $this->bmipasien2->bmi->status = $this->bmi2->statusBMI();
        
        // 3
        $this->pasien3->id = 3;
        $this->pasien3->kode = 'KD-3';
        $this->pasien3->nama = 'Pasien Ketiga';
        $this->pasien3->tmp_lahir = 'Old York';
        $this->pasien3->tgl_lahir = '2020-10-10';
        $this->pasien3->gender = 'P';

        $this->bmi3->berat = 74;
        $this->bmi3->tinggi = 175;

        $this->bmipasien3->id = 3;
        $this->bmipasien3->tanggal = '2020-10-13';
        $this->bmipasien3->pasien = $this->pasien3;
        $this->bmipasien3->bmi = $this->bmi3;
        $this->bmipasien3->bmi->nilai = $this->bmi3->nilaiBMI();
        $this->bmipasien3->bmi->status = $this->bmi3->statusBMI();

        $data['list_bmipasien'] = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        
		$this->load->view('bmi/index', $data);
	}
}
