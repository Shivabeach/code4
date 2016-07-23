<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['title'] = "Home Page";
    $parent = "main";

    $query = $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc")->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/prime", $data);
    $this->load->view("pages/footer/footer");
  }
  public function van()
  {
    $data['title'] = "VanHorn Page";
    $data['head'] = "A VanHorn History";
    $parent = "VanHorn";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/van");
    $this->load->view("pages/footer/footer");
  }
  public function bos()
  {
    $data['title'] = "Bostick Page";
    $data['head'] = "Bosticks";
    $parent = "Bostick";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/bos");
    $this->load->view("pages/footer/footer");
  }
  function entry()
  {
    $data['title'] = "Post Entry";
    $data['head'] = "Post Entry";
    $this->load->view("pages/header/head", $data);
    $this->load->view("admin/postEntry");
    $this->load->view("pages/footer/footer");
  }
}
