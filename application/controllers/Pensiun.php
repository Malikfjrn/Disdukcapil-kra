<?php

class Pensiun extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Pensiun';


		$this->load->model('model_pensiun');
		
	}

	public function index()
	{

		if (!in_array('viewPensiun', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$psn_data = $this->model_pensiun->getPensiunData();

		$result = array();
		foreach ($psn_data as $k => $v) {

			$result[$k]['psn_info'] = $v;

			
		}

		$this->data['psn_data'] = $result;

		$this->render_template('pensiun/index', $this->data);
	}

	public function create()
	{

		if (!in_array('createPensiun', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->form_validation->set_rules('tahun_pensiun', 'Tahun Pensiun', 'trim|required', array(
			'required' => 'Kolom Tahun Pensiun harus diisi.',));
		$this->form_validation->set_rules('upload_file', 'Upload File', 'callback_upload_check');

		if ($this->form_validation->run() == TRUE) {
			// true case
			$upload_image = $this->upload_image();

			$data = array(
				'tahun_pensiun' => $this->input->post('tahun_pensiun'),
				'upload_file' => $upload_image,

			);

			$create = $this->model_pensiun->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
				redirect('pensiun/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('pensiun/create', 'refresh');
			}
		} else {
			$this->session->set_userdata('saved_data', $_POST);
			$this->session->set_flashdata('validation_errors', validation_errors());

			$this->render_template('pensiun/create', $this->data);
		}
	}

	public function password_hash($pass = '')
	{
		if ($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}
	public function upload_check($str)
	{
		if (empty($_FILES['upload_file']['name'])) {
			$this->form_validation->set_message('upload_check', '{field} harus di isi.');
			return FALSE;
		} else {
			return TRUE;
		}
	}


	public function upload_image()
	{
		
		$config['upload_path'] = 'assets/images/pensiun';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';

		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('upload_file')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['upload_file']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
	}

	public function edit($id)
	{
		if (!in_array('updatePensiun', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if (!$id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('tahun_pensiun', 'Tahun Pensiun', 'required');

		if ($this->form_validation->run() == TRUE) {
			// true case

			$data = array(
				'tahun_pensiun' => $this->input->post('tahun_pensiun'),

			);
			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/pensiun/';
				$config['allowed_types']        = '*';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('upload_file')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['upload_file'] = 'assets/images/pensiun/' . $filename;
				}
			}


			$update = $this->model_pensiun->update($data, $id);
			if ($update == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Update');
				redirect('pensiun/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('pensiun/edit/' . $id, 'refresh');
			}
		} else {
			$this->data['row'] = $this->db->where('id', $id)->get('tbl_pensiun')->row();

			$this->render_template('pensiun/edit', $this->data);
		}
	}



	public function delete($id)
	{
		if (!in_array('deletePensiun', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {
				$delete = $this->model_pensiun->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('pensiun/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('pensiun/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('pensiun/delete', $this->data);
			}
		}
	}


}
