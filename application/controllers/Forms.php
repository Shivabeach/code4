<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }
  public function is_logged_in()
  {
      $is_logged_in = $this->session->userdata('is_logged_in');
      if (!isset($is_logged_in) || $is_logged_in != true)
      {
        redirect("Checkin");
      }
  }
  public function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = html_escape($data);
  return $data;
  }

  public function enterPosts()
  {
    $this->is_logged_in();
    $data = [
      'title'   => html_escape(trim($this->input->post('title'))),
      'content' => trim($this->input->post('content')),
      'date'    => html_escape(trim($this->input->post('date'))),
      'parent'  => html_escape(trim($this->input->post('parent'))),
      'status'  => html_escape(trim($this->input->post('status'))),
      'slug'    => trim($this->input->post('slug'))
    ];

    $this->form_validation->set_rules('title', 'Title', 'required|max_length[50]');
    $this->form_validation->set_rules('content', 'content', 'required|min_length[50]');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('slug', 'Slug', 'required|trim|min_length[30]');
    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

  public function upPosts()//update posts
  {
    $this->is_logged_in();
    $data = [
      'id'        => html_escape($this->input->post('id')),
      'title'     => html_escape($this->input->post('title')),
      'content'   => trim($this->input->post('content')),
      'status'    => html_escape(trim($this->input->post('status'))),
      'last_date' => html_escape(trim($this->input->post('last_date'))),
      'parent'    => html_escape(trim($this->input->post('parent'))),
      'slug'      => trim($this->input->post('slug'))
    ];

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('content', 'content', 'required|trim|min_length[25]');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('last_date', 'Last Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');
    $this->form_validation->set_rules('slug', 'Slug', 'required|trim|min_length[25]');

    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
      $id = html_escape($this->input->post('id'));
      $this->db->where('id', $id);
			$this->db->update('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

public function maint()
{
    $this->is_logged_in();
    $data = [];
    if ($query = $this->Model_form->get_record())
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
  $this->is_logged_in();
  $id = $this->uri->segment(3);
  $this->db->where('id', $id);
  $query = $this->db->get('posts');

  if ($query->result())
  {
      $data1['records'] = $query->result();
  }
  $data["title"] = "Post update";
  $data['head']  = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data1);
  $this->load->view('pages/footer/footer');
}//end of file
/**
 * Adding cities to the database to show where we are from
 * @method cities
 * @return [insert] [description]
 */
  public function cities()
  {
    $data = array(
    'borncity'  => html_escape($this->input->post('borncity')),
    'state'     => html_escape($this->input->post('state')),
    'country'   => html_escape($this->input->post('country')),
    'family'    => html_escape($this->input->post('family')),
    'year'      => html_escape($this->input->post('year')),
    'state1'    => html_escape($this->input->post('state1')),
    'deathcity' => html_escape($this->input->post('deathcity'))
    );

    $this->form_validation->set_rules('borncity', 'city of birth', 'required');
    $this->form_validation->set_rules('state', 'state', 'requireded');
    $this->form_validation->set_rules('country', 'country', 'required');
    $this->form_validation->set_rules('family', 'family', 'required');
    $this->form_validation->set_rules('year', 'year', 'required|numeric');
    $this->form_validation->set_rules('state1', 'Born State', 'required');
    $this->form_validation->set_rules('deathcity', 'Death City');

    if( $this->form_validation->run() == FALSE) {
      echo validation_errors();
    }else
    {
      $this->db->insert('cities', $data);
      echo "grand shit";
    }
  } //end of cities

  public function abuseip()
  {
    $ip = html_escape($this->input->post('ip'));
    $key = "gARQewrh1S8OwT227PNask5UpTMpoQSn9Ete4Ge3";
    $days = 30;
    $query = "https://www.abuseipdb.com/check/$ip/json?key=$key&days=$days";
    if ( $query){
      return $query;
    }
  }


} //end of class
