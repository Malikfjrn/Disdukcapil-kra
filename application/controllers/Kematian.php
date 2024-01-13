<?php

class Kematian extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Kematian';


		$this->load->model('Model_kematian');
	}

	public function index()
	{

		if (!in_array('viewKematian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$kmt_data = $this->Model_kematian->getKematianData();

		$result = array();
		foreach ($kmt_data as $k => $v) {

			$result[$k]['kmt_info'] = $v;
		}

		$this->data['kmt_data'] = $result;

		$this->render_template('Kematian/index', $this->data);
	}

	public function create()
	{

		if (!in_array('createKematian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		// $this->form_validation->set_rules('nikPelapor', 'NIK Pelapor', 'required');
		// $this->form_validation->set_rules('namaPelapor', 'Nama Pelapor', 'trim|required');
		$this->form_validation->set_rules('noKKpelapor', 'Namor KK Pelapor', 'required');
		// $this->form_validation->set_rules('noPelapor', 'Nomor HP Pelapor', 'trim|required');
		// $this->form_validation->set_rules('alamatPelapor', 'Alamat Pelapor', 'trim|required');
		// $this->form_validation->set_rules('email', 'Email Pelapor', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('nikIbu', 'NIK Ibu', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Ibu harus diisi.',
			'min_length' => 'NIK Ibu harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Ibu tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'NIK Ayah', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Ayah harus diisi.',
			'min_length' => 'NIK Ayah harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Ayah tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required');
		$this->form_validation->set_rules('nikSaksiSatu', 'NIK Saksi 1', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Saksi 1 harus diisi.',
			'min_length' => 'NIK Saksi 1 harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Saksi 1 tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaSaksiSatu', 'Nama Saksi 1', 'trim|required');
		$this->form_validation->set_rules('nikSaksiDua', 'NIK Saksi 2', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Saksi 2 harus diisi.',
			'min_length' => 'NIK Saksi 2 harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Saksi 2 tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaSaksiDua', 'Nama Saksi 2', 'trim|required');
		$this->form_validation->set_rules('nikJenazah', 'NIK Jenazah', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Jenazah harus diisi.',
			'min_length' => 'NIK Jenazah harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Jenazah tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaJenazah', 'Nama Jenazah', 'trim|required');
		$this->form_validation->set_rules('tanggalKematian', 'Tanggal Kematian', 'trim|required');
		$this->form_validation->set_rules('waktuKematian', 'Waktu Kematian', 'trim|required');
		$this->form_validation->set_rules('tempat', 'Tampat Kematian', 'trim|required');
		$this->form_validation->set_rules('sebab', 'Sebab Kematian', 'trim|required');
		$this->form_validation->set_rules('yangMenerangkan', 'Yang Menerangkan', 'trim|required');
		$this->form_validation->set_rules('noKK', 'Nomor KK Jenazah', 'trim|required');
		$this->form_validation->set_rules('namaKepala', 'Kepala Keluarga Jenazah', 'trim|required');
		


		if ($this->form_validation->run() == TRUE) {
			// true case
			$upload_image = $this->upload_image();

			$data = array(
				 'nikPelapor' => $this->input->post('nikPelapor'),
				 'namaPelapor' => $this->input->post('namaPelapor'),
				'noKKpelapor' => $this->input->post('noKKpelapor'),
				 'noPelapor' => $this->input->post('noPelapor'),
				 'alamatPelapor' => $this->input->post('alamatPelapor'),
				 'email' => $this->input->post('email'),
				'nikIbu' => $this->input->post('nikIbu'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikAyah' => $this->input->post('nikAyah'),
				'namaAyah' => $this->input->post('namaAyah'),
				'nikSaksiSatu' => $this->input->post('nikSaksiSatu'),
				'namaSaksiSatu' => $this->input->post('namaSaksiSatu'),
				'nikSaksiDua' => $this->input->post('nikSaksiDua'),
				'namaSaksiDua' => $this->input->post('namaSaksiDua'),
				'nikJenazah' => $this->input->post('nikJenazah'),
				'namaJenazah' => $this->input->post('namaJenazah'),
				'tanggalKematian' => $this->input->post('tanggalKematian'),
				'waktuKematian' => $this->input->post('waktuKematian'),
				'tempat' => $this->input->post('tempat'),
				'sebab' => $this->input->post('sebab'),
				'yangMenerangkan' => $this->input->post('yangMenerangkan'),
				'noKK' => $this->input->post('noKK'),
				'namaKepala' => $this->input->post('namaKepala'),
				
			);

			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/kematian/';
				$config['allowed_types']        = '*';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('formPelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['formPelapor'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('suratKet')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['suratKet'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KKjenazah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KKjenazah'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPjenazah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPjenazah'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPpelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPpelapor'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPsaksi')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPsaksi'] = 'assets/images/kematian/' . $filename;
				}
			}

			$create = $this->Model_kematian->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
				redirect('Kematian/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('Kematian/create', 'refresh');
			}
		} else {
			$this->data['namaPelapor'] = $this->session->userdata('namaPelapor');
			$this->data['nikPelapor'] = $this->session->userdata('nikPelapor');
			$this->data['email'] = $this->session->userdata('email');
			$this->data['alamatPelapor'] = $this->session->userdata('alamatPelapor');
			$this->data['noPelapor'] = $this->session->userdata('noPelapor');
			$this->session->set_userdata('saved_data', $_POST);
			$this->session->set_flashdata('validation_errors', validation_errors());
			$this->render_template('Kematian/create', $this->data);
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
		
		$config['upload_path'] = 'assets/images/kematian';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '1000';

		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('formPelapor')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['formPelapor']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
		if (!$this->upload->do_upload('suratKet')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['suratKet']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
		if (!$this->upload->do_upload('KKjenazah')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KKjenazah']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
		if (!$this->upload->do_upload('KTPjenazah')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KTPjenazah']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
		if (!$this->upload->do_upload('KTPsaksi')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KTPsaksi']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
	}

	public function edit($id)
	{
		if (!in_array('updateKematian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if (!$id) {
			redirect('dashboard', 'refresh');
		}

		// $this->form_validation->set_rules('nikPelapor', 'NIK Pelapor', 'required');
		// $this->form_validation->set_rules('namaPelapor', 'Nama Pelapor', 'trim|required');
		 $this->form_validation->set_rules('noKKpelapor', 'Namor KK Pelapor', 'required');
		// $this->form_validation->set_rules('noHp', 'Nomor HP Pelapor', 'trim|required');
		// $this->form_validation->set_rules('alamatPelapor', 'Alamat Pelapor', 'trim|required');
		// $this->form_validation->set_rules('email', 'Email Pelapor', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('nikIbu', 'NIK Ibu', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'NIK Ayah', 'trim|required');
		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required');
		$this->form_validation->set_rules('nikSaksiSatu', 'NIK Saksi 1', 'trim|required');
		$this->form_validation->set_rules('namaSaksiSatu', 'Nama Saksi 1', 'trim|required');
		$this->form_validation->set_rules('nikSaksiDua', 'NIK Saksi 2', 'trim|required');
		$this->form_validation->set_rules('namaSaksiDua', 'Nama Saksi 2', 'trim|required');
		$this->form_validation->set_rules('nikJenazah', 'NIK Jenazah', 'trim|required');
		$this->form_validation->set_rules('namaJenazah', 'Nama Jenazah', 'trim|required');
		$this->form_validation->set_rules('tanggalKematian', 'Tanggal Kematian', 'trim|required');
		$this->form_validation->set_rules('waktuKematian', 'Waktu Kematian', 'trim|required');
		$this->form_validation->set_rules('tempat', 'Tampat Kematian', 'trim|required');
		$this->form_validation->set_rules('sebab', 'Sebab Kematian', 'trim|required');
		$this->form_validation->set_rules('yangMenerangkan', 'Yang Menerangkan', 'trim|required');
		$this->form_validation->set_rules('noKK', 'Nomor KK Jenazah', 'trim|required');
		$this->form_validation->set_rules('namaKepala', 'Kepala Keluarga Jenazah', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			// true case

			$data = array(
				// 'nikPelapor' => $this->input->post('nikPelapor'),
				// 'namaPelapor' => $this->input->post('namaPelapor'),
				'noKKpelapor' => $this->input->post('noKKpelapor'),
				// 'noHp' => $this->input->post('noHp'),
				// 'alamatPelapor' => $this->input->post('alamatPelapor'),
				// 'email' => $this->input->post('email'),
				'nikIbu' => $this->input->post('nikIbu'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikAyah' => $this->input->post('nikAyah'),
				'namaAyah' => $this->input->post('namaAyah'),
				'nikSaksiSatu' => $this->input->post('nikSaksiSatu'),
				'namaSaksiSatu' => $this->input->post('namaSaksiSatu'),
				'nikSaksiDua' => $this->input->post('nikSaksiDua'),
				'namaSaksiDua' => $this->input->post('namaSaksiDua'),
				'nikJenazah' => $this->input->post('nikJenazah'),
				'namaJenazah' => $this->input->post('namaJenazah'),
				'tanggalKematian' => $this->input->post('tanggalKematian'),
				'waktuKematian' => $this->input->post('waktuKematian'),
				'tempat' => $this->input->post('tempat'),
				'sebab' => $this->input->post('sebab'),
				'yangMenerangkan' => $this->input->post('yangMenerangkan'),
				'noKK' => $this->input->post('noKK'),
				'namaKepala' => $this->input->post('namaKepala'),
			);

			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/kematian/';
				$config['allowed_types']        = '*';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('formPelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['formPelapor'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('suratKet')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['suratKet'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KKjenazah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KKjenazah'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPjenazah')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPjenazah'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPpelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPpelapor'] = 'assets/images/kematian/' . $filename;
				}
				if ($this->upload->do_upload('KTPsaksi')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPsaksi'] = 'assets/images/kematian/' . $filename;
				}
			}

			$update = $this->Model_kematian->update($data, $id);
			if ($update == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Update');
				redirect('kematian/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('kematian/edit/' . $id, 'refresh');
			}
		} else {

			$kmt_data = $this->Model_kematian->getKematianData($id);
			$this->data['kmt_data'] = $kmt_data;
			
			$this->render_template('kematian/edit', $this->data);
		}
	}



	public function delete($id)
	{

		if (!in_array('deleteKematian', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {


				$delete = $this->Model_kematian->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('kematian/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('kematian/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('kematian/delete', $this->data);
			}
		}
	}
}
