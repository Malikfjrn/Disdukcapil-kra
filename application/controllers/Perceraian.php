<?php

class Perceraian extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Perceraian';


		$this->load->model('model_perceraian');
		
	}

	public function index()
	{

		if (!in_array('viewPerceraian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$pcr_data = $this->model_perceraian->getPerceraianData();

		$result = array();
		foreach ($pcr_data as $k => $v) {

			$result[$k]['pcr_info'] = $v;

			
		}

		$this->data['pcr_data'] = $result;

		$this->render_template('perceraian/index', $this->data);
	}

	public function create()
	{

		if (!in_array('createPerceraian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->form_validation->set_rules('nik_petugas', 'Nik Petugas', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Petugas harus diisi.',
			'min_length' => 'NIK Petugas harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Petugas tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas','trim|required', array(
			'required' => 'Kolom Nama Petugas harus diisi.',));
		$this->form_validation->set_rules('nik_suami', 'Nik Suami', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Suami harus diisi.',
			'min_length' => 'NIK Suami harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Suami tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_suami', 'Nama Suami', 'trim|required', array(
			'required' => 'Kolom Nama Suami harus diisi.',));
		$this->form_validation->set_rules('nik_istri', 'Nik Istri', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Istri harus diisi.',
			'min_length' => 'NIK Istri harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Istri tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_istri', 'Nama Istri', 'trim|required', array(
			'required' => 'Kolom Nama Istri harus diisi.',));
		$this->form_validation->set_rules('mengajukan', 'Yang Mengajukan', 'trim|required', array(
			'required' => 'Kolom Yang Mengajukan harus diisi.',));
		$this->form_validation->set_rules('no_akta', 'No. Akta Kawin', 'trim|required', array(
			'required' => 'Kolom No Akta Kawin harus diisi.',));
		$this->form_validation->set_rules('tanggal_akta', 'Tanggal Akta Kawin', 'trim|required', array(
			'required' => 'Kolom Tanggal Akta Kawin harus diisi.',));
		$this->form_validation->set_rules('no_putusan', 'No. Putusan Pengadilan', 'trim|required', array(
			'required' => 'Kolom No Putusan Pengadilan harus diisi.',));
		$this->form_validation->set_rules('tanggal_putusan', 'Tanggal Putusan Pengadilan', 'trim|required', array(
			'required' => 'Kolom Tanggal Putusan Pengadilan harus diisi.',));
		$this->form_validation->set_rules('sebab', 'Sebab Perceraian', 'trim|required', array(
			'required' => 'Kolom Sebab Perceraian harus diisi.',));
		


		if ($this->form_validation->run() == TRUE) {
			// true case
			$upload_image = $this->upload_image();

			$data = array(
				'nik_petugas' => $this->input->post('nik_petugas'),
				'nama_petugas' => $this->input->post('nama_petugas'),
				'nik_suami' => $this->input->post('nik_suami'),
				'nama_suami' => $this->input->post('nama_suami'),
				'nik_istri' => $this->input->post('nik_istri'),
				'nama_istri' => $this->input->post('nama_istri'),
				'mengajukan' => $this->input->post('mengajukan'),
				'no_akta' => $this->input->post('no_akta'),
				'tanggal_akta' => $this->input->post('tanggal_akta'),
				'tanggal_putusan' => $this->input->post('tanggal_putusan'),
				'no_putusan' => $this->input->post('no_putusan'),
				'sebab' => $this->input->post('sebab'),
			);

			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/perceraian/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('form_permohonan')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['form_permohonan'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('amar_putusan')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['amar_putusan'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('akta_kawin')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['akta_kawin'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('kk')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['kk'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('ktp')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['ktp'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('form_pindah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['form_pindah'] = 'assets/images/perceraian/' . $filename;
				}
			}

			$create = $this->model_perceraian->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
				redirect('perceraian/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('perceraian/create', 'refresh');
			}
		} else {
			$this->session->set_userdata('saved_data', $_POST);
			$this->session->set_flashdata('validation_errors', validation_errors());


			$this->render_template('perceraian/create', $this->data);
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
		
		$config['upload_path'] = 'assets/images/perceraian';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '1000';

		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('form_perceraian')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['form_perceraian']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
	}

	public function edit($id)
	{
		if (!in_array('updatePerceraian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if (!$id) {
			redirect('dashboard', 'refresh');
		}

		$this->form_validation->set_rules('nik_petugas', 'Nik Petugas', 'required');
		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'trim|required');
		$this->form_validation->set_rules('nik_suami', 'Nik Suami', 'required');
		$this->form_validation->set_rules('nama_suami', 'Nama Suami', 'trim|required');
		$this->form_validation->set_rules('nik_istri', 'Nik Istri', 'required');
		$this->form_validation->set_rules('nama_istri', 'Nama Istri', 'trim|required');
		$this->form_validation->set_rules('mengajukan', 'Yang Mengajukan', 'trim|required');
		$this->form_validation->set_rules('no_akta', 'No. Akta Kawin', 'trim|required');
		$this->form_validation->set_rules('tanggal_akta', 'Tanggal Akta Kawin', 'trim|required');
		$this->form_validation->set_rules('no_putusan', 'No. Putusan Pengadilan', 'trim|required');
		$this->form_validation->set_rules('tanggal_putusan', 'Tanggal Putusan Pengadilan', 'trim|required');
		$this->form_validation->set_rules('sebab', 'Sebab Perceraian', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			// true case

			$data = array(
				'nik_petugas' => $this->input->post('nik_petugas'),
				'nama_petugas' => $this->input->post('nama_petugas'),
				'nik_suami' => $this->input->post('nik_suami'),
				'nama_suami' => $this->input->post('nama_suami'),
				'nik_istri' => $this->input->post('nik_istri'),
				'nama_istri' => $this->input->post('nama_istri'),
				'mengajukan' => $this->input->post('mengajukan'),
				'no_akta' => $this->input->post('no_akta'),
				'tanggal_akta' => $this->input->post('tanggal_akta'),
				'tanggal_putusan' => $this->input->post('tanggal_putusan'),

				'no_putusan' => $this->input->post('no_putusan'),
				'sebab' => $this->input->post('sebab'),
			);

			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/perceraian/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('form_permohonan')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['form_permohonan'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('amar_putusan')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['amar_putusan'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('akta_kawin')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['akta_kawin'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('kk')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['kk'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('ktp')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['ktp'] = 'assets/images/perceraian/' . $filename;
				}
				if ($this->upload->do_upload('form_pindah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['form_pindah'] = 'assets/images/perceraian/' . $filename;
				}
			}

			$update = $this->model_perceraian->update($data, $id);
			if ($update == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Update');
				redirect('perceraian/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('perceraian/edit/' . $id, 'refresh');
			}
		} else {

			
			$pcr_data = $this->model_perceraian->getPerceraianData($id);
			$this->data['pcr_data'] = $pcr_data;
			$this->render_template('perceraian/edit', $this->data);
		}
	}



	public function delete($id)
	{
		if (!in_array('deletePerceraian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {
				$delete = $this->model_perceraian->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('perceraian/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('perceraian/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('perceraian/delete', $this->data);
			}
		}
	}
	
}
