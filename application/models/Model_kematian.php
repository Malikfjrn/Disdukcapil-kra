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

	public function countTotalKematianPertahun()
{
    $currentYear = date('Y');
    $sql = "SELECT * FROM kematian WHERE YEAR(tanggalKematian) = ?";
    $query = $this->db->query($sql, array($currentYear));
    return $query->num_rows();
}

	public function countTotalKematianPerBulanCurrentYear()
	{
		$currentYear = date('Y');
	
		$sql = "SELECT MONTH(tanggalKematian) as bulan, COUNT(*) as total_kematian
				FROM kematian 
				WHERE YEAR(tanggalKematian) = ?
				GROUP BY MONTH(tanggalKematian)";
	
		$query = $this->db->query($sql, array($currentYear));
		return $query->result_array();
	}

	

	public function getBulanLabels()
{
    $currentYear = date('Y'); 

    $this->db->select('DISTINCT MONTH(tanggalKematian) as bulan', false);
    $this->db->from('kematian');
    $this->db->where('YEAR(tanggalKematian)', $currentYear); 
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
    $this->db->select('sebab, COUNT(*) as jumlah_kematian');
    $this->db->from('kematian');
    $this->db->where('YEAR(tanggalKematian)', date('Y'));
    $this->db->group_by('sebab');
    $this->db->order_by('sebab', 'ASC');
    $query = $this->db->get();
    $result = $query->result_array();

    $datasets = array_map(function($item) {
        return [
            'label' => $item['sebab'],
            'data' => $this->getJumlahKematianPerBulan($item['sebab']),
            'backgroundColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',0.2)',
            'borderColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1)',
            'borderWidth' => 1
        ];
    }, $result);

    return $datasets;
}

	
public function getJumlahKematianPerBulan($sebab)
{
    $this->db->select('MONTH(tanggalKematian) as bulan, COUNT(*) as jumlah_kematian');
    $this->db->from('kematian');
    $this->db->where('sebab', $sebab);
    $this->db->where('YEAR(tanggalKematian)', date('Y')); 
    $this->db->group_by('bulan');
    $query = $this->db->get();
    $result = $query->result_array();

    $jumlah_kematian = array_fill(1, 12, 0);

    foreach ($result as $item) {
        $bulan = $item['bulan'];
        $jumlah_kematian[$bulan] = $item['jumlah_kematian'];
    }

    log_message('debug', 'Jumlah Kematian Per Bulan (' . $sebab . '): ' . print_r($jumlah_kematian, true));

    return $jumlah_kematian;
}

}

