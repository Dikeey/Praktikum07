<?php
class MataKuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mataKuliah_model', 'mkl1');

        // buat object model 1 dan nilai nya
        $this->mkl1->nama='Pemograman Web';
        $this->mkl1->sks='2';
        $this->mkl1->kode='pw123';        
        
        $this->load->model('matakuliah_model', 'mkl2');

        // buat object model 2 dan nilai nya
        $this->mkl2->nama='Bahasa Inggris';
        $this->mkl2->sks='2';
        $this->mkl2->kode='bing21';

        $this->load->model('matakuliah_model', 'mkl3');

        // buat object model 3 dan nilai nya
        $this->mkl3->nama='Basis Data';
        $this->mkl3->sks='4';
        $this->mkl3->kode='bd1234';
        
        // simpn object yang kita buat tadi ke dalam a
        $list_mkl = [$this->mkl1, $this->mkl2, $this->mkl3];
        // Siapakan data untuk di kirim ke dalam view, dimana datanya di ambil dari object yang kita ke dalam array
        $data['list_mkl'] = $list_mkl;
        // render data dan kirim data ke dalam view
        $this->load->view('matakuliah/index', $data);

    }
}
?>