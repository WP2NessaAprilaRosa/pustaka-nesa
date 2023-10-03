<<<<<<< HEAD
<?php
class Latihan1 extends CI_Controller
{
    public function index ()
    {
        echo " Selamat Datang.. Di indomaret Selamat Berbelanja:))))";
    }
        public function penjumlahan ($n1,$n2)
    {
        $this->load->model('Model_latihan1'); 
        $data['nilai1'] = $n1; 
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2); 
        
        $this->load->view('view-latihan', $data);
    }
=======
<?php
class Latihan1 extends CI_Controller
{
    public function index ()
    {
        echo " Selamat Datang.. Di indomaret Selamat Berbelanja:))))";
    }
        public function penjumlahan ($n1,$n2)
    {
        $this->load->model('Model_latihan1'); 
        $data['nilai1'] = $n1; 
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2); 
        
        $this->load->view('view-latihan', $data);
    }
>>>>>>> bbc8e1aede38d8a0232657797af5eaee0d59f1eb
}