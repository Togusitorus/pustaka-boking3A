<?php
class ModelMahasiswa extends CI_Model
{
    public $prodi, $biaya_kuliah;

    public function getbiaya($prodi=null)
    {
        $this->prodi=$prodi;
        if($this->prodi == "Sistem Informasi")
            {$this ->biaya_kuliah=1000000;}
        elseif($this->prodi == "Sistem Informasi Akuntansi")
            {$this ->biaya_kuliah=1500000;} 
        elseif($this->prodi == "Teknik Informatika")
            {$this ->biaya_kuliah=2000000;}
            
    return $this->biaya_kuliah
    }
}