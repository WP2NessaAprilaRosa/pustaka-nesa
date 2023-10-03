<<<<<<< HEAD
<?php
class Model_Latihan1 extends CI_Model
{
    //membuat variable yang menampung nilai 
    public $nilai1, $nilai2, $hasil;

    //methode penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1; 
        $this->nilai2 = $n2; 
        $this->hasil = $this->nilai1 + $this->nilai2; 
        return $this->hasil;
    }
=======
<?php
class Model_Latihan1 extends CI_Model
{
    //membuat variable yang menampung nilai 
    public $nilai1, $nilai2, $hasil;

    //methode penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1; 
        $this->nilai2 = $n2; 
        $this->hasil = $this->nilai1 + $this->nilai2; 
        return $this->hasil;
    }
>>>>>>> bbc8e1aede38d8a0232657797af5eaee0d59f1eb
}