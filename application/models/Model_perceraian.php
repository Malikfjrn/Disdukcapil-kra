<?php 

class Model_perceraian extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPerceraianData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM tbl_perceraian WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM tbl_perceraian ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function create($data = array())
	{

		if($data) {
			$create = $this->db->insert('tbl_perceraian', $data);
			return ($create == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('tbl_perceraian', $data);
			return ($update == true) ? true : false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('tbl_perceraian');
		return ($delete == true) ? true : false;
	}

	public function countTotalPerceraian()
	{
		$sql = "SELECT * FROM tbl_perceraian";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function countTotalPerceraianPertahun()
{
    $currentYear = date('Y');
    $sql = "SELECT * FROM tbl_perceraian WHERE YEAR(tanggal_putusan) = ?";
    $query = $this->db->query($sql, array($currentYear));
    return $query->num_rows();
}



	public function countTotalPerceraianPerMonthCurrentYear()
{
    $currentYear = date('Y');

    $sql = "SELECT MONTH(tanggal_putusan) as month, COUNT(*) as totalPerceraian
            FROM tbl_perceraian
            WHERE YEAR(tanggal_putusan) = ?
            GROUP BY MONTH(tanggal_putusan)";

    $query = $this->db->query($sql, array($currentYear));
    return $query->result();
}


	public function getBulanLabels()
{
    $currentYear = date('Y'); // Get the current year

    $this->db->select('DISTINCT MONTH(tanggal_putusan) as bulan', false);
    $this->db->from('tbl_perceraian');
    $this->db->where('YEAR(tanggal_putusan)', $currentYear); // Filter by the current year
    $query = $this->db->get();
    $result = $query->result_array();

    // Pass $currentYear explicitly to array_map
    $labels = array_map(function ($item) use ($currentYear) {
        // Menggunakan fungsi date untuk mendapatkan nama bulan dari nomor bulan
        $nama_bulan = date('F', mktime(0, 0, 0, $item['bulan'], 1));
        return ['tahun' => $currentYear, 'bulan' => $nama_bulan];
    }, $result);

    return $labels;
}


	  
	
	// Fungsi-fungsi lain di model juga harus diperbarui sesuai dengan kebutuhan
	
	
	
	public function getDatasetsForPackages()
	{
		$this->db->select('sebab, COUNT(*) as jumlah_perceraian');
		$this->db->from('tbl_perceraian');
		$this->db->where('YEAR(tanggal_putusan)', date('Y')); // Filter by the current year
		$this->db->group_by('sebab');
		$this->db->order_by('sebab', 'ASC');
		$query = $this->db->get();
		$result = $query->result_array();
	
		$datasets = array_map(function($item) {
			return [
				'label' => $item['sebab'],
				'data' => $this->getJumlahPerceraianPerBulan($item['sebab']),
				'backgroundColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',0.2)',
				'borderColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1)',
				'borderWidth' => 1
			];
		}, $result);
	
		return $datasets;
	}
	
	public function getJumlahPerceraianPerBulan($sebab)
	{
		$this->db->select('MONTH(tanggal_putusan) as bulan, COUNT(*) as jumlah_perceraian');
		$this->db->from('tbl_perceraian');
		$this->db->where('sebab', $sebab);
		$this->db->where('YEAR(tanggal_putusan)', date('Y')); // Filter by the current year
		$this->db->group_by('bulan');
		$query = $this->db->get();
		$result = $query->result_array();
	
		// Inisialisasi array jumlah_perceraian
		$jumlah_perceraian = array_fill(1, 12, 0);
	
		// Isi array dengan data yang benar
		foreach ($result as $item) {
			$bulan = $item['bulan'];
			$jumlah_perceraian[$bulan] = $item['jumlah_perceraian'];
		}
	
		// Tambahkan output log untuk memeriksa hasil
		log_message('debug', 'Jumlah Pesanan Per Bulan (' . $sebab . '): ' . print_r($jumlah_perceraian, true));
	
		return $jumlah_perceraian;
	}
	
}