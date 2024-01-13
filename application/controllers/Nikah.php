<?php 

class Nikah extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Nikah';
		

		$this->load->model('model_nikah');
		
		
		
	}

	public function index()
	{

		if(!in_array('viewNikah', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$nkh_data = $this->model_nikah-> getNikahData();

		$result = array();
		foreach ($nkh_data as $k => $v) {

			$result[$k]['nkh_info'] = $v;

			
		}

		$this->data['nkh_data'] = $result;

		$this->render_template('nikah/index', $this->data);
	}

	public function create()
	{

		if(!in_array('createNikah', $this->permission)) {
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
        $this->form_validation->set_rules('kecamatan_pria', 'Kecamatan Pria', 'required');
        $this->form_validation->set_rules('desa_pria', 'Desa Pria', 'trim|required');
		$this->form_validation->set_rules('nik_wanita', 'Nik Wanita', 'required|min_length[16]|max_length[17]', array(
			'required' => 'Kolom NIK Wanita harus diisi.',
			'min_length' => 'NIK Wanita harus memiliki setidaknya 16 karakter.',
			'max_length' => 'NIK Wanita tidak boleh lebih dari 17 karakter.'
		));
		$this->form_validation->set_rules('nama_lengkap_wanita', 'Nama Lengkap Wanita', 'trim|required');
		$this->form_validation->set_rules('provinsi_wanita', 'Provinsi Wanita', 'trim|required');
		$this->form_validation->set_rules('kecamatan_wanita', 'Kecamatan Wanita', 'trim|required');
		$this->form_validation->set_rules('kabupaten_wanita', 'Kabupaten Wanita', 'trim|required');
        $this->form_validation->set_rules('desa_wanita', 'Desa Wanita', 'trim|required');
		$this->form_validation->set_rules('no_nikah', 'No Nikah', 'trim|required');
        $this->form_validation->set_rules('tanggalNikah', 'Tanggal Nikah', 'trim|required');
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
				'no_nikah' => $this->input->post('no_nikah'),
				'tanggalNikah' => $this->input->post('tanggalNikah'),
				'alamat_baru' => $this->input->post('alamat_baru'),
        		
        	);

        	$create = $this->model_nikah->create($data);
        	if($create == true) {
        		$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
        		redirect('nikah/', 'refresh');
        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('nikah/create', 'refresh');

                
        	}
        }
        else {
            $this->session->set_userdata('saved_data', $_POST);
			$this->session->set_flashdata('validation_errors', validation_errors());
      
            $this->render_template('nikah/create', $this->data);
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
    	
        $config['upload_path'] = 'assets/images/nikah';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';

        

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('nikah'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['form_nikah']['name']);
            $type = $type[count($type) - 1];
            
           $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
    }

	public function edit($id)
	{      
        if(!in_array('updateNikah', $this->permission)) {
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
		$this->form_validation->set_rules('no_nikah', 'No Nikah', 'trim|required');
        $this->form_validation->set_rules('tanggalNikah', 'Tanggal Nikah', 'trim|required');
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
				'no_nikah' => $this->input->post('no_nikah'),
				'tanggalNikah' => $this->input->post('tanggalNikah'),
				'alamat_baru' => $this->input->post('alamat_baru'),
        		
        	);

 			
            $update = $this->model_nikah->update($data, $id);
            if($update == true) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Update');
                redirect('nikah/', 'refresh');
            }
            else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('nikah/edit/'.$id, 'refresh');
            }
        }
        else {
                    
			$this->data['row'] = $this->db->where('id', $id)->get('tbl_nikah')->row();
            $this->render_template('nikah/edit', $this->data); 
        }   
	}



	public function delete($id)
	{
		if (!in_array('deleteNikah', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if ($id) {
			if ($this->input->post('confirm')) {
				$delete = $this->model_nikah->delete($id);
				if ($delete == true) {
					$this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
					redirect('nikah/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('nikah/delete/' . $id, 'refresh');
				}
			} else {
				$this->data['id'] = $id;
				$this->render_template('nikah/delete', $this->data);
			}
		}
	}

}       