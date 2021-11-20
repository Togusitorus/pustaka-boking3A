<?php
class Matakuliah extends CI_Controller
{
    public function __construct(){
        parent ::__construct();
    }

    public function index ()
    {
    
        $this->load->View ('view-form-matakuliah');
    }

    public function proses()
    {
        $this->load->model(['model_latihan1']);
        $data = [
            'nim'=> $this ->input->post('nim'),
            'nama'=> $this ->input->post('nama'),
            'prodi'=> $this ->input->post('prodi'),
            'biaya Kuliah' =>$this->model_latihan1->getbiaya($this->input->post('prodi'))
        ];

        $this->load->view('view-data-matakuliah', $data);
       
    }
}