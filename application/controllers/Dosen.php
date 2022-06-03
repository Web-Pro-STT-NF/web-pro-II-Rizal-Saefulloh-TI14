<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Dosen extends CI_Controller {

    public function index(){
        $this->load->model('Dosen_model','dsn1');

        $this->dsn1->id=1;
        $this->dsn1->nidn='010001';
        $this->dsn1->nama='Sirojul Munir';
        $this->dsn1->pendidikan='S3';

        $this->load->model('Dosen_model','dsn2');  
        
        $this->dsn2->id=2;
        $this->dsn2->nidn='020002';
        $this->dsn2->nama='Pudy Prima';
        $this->dsn2->pendidikan='S2';

        $this->load->model('Dosen_model','dsn3');  
        
        $this->dsn3->id=3;
        $this->dsn3->nidn='030003';
        $this->dsn3->nama='Lukman Rosyidi';
        $this->dsn3->pendidikan='S2';
 
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
 
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Dosen_model','dsn1');
        
        $this->dsn1->nidn = $this->input->post('nidn');
        $this->dsn1->nama = $this->input->post('nama');
        $this->dsn1->gender = $this->input->post('jk');
        $this->dsn1->tmp = $this->input->post('tmp_lahir');
        $this->dsn1->tgl = $this->input->post('tgl_lahir');
        $this->dsn1->pendidikan = $this->input->post('pendidikan');
        $this->dsn1->prodi = $this->input->post('prodi');

        //die(print_r($this->mhs1));

        $data['dsn1']=$this->dsn1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');
    }
}