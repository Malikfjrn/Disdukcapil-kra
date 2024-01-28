<?php

class Grafik extends Admin_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();


		$this->data['page_title'] = 'Grafik';
        $this->load->model('Model_kelahiran');
        $this->load->model('Model_kematian');
        $this->load->model('Model_nikah');
        $this->load->model('Model_perceraian');
        $this->load->model('Model_perceraianislam');
        $this->load->model('Model_pensiun');
    }

    public function index()
    {   
        if (!in_array('viewGrafik', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        
        $this->data['labels']  = $this->Model_kelahiran->getBulanLabels();
       $this->data['datasets'] = $this->Model_kelahiran->getDatasetsForPackages();
        
        
       $this->data['total_kelahiran'] = $this->Model_kelahiran->countTotalKelahiranPertahun();
       $this->data['total_kelahiran_per_bulan'] = $this->Model_kelahiran->countTotalKelahiranPerBulanCurrentYear();
        $this->render_template('grafik/grafik', $this->data);
   
    
    }

    public function grafik1()
    {   
        if (!in_array('viewGrafik', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $this->data['labels'] = $this->Model_kematian->getBulanLabels();
        $this->data['datasets'] = $this->Model_kematian->getDatasetsForPackages();
        
        
        $this->data['total_kematian'] = $this->Model_kematian->countTotalKematianPertahun();
        $this->data['total_kematian_per_bulan'] = $this->Model_kematian->countTotalKematianPerBulanCurrentYear();
        $this->render_template('grafik/grafik1', $this->data);
        
        
    }

    public function grafik2()
    {   if (!in_array('viewGrafik', $this->permission)) {
        redirect('dashboard', 'refresh');
    }
        $tahun = date('Y'); 
        $this->data['totalData'] = $this->Model_nikah->getTotalDataPerMonthInYear($tahun);
        $this->data['labels'] = $this->Model_nikah->getBulanLabels($tahun);
        $this->data['total_nikah'] = $this->Model_nikah->countTotalNikahPertahun();

        $this->data['total_nikah_per_month'] = $this->Model_nikah->countTotalNikahPerMonthCurrentYear();

        $this->render_template('grafik/grafik2', $this->data);
    }

    public function grafik3()
    {   if (!in_array('viewGrafik', $this->permission)) {
        redirect('dashboard', 'refresh');
    }
        
        $this->data['labels'] = $this->Model_perceraian->getBulanLabels();
        $this->data['datasets'] = $this->Model_perceraian->getDatasetsForPackages();
        
        $this->data['total_perceraian'] = $this->Model_perceraian->countTotalPerceraianPertahun();
        $this->data['total_perceraian_per_month'] = $this->Model_perceraian->countTotalPerceraianPerMonthCurrentYear();
        
        $this->render_template('grafik/grafik3', $this->data);
   
    
    }

    public function grafik4()
    {   if (!in_array('viewGrafik', $this->permission)) {
        redirect('dashboard', 'refresh');
    }
        $tahun = date('Y'); 
        $this->data['totalData'] = $this->Model_perceraianislam->getTotalDataPerMonthInYear($tahun);
        $this->data['labels'] = $this->Model_perceraianislam->getBulanLabels($tahun);
        $this->data['total_perceraianislam'] = $this->Model_perceraianislam->countTotalPerceraianislamPertahun();
        
        $this->data['total_perceraianislam_per_month'] = $this->Model_perceraianislam->countTotalPerceraianislamPerMonthCurrentYear();
        $this->render_template('grafik/grafik4', $this->data);
    }

    public function grafik5()
    {   if (!in_array('viewGrafik', $this->permission)) {
        redirect('dashboard', 'refresh');
    }
        $tahun = date('Y'); 
        $this->data['totalData'] = $this->Model_pensiun->getTotalDataPerMonthInYear($tahun);
        $this->data['labels'] = $this->Model_pensiun->getBulanLabels($tahun);
        $this->data['total_pensiun'] = $this->Model_pensiun->countTotalPensiunPertahun();

        $this->data['total_pensiun_per_month'] = $this->Model_pensiun->countTotalPensiunPerMonthCurrentYear();

        $this->render_template('grafik/grafik5', $this->data);
    }

}