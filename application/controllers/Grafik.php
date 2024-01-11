<?php

class Grafik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Model_grafik');
        $this->load->model('Model_kelahiran');
        $this->load->model('Model_kematian');
        $this->load->model('Model_nikah');
        $this->load->model('Model_perceraian');
        $this->load->model('Model_perceraianislam');
        $this->load->model('Model_pensiun');
    }

    public function index()
    {   
        
        $data['labels'] = $this->Model_kelahiran->getBulanLabels();
        $data['datasets'] = $this->Model_kelahiran->getDatasetsForPackages();
        
        
        
        $this->load->view('grafik/grafik', $data);
   
    
    }
    

    public function grafik1()
    {   
        
        $data['labels'] = $this->Model_kematian->getBulanLabels();
        $data['datasets'] = $this->Model_kematian->getDatasetsForPackages();
        
        
        
        $this->load->view('grafik/grafik1', $data);
        
        
    }

    public function grafik2()
    {   
        $tahun = date('Y'); // or you can set the desired year
        $data['totalData'] = $this->Model_nikah->getTotalDataPerMonthInYear($tahun);
        $data['labels'] = $this->Model_nikah->getBulanLabels($tahun);

        $this->load->view('grafik/grafik2', $data);
    }

    public function grafik3()
    {   
        
        $data['labels'] = $this->Model_perceraian->getBulanLabels();
        $data['datasets'] = $this->Model_perceraian->getDatasetsForPackages();
        
        
        
        $this->load->view('grafik/grafik3', $data);
   
    
    }

    public function grafik4()
    {   
        $tahun = date('Y'); // or you can set the desired year
        $data['totalData'] = $this->Model_perceraianislam->getTotalDataPerMonthInYear($tahun);
        $data['labels'] = $this->Model_perceraianislam->getBulanLabels($tahun);

        $this->load->view('grafik/grafik4', $data);
    }

    public function grafik5()
    {   
        $tahun = date('Y'); // or you can set the desired year
        $data['totalData'] = $this->Model_pensiun->getTotalDataPerMonthInYear($tahun);
        $data['labels'] = $this->Model_pensiun->getBulanLabels($tahun);

        $this->load->view('grafik/grafik5', $data);
    }
}