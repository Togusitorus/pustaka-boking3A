<?php
class Mahasiswa extends CI_Controller
{
    public function __construct(){
        parent ::__construct();
    }

    public function index ()
    {
    
        $this->load->View (view-from-matakuliah);
    }

    public function proses()
    {
        $this->load->(['view-data-matakuliah']);
        $data = [
            'nim'=> $this ->input->post('nim'),
            'nama'=> $this ->input->post('nama'),
            'prodi'=> $this ->input->post('prodi'),
            'biaya kuliah' =>$this->ModelMahasiswa->getbiaya($this->input->post('prodi'))
        ];
        $this->load->view('FormOutput', $data);

        
    }
}