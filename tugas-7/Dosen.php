<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Dosen extends CI_Controller {
 public function index()
 {
 $this->load->model('Dosen_model','dsn1');
 $this->dsn1->nama='Muhammad';
 $this->dsn1->nidn='0110222';
 $this->dsn1->pendidikan='M.KOM';
 $this->load->model('Dosen_model','dsn2');
 $this->dsn2->nama='Pandan Wangi';
 $this->dsn2->nidn='022311';
 $this->dsn2->pendidikan='M.pd';

 $list_dsn = [$this->dsn1, $this->dsn2];
 $data['list_dsn']=$list_dsn;

 $this->load->view('header');
 $this->load->view('dosen/index',$data);
 $this->load->view('footer');
 }
}