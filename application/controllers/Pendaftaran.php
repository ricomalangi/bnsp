<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_pendaftaran');
  }
  public function index()
  {
    $data['skema'] = $this->db->get('skema')->result();
    $data['provinces'] = $this->db->get('indonesia_provinces')->result();
    //echo '<pre>';print_r($skema);echo '</pre>';die();
    $this->load->view('layout_pendaftaran/header');
    $this->load->view('pendaftaran/index', $data);
    $this->load->view('layout_pendaftaran/footer');
  }
  public function getCities()
  {
    $id = $this->input->post('id');
    $data = $this->db->where('province_code', $id)->get('indonesia_cities')->result();
    echo json_encode($data);
  }
  public function getDistricts()
  {
    $id = $this->input->post('id');
    $data = $this->db->where('city_code', $id)->get('indonesia_districts')->result();
    echo json_encode($data);
  }
  public function getVillages()
  {
    $id = $this->input->post('id');
    $data = $this->db->where('district_code', $id)->get('indonesia_villages')->result();
    echo json_encode($data);
  }
  public function index1()
  {
    $data['skema'] = $this->db->get('skema')->result();
    //echo '<pre>';print_r($skema);echo '</pre>';die();
    $this->load->view('layout_pendaftaran/header');
    $this->load->view('pendaftaran/index_bck', $data);
    $this->load->view('layout_pendaftaran/footer');
  }
}
