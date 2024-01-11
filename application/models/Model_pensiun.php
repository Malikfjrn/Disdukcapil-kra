<?php 

class Model_pensiun extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPensiunData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM tbl_pensiun WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM tbl_pensiun ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function create($data = array())
	{

		if($data) {
			$create = $this->db->insert('tbl_pensiun', $data);
			return ($create == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('tbl_pensiun', $data);
			return ($update == true) ? true : false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('tbl_pensiun');
		return ($delete == true) ? true : false;
	}

	 public function countTotalPensiun()
    {
        $sql = "SELECT * FROM tbl_pensiun";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

	public function countTotalPensiunPerMonthCurrentYear()
	{
		$currentYear = date('Y');

		$sql = "SELECT MONTH(tahun_pensiun) as month, COUNT(*) as totalPensiun
				FROM tbl_pensiun
				WHERE YEAR(tahun_pensiun) = ?
				GROUP BY MONTH(tahun_pensiun)";

		$query = $this->db->query($sql, array($currentYear));
		return $query->result();
	}

	// public function countTotalPensiunPerBulan()
	// {
	// 	$sql = "SELECT MONTH(tahun_pensiun) as bulan, COUNT(*) as tahun_pensiun FROM tbl_pensiun GROUP BY bulan";
	// 	$query = $this->db->query($sql);
	// 	return $query->result_array();
	// }

	public function getTotalDataPerMonthInYear($tahun)
	{
		$this->db->select('MONTH(tahun_pensiun) as bulan, COUNT(*) as total_pensiun');
		$this->db->from('tbl_pensiun');
		$this->db->where('YEAR(tahun_pensiun)', $tahun);
		$this->db->group_by('bulan');
		$query = $this->db->get();
		$result = $query->result_array();

		$totalData = [];
		foreach ($result as $item) {
			$totalData[$item['bulan']] = $item['total_pensiun'];
		}

		// Fill in missing months with 0
		for ($i = 1; $i <= 12; $i++) {
			if (!isset($totalData[$i])) {
				$totalData[$i] = 0;
			}
		}

		ksort($totalData); // Sort by month

		return $totalData;
	}


	public function getBulanLabels($tahun)
	{
		// Initialize an array with all months
		$allMonths = range(1, 12);

		$this->db->select('MONTH(tahun_pensiun) as bulan', false);
		$this->db->from('tbl_pensiun');
		$this->db->where('YEAR(tahun_pensiun)', $tahun);
		$query = $this->db->get();
		$result = $query->result_array();

		// Extract the months from the query result
		$existingMonths = array_column($result, 'bulan');

		// Get the unique months
		$uniqueMonths = array_unique($existingMonths);

		// Merge the existing months with all months to ensure all are included
		$allMonths = array_merge($allMonths, $uniqueMonths);

		// Remove duplicates and sort the months
		$allMonths = array_unique($allMonths);
		sort($allMonths);

		$labels = array_map(function ($bulan) {
			$nama_bulan = date('F', mktime(0, 0, 0, $bulan, 1));
			return ['bulan' => $nama_bulan];
		}, $allMonths);

		return $labels;
	}



	public function getTotalDataPerYear()
	{
		$this->db->select('YEAR(tahun_pensiun) as tahun, COUNT(*) as total_pensiun');
		$this->db->from('tbl_pensiun');
		$this->db->group_by('tahun');
		$query = $this->db->get();
		$result = $query->result_array();

		$totalData = [];
		foreach ($result as $item) {
			$totalData[$item['tahun']] = $item['total_pensiun'];
		}

		return $totalData;
	}
	
}