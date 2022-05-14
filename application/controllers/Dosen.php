<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('dosen_model', 'dsn1');

        // buat object model 1 dan nilai nya
        $this->dsn1->nidn='2009017052';
        $this->dsn1->pendidikan='S1';

        
        $this->load->model('dosen_model', 'dsn2');

        // buat object model 2 dan nilai nya
        $this->dsn2->nidn='2304156901';
        $this->dsn2->pendidikan='S2';
         
        $this->load->model('dosen_model', 'dsn3');

        // buat object model 3 dan nilai nya
        $this->dsn3->nidn='2097213354';
        $this->dsn3->pendidikan='S1&S2';

        // simpn object yang kita buat tadi ke dalam a
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // Siapakan data untuk di kirim ke dalam view, dimana datanya di ambil dari object yang kita ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index', $data);

    }
}
?>