<?php

class Kelahiran extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Kelahiran';


		$this->load->model('Model_kelahiran');
	}

	public function index()
	{

		if (!in_array('viewKelahiran', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$klr_data = $this->Model_kelahiran->getKelahiranData();

		$result = array();
		foreach ($klr_data as $k => $v) {

			$result[$k]['klr_info'] = $v;
		}

		$this->data['klr_data'] = $result;
		

		$this->render_template('Kelahiran/index', $this->data);
	}

	public function create()
	{

		if (!in_array('createKelahiran', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		// $this->form_validation->set_rules('nikPelapor', 'NIK Pelapor', 'required');
		// $this->form_validation->set_rules('namaPelapor', 'Nama Pelapor', 'trim|required');
		// $this->form_validation->set_rules('alamatPelapor', 'Alamat Pelapor', 'trim|required');
		$this->form_validation->set_rules('namaFaskes', 'Nama Fasilitas Kesehatan', 'trim|required', array(
			'required' => 'Kolom Nama Fasilitas Kesehatan harus diisi.',));
		// $this->form_validation->set_rules('noPelapor', 'Nomor HP Pelapor', 'trim|required');
		// $this->form_validation->set_rules('email', 'Email Pelapor', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('nikIbu', 'NIK Ibu', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Ibu harus diisi.',
			'min_length' => 'NIK Ibu harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Ibu tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required', array(
			'required' => 'Kolom Nama Ibu harus diisi.',));
		$this->form_validation->set_rules('nikAyah', 'NIK Ayah', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Ayah harus diisi.',
			'min_length' => 'NIK Ayah harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Ayah tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required', array(
			'required' => 'Kolom Nama Ayah harus diisi.',));
		$this->form_validation->set_rules('nikSaksiSatu', 'NIK Saksi 1', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Saksi 1 harus diisi.',
			'min_length' => 'NIK Saksi 1 harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Saksi 1 tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaSaksiSatu', 'Nama Saksi 1', 'trim|required', array(
			'required' => 'Kolom Nama Saksi 1 harus diisi.',));
		$this->form_validation->set_rules('nikSaksiDua', 'NIK Saksi 2', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Saksi 2 harus diisi.',
			'min_length' => 'NIK Saksi 2 harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Saksi 2 tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('namaSaksiDua', 'Nama Saksi 2', 'trim|required', array(
			'required' => 'Kolom Nama Saksi 2 harus diisi.',));
		$this->form_validation->set_rules('noKK', 'Nomor Kartu Keluarga', 'trim|required', array(
			'required' => 'Kolom Nomor Kartu Keluarga harus diisi.',));
		$this->form_validation->set_rules('namaKepalaKeluarga', 'Nama Kepala Keluarga', 'trim|required', array(
			'required' => 'Kolom Nama Kepala Keluarga harus diisi.',));
		$this->form_validation->set_rules('namaBayi', 'Nama Bayi', 'trim|required', array(
			'required' => 'Kolom Nama Bayi harus diisi.',));
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required', array(
			'required' => 'Kolom Jenis Kelamin harus diisi.',));
		$this->form_validation->set_rules('tempatDilahirkan', 'Tampat Dilahirkan', 'trim|required', array(
			'required' => 'Kolom Tempat Dilahirkan harus diisi.',));
		$this->form_validation->set_rules('tempatKelahiran', 'Tempat Kelahiran', 'trim|required', array(
			'required' => 'Kolom Tempat Kelahiran harus diisi.',));
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required', array(
			'required' => 'Kolom Tanggal Lahir harus diisi.',));
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required', array(
			'required' => 'Kolom Jam harus diisi.',));
		$this->form_validation->set_rules('jenisKelahiran', 'Jenis Kelahiran', 'trim|required', array(
			'required' => 'Kolom Jenis Kelahiran harus diisi.',));
		$this->form_validation->set_rules('kelahiranKe', 'Kelahiran Ke', 'trim|required', array(
			'required' => 'Kolom Kelahiran Ke harus diisi.',));
		$this->form_validation->set_rules('penolongKelahiran', 'Penolong Kelahiran', 'trim|required', array(
			'required' => 'Kolom Penolong Kelahiran harus diisi.',));
		$this->form_validation->set_rules('beratBayi', 'Berat Bayi', 'trim|required', array(
			'required' => 'Kolom Berat Bayi harus diisi.',));
		$this->form_validation->set_rules('panjangBayi', 'Panjang Bayi', 'trim|required', array(
			'required' => 'Kolom Panjang Bayi harus diisi.',));
		//  $this->form_validation->set_rules('upload_file', 'Upload File', 'required');
		


		if ($this->form_validation->run() == TRUE) {
			// true case
			$upload_image = $this->upload_image();

			$data = array(
				'nikPelapor' => $this->input->post('nikPelapor'),
				'namaPelapor' => $this->input->post('namaPelapor'),
				'alamatPelapor' => $this->input->post('alamatPelapor'),
				'namaFaskes' => $this->input->post('namaFaskes'),
				'noPelapor' => $this->input->post('noPelapor'),
				'email' => $this->input->post('email'),
				'nikIbu' => $this->input->post('nikIbu'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikAyah' => $this->input->post('nikAyah'),
				'namaAyah' => $this->input->post('namaAyah'),
				'nikSaksiSatu' => $this->input->post('nikSaksiSatu'),
				'namaSaksiSatu' => $this->input->post('namaSaksiSatu'),
				'nikSaksiDua' => $this->input->post('nikSaksiDua'),
				'namaSaksiDua' => $this->input->post('namaSaksiDua'),
				'noKK' => $this->input->post('noKK'),
				'namaKepalaKeluarga' => $this->input->post('namaKepalaKeluarga'),
				'namaBayi' => $this->input->post('namaBayi'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'tempatDilahirkan' => $this->input->post('tempatDilahirkan'),
				'tempatKelahiran' => $this->input->post('tempatKelahiran'),
				'tanggalLahir' => $this->input->post('tanggalLahir'),
				'jam' => $this->input->post('jam'),
				'jenisKelahiran' => $this->input->post('jenisKelahiran'),
				'kelahiranKe' => $this->input->post('kelahiranKe'),
				'penolongKelahiran' => $this->input->post('penolongKelahiran'),
				'beratBayi' => $this->input->post('beratBayi'),
				'panjangBayi' => $this->input->post('panjangBayi'),
			);
			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/kelahiran/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('formPelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['formPelapor'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('suratKelahiran')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['suratKelahiran'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('kutipanAkta')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['kutipanAkta'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KKortu')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KKortu'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPortu')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPortu'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPpelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPpelapor'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPsaksi')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPsaksi'] = 'assets/images/kelahiran/' . $filename;
				}
			}

			$create = $this->Model_kelahiran->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
				redirect('Kelahiran/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('Kelahiran/create', 'refresh');
			}
		} else {
			$this->data['namaPelapor'] = $this->session->userdata('namaPelapor');
			$this->data['nikPelapor'] = $this->session->userdata('nikPelapor');
			$this->data['email'] = $this->session->userdata('email');
			$this->data['alamatPelapor'] = $this->session->userdata('alamatPelapor');
			$this->data['noPelapor'] = $this->session->userdata('noPelapor');
			$this->session->set_userdata('saved_data', $_POST);
			// Set flash data untuk menampilkan pesan kesalahan
			$this->session->set_flashdata('validation_errors', validation_errors());

			$this->render_template('Kelahiran/create', $this->data);
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
		// assets/images/product_image
		$config['upload_path'] = 'assets/images/kelahiran';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = '*';
		$config['max_size'] = '5000';

		// $config['max_width']  = '1024';s
		// $config['max_height']  = '768';

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


		if (!$this->upload->do_upload('suratKelahiran')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['suratKelahiran']['name']);
			$type = $type[count($type) - 2];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}


		if (!$this->upload->do_upload('kutipanAkta')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['kutipanAkta']['name']);
			$type = $type[count($type) - 3];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}


		if (!$this->upload->do_upload('KKortu')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KKortu']['name']);
			$type = $type[count($type) - 4];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}


		if (!$this->upload->do_upload('KTPortu')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KTPortu']['name']);
			$type = $type[count($type) - 5];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}

		if (!$this->upload->do_upload('KTPpelapor')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KTPpelapor']['name']);
			$type = $type[count($type) - 6];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}


		if (!$this->upload->do_upload('KTPsaksi')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['KTPsaksi']['name']);
			$type = $type[count($type) - 7];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
			return ($data == true) ? $path : false;
		}
	}

	public function edit($id)
	{
		if (!in_array('updateKelahiran', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if (!$id) {
			redirect('dashboard', 'refresh');
		}

		// $this->form_validation->set_rules('nikPelapor', 'NIK Pelapor', 'required');
		// $this->form_validation->set_rules('namaPelapor', 'Nama Pelapor', 'trim|required');
		// $this->form_validation->set_rules('alamatPelapor', 'Alamat Pelapor', 'trim|required');
		$this->form_validation->set_rules('namaFaskes', 'Nama Fasilitas Kesehatan', 'trim|required');
		// $this->form_validation->set_rules('noPelapor', 'Nomor Pelapor', 'trim|required');
		// $this->form_validation->set_rules('emailPelapor', 'Email Pelapor', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('nikIbu', 'NIK Ibu', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'NIK Ayah', 'trim|required');
		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required');
		$this->form_validation->set_rules('nikSaksiSatu', 'NIK Saksi 1', 'trim|required');
		$this->form_validation->set_rules('namaSaksiSatu', 'Nama Saksi 1', 'trim|required');
		$this->form_validation->set_rules('nikSaksiDua', 'NIK Saksi 2', 'trim|required');
		$this->form_validation->set_rules('namaSaksiDua', 'Nama Saksi 2', 'trim|required');
		$this->form_validation->set_rules('noKK', 'Nomor Kartu Keluarga', 'trim|required');
		$this->form_validation->set_rules('namaKepalaKeluarga', 'Nama Kepala Keluarga', 'trim|required');
		$this->form_validation->set_rules('namaBayi', 'Nama Bayi', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tempatDilahirkan', 'Tampat Dilahirkan', 'trim|required');
		$this->form_validation->set_rules('tempatKelahiran', 'Tempat Kelahiran', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');
		$this->form_validation->set_rules('jenisKelahiran', 'Jenis Kelahiran', 'trim|required');
		$this->form_validation->set_rules('kelahiranKe', 'Kelahiran Ke', 'trim|required');
		$this->form_validation->set_rules('penolongKelahiran', 'Penolong Kelahiran', 'trim|required');
		$this->form_validation->set_rules('beratBayi', 'Berat Bayi', 'trim|required');
		$this->form_validation->set_rules('panjangBayi', 'Panjang Bayi', 'trim|required');
		

		if ($this->form_validation->run() == TRUE) {
			// true case

			$data = array(
				// 'nikPelapor' => $this->input->post('nikPelapor'),
				// 'namaPelapor' => $this->input->post('namaPelapor'),
				// 'alamatPelapor' => $this->input->post('alamatPelapor'),
				'namaFaskes' => $this->input->post('namaFaskes'),
				// 'noPelapor' => $this->input->post('noPelapor'),
				// 'emailPelapor' => $this->input->post('emailPelapor'),
				'nikIbu' => $this->input->post('nikIbu'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikAyah' => $this->input->post('nikAyah'),
				'namaAyah' => $this->input->post('namaAyah'),
				'nikSaksiSatu' => $this->input->post('nikSaksiSatu'),
				'namaSaksiSatu' => $this->input->post('namaSaksiSatu'),
				'nikSaksiDua' => $this->input->post('nikSaksiDua'),
				'namaSaksiDua' => $this->input->post('namaSaksiDua'),
				'noKK' => $this->input->post('noKK'),
				'namaKepalaKeluarga' => $this->input->post('namaKepalaKeluarga'),
				'namaBayi' => $this->input->post('namaBayi'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'tempatDilahirkan' => $this->input->post('tempatDilahirkan'),
				'tempatKelahiran' => $this->input->post('tempatKelahiran'),
				'tanggalLahir' => $this->input->post('tanggalLahir'),
				'jam' => $this->input->post('jam'),
				'jenisKelahiran' => $this->input->post('jenisKelahiran'),
				'kelahiranKe' => $this->input->post('kelahiranKe'),
				'penolongKelahiran' => $this->input->post('penolongKelahiran'),
				'beratBayi' => $this->input->post('beratBayi'),
				'panjangBayi' => $this->input->post('panjangBayi'),
			);

			if (!empty($_FILES)) {
				$config['upload_path']          = getcwd() . '/assets/images/kelahiran/';
				$config['allowed_types']        = '*';
				$config['encrypt_name']         = true;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('formPelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['formPelapor'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('suratKelahiran')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['suratKelahiran'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('kutipanAkta')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['kutipanAkta'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KKortu')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KKortu'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPortu')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPortu'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPpelapor')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPpelapor'] = 'assets/images/kelahiran/' . $filename;
				}
				if ($this->upload->do_upload('KTPsaksi')) {
					$dataupload = array('upload_data' => $this->upload->data());
					$filename = $dataupload['upload_data']['file_name'];
					$data['KTPsaksi'] = 'assets/images/kelahiran/' . $filename;
				}
			}



			$update = $this->Model_kelahiran->update($data, $id);
			if ($update == true) {
				$this->session->set_flashdata('success', 'Data Berhasil Di Update');
				redirect('kelahiran/', 'refresh');
			} else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				redirect('kelahiran/edit/' . $id, 'refresh');
			}
		} else {

			$klr_data = $this->Model_kelahiran->getKelahiranData($id);
			$this->data['klr_data'] = $klr_data;
			
			$this->render_template('kelahiran/edit', $this->data);
			
		}
	}
	


	public function delete($id)
	{

		if (!in_array('deleteKelahiran', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {


				$delete = $this->Model_kelahiran->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('kelahiran/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('kelahiran/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('kelahiran/delete', $this->data);
			}
		}
	}

	public function profile()
	{

		if (!in_array('viewProfile', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$user_id = $this->session->userdata('id');

		$user_data = $this->model_users->getUserData($user_id);
		$this->data['user_data'] = $user_data;

		$user_group = $this->model_users->getUserGroup($user_id);
		$this->data['user_group'] = $user_group;

		$this->render_template('users/profile', $this->data);
	}

	public function setting()
	{
		if (!in_array('updateSetting', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$id = $this->session->userdata('id');

		if ($id) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('fname', 'First name', 'trim|required');


			if ($this->form_validation->run() == TRUE) {
				// true case
				if (empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
					$data = array(
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'firstname' => $this->input->post('fname'),
						'lastname' => $this->input->post('lname'),
						'phone' => $this->input->post('phone'),
						'gender' => $this->input->post('gender'),
					);

					$update = $this->model_users->edit($data, $id, $this->input->post('groups'));
					if ($update == true) {
						$this->session->set_flashdata('success', 'Data Berhasil Di Ubah');
						redirect('users/setting/', 'refresh');
					} else {
						$this->session->set_flashdata('errors', 'Error occurred!!');
						redirect('users/setting/', 'refresh');
					}
				} else {
					$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
					$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');

					if ($this->form_validation->run() == TRUE) {

						$password = $this->password_hash($this->input->post('password'));

						$data = array(
							'username' => $this->input->post('username'),
							'password' => $password,
							'email' => $this->input->post('email'),
							'firstname' => $this->input->post('fname'),
							'lastname' => $this->input->post('lname'),
							'phone' => $this->input->post('phone'),
							'gender' => $this->input->post('gender'),
						);

						$update = $this->model_users->edit($data, $id, $this->input->post('groups'));
						if ($update == true) {
							$this->session->set_flashdata('success', 'Data Berhasil Di Ubah');
							redirect('users/setting/', 'refresh');
						} else {
							$this->session->set_flashdata('errors', 'Error occurred!!');
							redirect('users/setting/', 'refresh');
						}
					} else {
						// false case
						$user_data = $this->model_users->getUserData($id);
						$groups = $this->model_users->getUserGroup($id);

						$this->data['user_data'] = $user_data;
						$this->data['user_group'] = $groups;

						$group_data = $this->model_groups->getGroupData();
						$this->data['group_data'] = $group_data;

						$this->render_template('users/setting', $this->data);
					}
				}
			} else {
				// false case
				$user_data = $this->model_users->getUserData($id);
				$groups = $this->model_users->getUserGroup($id);

				$this->data['user_data'] = $user_data;
				$this->data['user_group'] = $groups;

				$group_data = $this->model_groups->getGroupData();
				$this->data['group_data'] = $group_data;

				$this->render_template('users/setting', $this->data);
			}
		}
	}
}
