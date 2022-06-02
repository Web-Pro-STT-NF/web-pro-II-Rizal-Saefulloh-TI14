<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class matakuliah extends CI_Controller {
 public function index()
 {
     $this->load->model('matakuliah_model', 'mk1');
     $this->mk1->id = 1;
     $this->mk1->kode = '01';
     $this->mk1->nama = 'Basis Data';
     $this->mk1->sks = '3';
     $this->mk1->dosen = "Zhafran Rafanizan";
 
     $this->load->model('matakuliah_model', 'mk2');
     $this->mk2->id = 2;
     $this->mk2->kode = '77';
     $this->mk2->nama = 'Bahasa Indonesia';
     $this->mk2->sks = '2';
     $this->mk2->dosen = "Maulana zahir";

     $this->load->model('matakuliah_model', 'mk3');
     $this->mk3->id = 3;
     $this->mk3->kode = '22';
     $this->mk3->nama = 'PPKN';
     $this->mk3->sks = '3';
     $this->mk3->dosen = "Ameli Ardini";
     
     $list_mk = [$this->mk1, $this->mk2, $this->mk3];
 $data['list_mk']=$list_mk;

 $this->load->view('header');
 $this->load->view('matakuliah/index',$data);
 $this->load->view('footer');
 }
}