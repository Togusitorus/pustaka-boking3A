<?php
class model_latihan1 extends CI_Model
{
    public $prodi, $biaya_Kuliah;

    public function getbiaya($prodi=null)
    {
        $this->prodi=$prodi;
        if($this->prodi == "Sistem Informasi")
            {$this ->biaya_Kuliah=1000000;}
        elseif($this->prodi == "Sistem Informasi Akuntansi")
            {$this ->biaya_Kuliah=1500000;} 
        elseif($this->prodi == "Teknik Informatika")
            {$this ->biaya_Kuliah=2000000;}
            
    return $this->biaya_Kuliah;
    }
}