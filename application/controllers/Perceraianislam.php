<?php 

class Perceraianislam extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Perceraianislam';
		

		$this->load->model('model_perceraianislam');
		/*$this->load->model('model_fakultas');
		$this->load->model('model_jurusan');
		$this->load->model('model_kelas');*/
		
		
	}

	public function index()
	{

		if(!in_array('viewPerceraianislam', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$pcri_data = $this->model_perceraianislam-> getPerceraianislamData();

		$result = array();
		foreach ($pcri_data as $k => $v) {

			$result[$k]['pcri_info'] = $v;

			/*$fakultas = $this->model_mahasiswa->getFakultasData($v['id']);
			$result[$k]['mhs_fakultas'] = $fakultas;

			$jurusan = $this->model_mahasiswa->getJurusanData($v['id']);
			$result[$k]['mhs_jurusan'] = $jurusan;

			$kelas = $this->model_mahasiswa->getKelasData($v['id']);
			$result[$k]['mhs_kelas'] = $kelas;*/
		}

		$this->data['pcri_data'] = $result;

		$this->render_template('perceraianislam/index', $this->data);
	}

	public function create()
	{

		if(!in_array('createPerceraianislam', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$this->form_validation->set_rules('nik_pria', 'Nik Pria', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Pria harus diisi.',
			'min_length' => 'NIK Pria harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Pria tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_lengkap_pria', 'Nama Lengkap Pria', 'trim|required');
        $this->form_validation->set_rules('provinsi_pria', 'Provinsi Pria', 'required');
        $this->form_validation->set_rules('kabupaten_pria', 'Kabupaten Pria', 'trim|required');
		$this->form_validation->set_rules('kecamatan_pria', 'Kecamatan Pria', 'trim|required');
        $this->form_validation->set_rules('desa_pria', 'Desa Pria', 'trim|required');
		$this->form_validation->set_rules('nik_wanita', 'Nik Wanita', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Wanita harus diisi.',
			'min_length' => 'NIK Wanita harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Wanita tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_lengkap_wanita', 'Nama Lengkap Wanita', 'trim|required');
		$this->form_validation->set_rules('provinsi_wanita', 'Provinsi Wanita', 'trim|required');
		$this->form_validation->set_rules('kabupaten_wanita', 'Kabupaten Wanita', 'trim|required');
		$this->form_validation->set_rules('kecamatan_wanita', 'Kecamatan Wanita', 'trim|required');
        $this->form_validation->set_rules('desa_wanita', 'Desa Wanita', 'trim|required');
		$this->form_validation->set_rules('no_perceraianislam', 'No Perceraianislam', 'trim|required');
        $this->form_validation->set_rules('tanggal_perceraianislam', 'Tanggal Perceraianislam', 'trim|required');
        $this->form_validation->set_rules('alamat_baru', 'Alamat Baru', 'trim|required');
        

        if ($this->form_validation->run() == TRUE) {
            //  true case
			 $upload_image = $this->upload_image();
           
        	$data = array(
        		'nik_pria' => $this->input->post('nik_pria'),
        		'nama_lengkap_pria' => $this->input->post('nama_lengkap_pria'),
                'provinsi_pria' => $this->input->post('provinsi_pria'),
                'kabupaten_pria' => $this->input->post('kabupaten_pria'),
                'kecamatan_pria' => $this->input->post('kecamatan_pria'),
                'desa_pria' => $this->input->post('desa_pria'),
        		'nik_wanita' => $this->input->post('nik_wanita'),
        		'nama_lengkap_wanita' => $this->input->post('nama_lengkap_wanita'),
        		'provinsi_wanita' => $this->input->post('provinsi_wanita'),
        		'kabupaten_wanita' => $this->input->post('kabupaten_wanita'),
        		'kecamatan_wanita' => $this->input->post('kecamatan_wanita'),
        		'desa_wanita' => $this->input->post('desa_wanita'),
				'no_perceraianislam' => $this->input->post('no_perceraianislam'),
				'tanggal_perceraianislam' => $this->input->post('tanggal_perceraianislam'),
				'alamat_baru' => $this->input->post('alamat_baru'),
        		
        	);

        	$create = $this->model_perceraianislam->create($data);
        	if($create == true) {
        		$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
        		redirect('perceraianislam/', 'refresh');
        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('perceraianislam/create', 'refresh');

                
        	}
        }
        else {
            // false case
            // $this->data['fakultas'] = $this->model_fakultas->getFakultasData();
            // $this->data['jurusan'] = $this->model_jurusan->getJurusanData();
            // $this->data['kelas'] = $this->model_kelas->getKelasData();
      
            $this->render_template('perceraianislam/create', $this->data);
        }	

		
	}

	public function password_hash($pass = '')
	{
		if($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}



	public function upload_image()
    {
    	// assets/images/product_image
        $config['upload_path'] = 'assets/images/perceraianislam';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('perceraianislam'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['form_perceraianislam']['name']);
            $type = $type[count($type) - 1];
            
           $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
    }

	public function edit($id)
	{      
        if(!in_array('updatePerceraianislam', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        if(!$id) {
            redirect('dashboard', 'refresh');
        }
		
		$this->form_validation->set_rules('nik_pria', 'Nik Pria', 'required');
		$this->form_validation->set_rules('nama_lengkap_pria', 'Nama Lengkap Pria', 'trim|required');
        $this->form_validation->set_rules('provinsi_pria', 'Provinsi Pria', 'required');
        $this->form_validation->set_rules('kabupaten_pria', 'Kabupaten Pria', 'trim|required');
        $this->form_validation->set_rules('kecamatan_pria', 'Kecamatan Pria', 'required');
        $this->form_validation->set_rules('desa_pria', 'Desa Pria', 'trim|required');
		$this->form_validation->set_rules('nik_wanita', 'Nik Wanita', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap_wanita', 'Nama Lengkap Wanita', 'trim|required');
		$this->form_validation->set_rules('provinsi_wanita', 'Provinsi Wanita', 'trim|required');
		$this->form_validation->set_rules('kecamatan_wanita', 'Kecamatan Wanita', 'trim|required');
        $this->form_validation->set_rules('desa_wanita', 'Desa Wanita', 'trim|required');
		$this->form_validation->set_rules('no_perceraianislam', 'No Perceraianislam', 'trim|required');
        $this->form_validation->set_rules('tanggal_perceraianislam', 'Tanggal Perceraianislam', 'trim|required');
        $this->form_validation->set_rules('alamat_baru', 'Alamat Baru', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // true case
            
            $data = array(
        		'nik_pria' => $this->input->post('nik_pria'),
        		'nama_lengkap_pria' => $this->input->post('nama_lengkap_pria'),
                'provinsi_pria' => $this->input->post('provinsi_pria'),
                'kabupaten_pria' => $this->input->post('kabupaten_pria'),
                'kecamatan_pria' => $this->input->post('kecamatan_pria'),
                'desa_pria' => $this->input->post('desa_pria'),
        		'nik_wanita' => $this->input->post('nik_wanita'),
        		'nama_lengkap_wanita' => $this->input->post('nama_lengkap_wanita'),
        		'provinsi_wanita' => $this->input->post('provinsi_wanita'),
        		'kabupaten_wanita' => $this->input->post('kabupaten_wanita'),
        		'kecamatan_wanita' => $this->input->post('kecamatan_wanita'),
        		'desa_wanita' => $this->input->post('desa_wanita'),
				'no_perceraianislam' => $this->input->post('no_perceraianislam'),
				'tanggal_perceraianislam' => $this->input->post('tanggal_perceraianislam'),
				'alamat_baru' => $this->input->post('alamat_baru'),
        		
        	);

 			
            $update = $this->model_perceraianislam->update($data, $id);
            if($update == true) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Update');
                redirect('perceraianislam/', 'refresh');
            }
            else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('perceraianislam/edit/'.$id, 'refresh');
            }
        }
        else {
                    
            // 	$this->data['fakultas'] = $this->model_fakultas->getAktifFakultas();           
            // $this->data['jurusan'] = $this->model_jurusan->getAktifJurusan(); 
            // $this->data['kelas'] = $this->model_kelas->getAktifKelas();          

            // $mhs_data = $this->model_perceraian->getPerceraianData($id);
            // $this->data['mhs_data'] = $mhs_data;
            $this->render_template('perceraianislam/edit', $this->data); 
        }   
	}



	public function delete($id)
	{
		if (!in_array('deletePerceraianislam', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {
				$delete = $this->model_perceraianislam->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('perceraianislam/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('perceraianislam/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('perceraianislam/delete', $this->data);
			}
		}
	}


}       