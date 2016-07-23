<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('form_validation');
  }

  function enterPosts()
  {
    $data = [
      'title' => htmlspecialchars(trim($this->input->post('title'))),
      'content' => strip_tags($this->input->post('content','<strong><a><span>'),
      'date' => htmlspecialchars(trim($this->input->post('date'))),
      'parent' => htmlspecialchars(trim($this->input->post('parent'))),
      'status' => htmlspecialchars(trim($this->input->post('status'))),
    ];
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('content', 'content', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

public function maint()
{
    //$this->is_logged_in();
    $data = array();
    if ($query = $this->model_form->get_record())
    {
        $data['records'] = $query;
    }
    $tmpl = array ('table_open' =>
      '<table cellpadding="5" cellspacing="5" class="journ" width="95%">', 'row_alt_start' =>
      '<tr class="alt">', 'table_close' => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_caption("<h3>Post Updates and Other Maintenance</h3>");
    $data['title'] = 'maintenance';
    $this->load->view('posts/post_maint', $data);
    }
//fill the update form
public function fill_form()
{
  //$this->is_logged_in();
  $data = array();
  if ($query = $this->model_form->fill_form())
  {
      $data['records'] = $query;
  }
  $data['title'] = 'form update';
  $this->load->view('posts/post_update', $data);
}//end of file
