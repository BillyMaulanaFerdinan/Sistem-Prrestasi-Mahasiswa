<?php
class Mahasiswa extends Controller{

    public function index (){
        $data['judul'] = 'Beranda';
        $data['namaMhs'] = $this->model('UserMahasiswa')->getData('nama_mhs');
        $data['NIM'] = $this->model('UserMahasiswa')->getData('id_mhs');
        $this->view('templates/headMhs', $data);  
        $this->view('mahasiswa/beranda', $data);
          
    }
}