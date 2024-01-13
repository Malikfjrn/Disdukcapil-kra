<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();


		$this->data['page_title'] = 'Dashboard';
		
		$this->load->model('Model_kelahiran');
		$this->load->model('Model_kematian');
		$this->load->model('model_nikah');
		$this->load->model('model_pensiun');
		$this->load->model('model_perceraian');
		$this->load->model('model_perceraianislam');
		$this->load->model('model_users');
		
        

	}

	public function index()
	{

		$this->data['total_kelahiran'] = $this->Model_kelahiran->countTotalKelahiran();
		$this->data['total_kematian'] = $this->Model_kematian->countTotalKematian();
		$this->data['total_nikah'] = $this->model_nikah->countTotalNikah();
		$this->data['total_pensiun'] = $this->model_pensiun->countTotalPensiun();
		$this->data['total_perceraian'] = $this->model_perceraian->countTotalPerceraian();
		$this->data['total_perceraianislam'] = $this->model_perceraianislam->countTotalPerceraianislam();
		$this->data['total_users'] = $this->model_users->countTotalUsers();
		

		

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true :false;
		

		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard', $this->data);
	}
	

	


}
