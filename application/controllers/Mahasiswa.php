<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat object model 1 dan nilai nya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Diki';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.65;
        
        $this->load->model('mahasiswa_model', 'mhs2');

        // buat object model2 dan nilai nya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='Darmawan';
        $this->mhs2->gender='L';
        $this->mhs2->ipk=3.55;
        
        // simpn object yang kita buat tdai ke dalam a
        $list_mhs = [$this->mhs1, $this->mhs2];
        // Siapakan data untuk di kirim ke dalam view, dimana datanya di ambil dari object yang kita ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);

    }
}
?>