<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Bmi extends CI_Model {
    public $berat;
    public $tinggi;

    public function nilaiBMI()
    {
        $tinggi_meter = $this->tinggi/100;
        $bmi = $this->berat/pow($tinggi_meter,2);
        return $bmi;
    }

    public function statusBMI()
    {
        if ($this->nilaiBMI()<18.5){
            return"KekuranganBeratBadan";
        } else if ($this->nilaiBMI()<25.0) {
            return"Normal(Ideal)";
        } else if ($this->nilaiBMI()<30.0) {
            return"KelebihanBeratBadan";
        } else {
            return"Kegemukan(Obesitas)";
        }
    }
}

