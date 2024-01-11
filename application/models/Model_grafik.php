<?php

class Model_grafik extends CI_Model
{
    // Model_grafik.php

public function getBulanLabels()
{
    $this->db->select('DISTINCT YEAR(tanggalLahir) as tahun, MONTH(tanggalLahir) as bulan', false);
    $this->db->from('kelahiran');
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
        $this->db->select('tempatDilahirkan, COUNT(*) as jumlah_pesanan');
        $this->db->from('kelahiran');
        $this->db->group_by('tempatDilahirkan');
        $this->db->order_by('tempatDilahirkan', 'ASC');
        $query = $this->db->get();
        $result = $query->result_array();

        $datasets = array_map(function($item) {
            return [
                'label' => $item['tempatDilahirkan'],
                'data' => $this->getJumlahPesananPerBulan($item['tempatDilahirkan']),
                'backgroundColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',0.2)',
                'borderColor' => 'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1)',
                'borderWidth' => 1
            ];
        }, $result);

        return $datasets;
    }

    public function getJumlahPesananPerBulan($tempatDilahirkan)
{
    $this->db->select('MONTH(tanggalLahir) as bulan, COUNT(*) as jumlah_pesanan');
    $this->db->from('kelahiran');
    $this->db->where('tempatDilahirkan', $tempatDilahirkan);
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
    log_message('debug', 'Jumlah Pesanan Per Bulan (' . $tempatDilahirkan . '): ' . print_r($jumlah_pesanan, true));

    return $jumlah_pesanan;
}



}