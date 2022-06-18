<?php
class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->model('Mahasiswa_m');
        $this->load->helper('url');
    }

    public function index() {
        $mhsData = $this->Mahasiswa_m->getDataMhs();
        $data = [
            'mahasiswa' => $mhsData
        ];

        $this->load->view('Home', $data);
    }

    public function load_tambah_data () {
        $this->load->view('Post');
    }

    public function post_data_mhs(){

        $tempatLahir = $this->input->post('tempat_lahir');
        $tanggalLahir = $this->input->post('tgl_lahir');
        $ttl = $tempatLahir . ', '. $tanggalLahir;

        $savedata = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'ttl' => $ttl,
            'agama' => $this->input->post('agama'),
            'program_studi' => $this->input->post('prodi'),
            'email' => $this->input->post('email'),
            'hp' => $this->input->post('hp'),
            'asal_sekolah' => $this->input->post('asal_sekolah')
        ];

        $this->Mahasiswa_m->postData($savedata); 

        return redirect('https://' . $_SERVER['HTTP_HOST']);

    }

    public function delete_data_mhs(){
        $nim = end(explode('/', $_SERVER['PATH_INFO']));
        $this->Mahasiswa_m->deleteData($nim);
        return redirect('https://' . $_SERVER['HTTP_HOST']);
    }

}