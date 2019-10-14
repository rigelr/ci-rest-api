<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent::__controller
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
         $this->load->model('login_model');
         $this->load->model('siswa_model');
         //$this->load->model('mahasiswa_model');

        if ($this->session->userdata('level') != 'user') {
            redirect('login', 'refresh');
            }
        // 
    }


    public function index()
    {
        $data=array(
            'title'=>'datasiswa',
            'siswa'=>$this->siswa_model->datatabels()
        );
        //$data['title'] = 'Halaman User';
        $this->load->view('template/header_datatabels_user',$data);
        $this->load->view('siswa/user');
        $this->load->view('template/footer_datatabels_user',$data);
        
    }
}
?>
