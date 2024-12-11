<?php 

class UserMahasiswa {
    private $username;
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function getUserMhs() {
        // Periksa apakah variabel $_SESSION['Admin'] ada
        if (isset($_SESSION['mahasiswa'])) {
            $this->username = $_SESSION['mahasiswa'];
            $querry = "SELECT * FROM Mahasiswa WHERE id_mhs = :username";
            $this->db->query($querry);
            $this->db->bind(':username', $this->username);
            $result = $this->db->single();

            if ($result) {
                return $result; // Mengembalikan data pengguna
            } else {
                // Tangani kasus jika tidak ada data ditemukan
                echo "Data pengguna tidak ditemukan.";
                return null;
            }
        } 
    }
    public function getData($field) {
        $userData = $this->getUserMhs();
        if ($userData) {
            // Periksa apakah kolom yang diminta ada dalam hasil
            if (isset($userData[$field])) {
                return $userData[$field]; // Mengembalikan nilai dari kolom yang diminta
            } else {
                return 'Kolom tidak ditemukan'; // Jika kolom tidak ada
            }
        } else {
            return 'Pengguna tidak ditemukan'; // Alternatif jika tidak ada data
        }
    }

    public function getAgenda() {
        $query = "SELECT * FROM Agenda";
        $this->db->query($query);
        $result = $this->db->resultSet();
    
        return $result;
    }
    

}