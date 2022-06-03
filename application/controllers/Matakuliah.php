<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Matakuliah extends CI_Controller {

    public function index(){
        $this->load->model('Matakuliah_model','mk1');

        $this->mk1->id=1;
        $this->mk1->nama='Pemrograman Web 2';
        $this->mk1->sks='3';
        $this->mk1->kode='3001';

        $this->load->model('Matakuliah_model','mk2');  
        
        $this->mk2->id=2;
        $this->mk2->nama='Basis Data';
        $this->mk2->sks='3';
        $this->mk2->kode='3002';

        $this->load->model('Matakuliah_model','mk3');  
        
        $this->mk3->id=3;
        $this->mk3->nama='Jaringan Komputer';
        $this->mk3->sks='4';
        $this->mk3->kode='4001';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk']=$list_mk;
 
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('layout/footer');
    }
    
    public function create(){
        $data['judul']='Form Kelola Matakuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Matakuliah_model','mk1');
        
        $this->mk1->matkul = $this->input->post('matkul');
        $this->mk1->sks = $this->input->post('sks');
        $this->mk1->kode = $this->input->post('kode');

        //die(print_r($this->mhs1));

        $data['mk1']=$this->mk1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/view',$data);
        $this->load->view('layout/footer');
    }
}