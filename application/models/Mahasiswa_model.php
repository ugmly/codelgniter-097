<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Data array data_mahasiswa
    private $data_mahasiswa = array(
            array('id' => 1, 'nama' => 'Ulung Galih Mahandaru', 'npm' => '141222097', 'angkatan' => '2023', 'kelas' => 'A', 'alamat' => 'Jl. Cempaka No. 20', 'mata_kuliah_favorit' => 'Pemrograman Web'),
            array('id' => 2, 'nama' => 'Gatot Sebeki', 'npm' => '1412345679', 'angkatan' => '2023', 'kelas' => 'B', 'alamat' => 'Jl. Tulip No. 30', 'mata_kuliah_favorit' => 'Basis Data'),
            array('id' => 3, 'nama' => 'Nana Saputri', 'npm' => '1412345680', 'angkatan' => '2023', 'kelas' => 'C', 'alamat' => 'Jl. Anggrek No. 40', 'mata_kuliah_favorit' => 'Pemrograman Lanjut'),
            array('id' => 4, 'nama' => 'Yudhistira Asta', 'npm' => '1412345681', 'angkatan' => '2023', 'kelas' => 'A', 'alamat' => 'Jl. Dahlia No. 50', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
            array('id' => 5, 'nama' => 'Diana Putri Rahmawati', 'npm' => '1412345682', 'angkatan' => '2023', 'kelas' => 'B', 'alamat' => 'Jl. Teratai No. 60', 'mata_kuliah_favorit' => 'Data Mining'),
            array('id' => 6, 'nama' => 'Oki Setiawan', 'npm' => '1412345683', 'angkatan' => '2023', 'kelas' => 'C', 'alamat' => 'Jl. Flamboyan No. 70', 'mata_kuliah_favorit' => 'Pemrograman Web'),
            array('id' => 7, 'nama' => 'Fajar Jayadi', 'npm' => '1412345684', 'angkatan' => '2023', 'kelas' => 'A', 'alamat' => 'Jl. Cendrawasih No. 80', 'mata_kuliah_favorit' => 'Statistika'),
            array('id' => 8, 'nama' => 'Dinda Putri', 'npm' => '1412345685', 'angkatan' => '2023', 'kelas' => 'B', 'alamat' => 'Jl. Flamboyan No. 90', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
            array('id' => 9, 'nama' => 'Sunarto', 'npm' => '1412345686', 'angkatan' => '2023', 'kelas' => 'C', 'alamat' => 'Jl. Mawar No. 100', 'mata_kuliah_favorit' => 'Sistem Operasi'),
            array('id' => 10, 'nama' => 'Indah Ayusora Jasmine', 'npm' => '1412345687', 'angkatan' => '2023', 'kelas' => 'A', 'alamat' => 'Jl. Melati No. 110', 'mata_kuliah_favorit' => 'Sistem Operasi')
        );
        
        

    // Fungsi untuk mendapatkan data mahasiswa
    public function get_mahasiswa()
    {
        return $this->data_mahasiswa;
    }

    public function search_mahasiswa($keyword)
    {
        $result = array();
        $keyword = strtolower($keyword); // Ubah kata kunci menjadi lowercase untuk pencarian case-insensitive
        foreach ($this->data_mahasiswa as $mahasiswa) {
            // Ubah semua nilai menjadi lowercase untuk pencarian case-insensitive
            $nama = strtolower($mahasiswa['nama']);
            $npm = strtolower($mahasiswa['npm']);
            $angkatan = strtolower($mahasiswa['angkatan']);
            $kelas = strtolower($mahasiswa['kelas']);
            $alamat = strtolower($mahasiswa['alamat']);
            $matkul = strtolower($mahasiswa['mata_kuliah_favorit']);

            // Gunakan stripos() untuk pencarian case-insensitive
            if (
                stripos($nama, $keyword) !== false ||
                stripos($npm, $keyword) !== false ||
                stripos($angkatan, $keyword) !== false ||
                stripos($kelas, $keyword) !== false ||
                stripos($alamat, $keyword) !== false ||
                stripos($matkul, $keyword) !== false
            ) {
                $result[] = $mahasiswa;
            }
        }
        return $result;
    }
}
