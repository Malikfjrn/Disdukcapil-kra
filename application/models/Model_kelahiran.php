<?php

class Model_kelahiran extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getKelahiranData($id = null)
	{
		if ($id) {
			$sql = "SELECT * FROM kelahiran WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM kelahiran ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function create($data = array())
	{

		if ($data) {
			$create = $this->db->insert('kelahiran', $data);
			return ($create == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if ($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('kelahiran', $data);
			return ($update == true) ? true : false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('kelahiran');
		return ($delete == true) ? true : false;
	}

	public function countTotalKelahiran()
	{
		$sql = "SELECT * FROM kelahiran";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function countTotalKelahiranPertahun()
	{
		$currentYear = date('Y');
		$sql = "SELECT * FROM kelahiran WHERE YEAR(tanggalLahir) = ?";
		$query = $this->db->query($sql, array($currentYear));
		return $query->num_rows();
	}
	
	
	public function countTotalKelahiranPerBulanCurrentYear()
	{
		$currentYear = date('Y');
	
		$sql = "SELECT MONTH(tanggalLahir) as bulan, COUNT(*) as total_kelahiran 
				FROM kelahiran 
				WHERE YEAR(tanggalLahir) = ?
				GROUP BY MONTH(tanggalLahir)";
	
		$query = $this->db->query($sql, array($currentYear));
		return $query->result_array();
	}
	
	
	public function getBulanLabels()
	{
		$currentYear = date('Y'); 

		$this->db->select('DISTINCT MONTH(tanggalLahir) as bulan', false);
		$this->db->from('kelahiran');
		$this->db->where('YEAR(tanggalLahir)', $currentYear); 
		$query = $this->db->get();
		$result = $query->result_array();

		
		$labels = array_map(function ($item) use ($currentYear) {
			
			$nama_bulan = date('F', mktime(0, 0, 0, $item['bulan'], 1));
			return ['tahun' => $currentYear, 'bulan' => $nama_bulan];
		}, $result);

		return $labels;
	}

	public function getDatasetsForPackages()
	{
		$this->db->select('jenisKelamin, COUNT(*) as jumlah_kelahiran');
		$this->db->from('kelahiran');
		$this->db->where('YEAR(tanggalLahir)', date('Y')); 
		$this->db->group_by('jenisKelamin');
		$this->db->order_by('jenisKelamin', 'ASC');
		$query = $this->db->get();
		$result = $query->result_array();
	
		$datasets = array_map(function($item) {
			return [
				'label' => $item['jenisKelamin'],
				'data' => $this->getJumlahKelahiranPerBulan($item['jenisKelamin']),
				'backgroundColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',0.2)',
				'borderColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1)',
				'borderWidth' => 1
			];
		}, $result);
	
		return $datasets;
	}
	
	public function getJumlahKelahiranPerBulan($jenisKelamin)
	{
		$this->db->select('MONTH(tanggalLahir) as bulan, COUNT(*) as jumlah_kelahiran');
		$this->db->from('kelahiran');
		$this->db->where('jenisKelamin', $jenisKelamin);
		$this->db->where('YEAR(tanggalLahir)', date('Y')); 
		$this->db->group_by('bulan');
		$query = $this->db->get();
		$result = $query->result_array();
	
		
		$jumlah_kelahiran = array_fill(1, 12, 0);
	
		
		foreach ($result as $item) {
			$bulan = $item['bulan'];
			$jumlah_kelahiran[$bulan] = $item['jumlah_kelahiran'];
		}
	
		
		log_message('debug', 'Jumlah Kelahiran Per Bulan (' . $jenisKelamin . '): ' . print_r($jumlah_kelahiran, true));
	
		return $jumlah_kelahiran;
	}
	
}