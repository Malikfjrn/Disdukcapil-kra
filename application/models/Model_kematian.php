<?php 

class Model_kematian extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getKematianData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM kematian WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM kematian ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function create($data = array())
	{

		if($data) {
			$create = $this->db->insert('kematian', $data);
			return ($create == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('kematian', $data);
			return ($update == true) ? true : false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('kematian');
		return ($delete == true) ? true : false;
	}

	public function countTotalKematian()
	{
		$sql = "SELECT * FROM kematian";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function countTotalKematianPerBulanCurrentYear()
	{
		$currentYear = date('Y');
	
		$sql = "SELECT MONTH(tanggalKematian) as bulan, COUNT(*) as total_kematian
				FROM kematian 
				WHERE YEAR(tanggalKematian) = ?
				GROUP BY bulan";
	
		$query = $this->db->query($sql, array($currentYear));
		return $query->result_array();
	}

	public function getBulanLabels()
	{
		$this->db->select('DISTINCT YEAR(tanggalKematian) as tahun, MONTH(tanggalKematian) as bulan', false);
		$this->db->from('kematian');
		$query = $this->db->get();
		$result = $query->result_array();
	
		$labels = array_map(function ($item) {
			// Menggunakan fungsi date untuk mendapatkan nama bulan dari nomor bulan
			$nama_bulan = date('F', mktime(0, 0, 0, $item['bulan'], 1));
			return ['tahun' => $item['tahun'], 'bulan' => $nama_bulan];
		}, $result);
	
		return $labels;
	}
	  
	
	// Fungsi-fungsi lain di model juga harus diperbarui sesuai dengan kebutuhan
	
	
	
		public function getDatasetsForPackages()
		{
			$this->db->select('sebab, COUNT(*) as jumlah_pesanan');
			$this->db->from('kematian');
			$this->db->group_by('sebab');
			$this->db->order_by('sebab', 'ASC');
			$query = $this->db->get();
			$result = $query->result_array();
	
			$datasets = array_map(function($item) {
				return [
					'label' => $item['sebab'],
					'data' => $this->getJumlahPesananPerBulan($item['sebab']),
					'backgroundColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',0.2)',
					'borderColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1)',
					'borderWidth' => 1
				];
			}, $result);
	
			return $datasets;
		}
	
		public function getJumlahPesananPerBulan($sebab)
	{
		$this->db->select('MONTH(tanggalKematian) as bulan, COUNT(*) as jumlah_pesanan');
		$this->db->from('kematian');
		$this->db->where('sebab', $sebab);
		$this->db->group_by('bulan');
		$query = $this->db->get();
		$result = $query->result_array();
	
		// Inisialisasi array jumlah_pesanan
		$jumlah_pesanan = array_fill(1, 12, 0);
	
		// Isi array dengan data yang benar
		foreach ($result as $item) {
			$bulan = $item['bulan'];
			$jumlah_pesanan[$bulan] = $item['jumlah_pesanan'];
		}
	
		// Tambahkan output log untuk memeriksa hasil
		log_message('debug', 'Jumlah Pesanan Per Bulan (' . $sebab . '): ' . print_r($jumlah_pesanan, true));
	
		return $jumlah_pesanan;
	}
}