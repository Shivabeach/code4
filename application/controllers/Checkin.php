<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("checkmod");
  }

  function index()
  {
    $data['head'] = "Login to admin";
    $data['title'] = 'Login to Admin';
    $data['main_content'] = 'pages/login/log';
    $this->load->view('pages/includes/template', $data);
  }
  public function process()
  {
    $data = array(
      'name'      => html_escape($this->input->post('name')),
      'password'  => html_escape($this->input->post('password')),
      'password2' => html_escape($this->input->post('password2')),
      'email'     => html_escape($this->input->post('email')),
      );

      $this->form_validation->set_rules('name', 'name', 'required|inique[check.name]');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('password2', 'password2', 'required|matches[password2]');
      $this->form_validation->set_rules('email', 'email', 'required|valid_email|unique[check.email]');

      if( $this->form_validation->run() == FALSE) {
  			echo validation_errors();
  		}else
  		{
        $options = [
           'cost' => 10
          ];
        $data1 = [
          'name'  => html_escape($this->input->post('name')),
          'pass'  => password_hash($this->input->post('pass'), PASSWORD_BCRYPT, $options),
          'email' => html_escape($this->input->post('email'))
        ];
  			$this->db->insert('check', $data1);
  			echo "grand shit";
  		}
    }
    /**
     * determines if you are logged in
     * @return boolean [description]
     */
    public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true)
        {
          redirect("Checkin");
        }
    }

    /**
     * logs you out and ends the session
     * @return [type] [description]
     */
    public function logout()
    {
      $items = ['name', 'is_logged_in']; //was email
        $this->session->unset_userdata($items);
        $this->session->sess_destroy();
        redirect('Pages', 'refresh');
    }
    /**
     * Log in script
     * @return [type] [description]
     */
    public function legal()
    {
      $data = [
        'name'  => trim(html_escape($this->input->post('name'))),
        'email' => trim(html_escape($this->input->post('email'))),
        'pass'  => trim(html_escape($this->input->post('pass'))),
        'milky' => trim(html_escape($this->input->post('milky')))
      ];
      $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[5]');
      $this->form_validation->set_rules('pass', 'Password', 'required|min_length[24]|max_length[26]');
      $this->form_validation->set_rules('email', 'email', 'required|valid_email');
      $this->form_validation->set_rules('milky', 'Missing something?', 'required');

      if( $this->form_validation->run() == FALSE) {
        //do this if you are not using ajax
        $data['head']  = "Login to admin";
        $data['title'] = 'Login to Admin';
        $this->load->view('pages/header/head', $data);
        $this->load->view('pages/login/log', $data);
        $this->load->view('pages/footer/footer');
  		}else {
        $milky = trim(html_escape($this->input->post('milky')));
        if ($milky != "#008080") {
          echo "You sure messed that one up";
          die();
        }
  		  $name  = html_escape($this->input->post('name'));
        $email = html_escape($this->input->post('email'));
        $pass1 = html_escape($this->input->post('pass'));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $limit  = 1;
      $offset = 0;
      $query = $this->db->get_where('check',
      array(
        'email'   => $email,
        'name'    => $name,
        'approve' => 'yes'
      ),$limit, $offset);
      //$query = $this->db->get('check');
      if ($query->num_rows() != 1){
        $data['head']  = "Login to admin";
        $data['title'] = 'Login to Admin';
        $this->load->view('pages/header/head', $data);
        $this->load->view('pages/login/log', $data);
        $this->load->view('pages/footer/footer');
      }else
      {
        $row    = $query->row();
        $stored = $row->pass;
        if (password_verify($pass1, $stored))
        {
          $data = array(
            'name'         => $row->name,
            'is_logged_in' => TRUE
          );
          $this->session->set_userdata($data);
          redirect("checkin/admin");
        }else {
          $data['head']  = "Login to admin";
          $data['title'] = 'Login to Admin';
          $this->load->view('pages/header/head', $data);
          $this->load->view('pages/login/log', $data);
          $this->load->view('pages/footer/footer');
        }
      }
    }
  }
/*
This feeds the admin area page
 */
  public function admin()
  {
    $this->load->model("checkmod");
    $this->is_logged_in();
    If ($query = $this->checkmod->get_visits())
    {
      $data['visitor'] = $query;
    }else {
      echo "No Data";
    }
    $tmpl = array (
      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
      'cell_start'     => '<td class="small centered">',
      'cell_end'       => '</td>',
      'cell_alt_start' => '<td class="small centered">',
      'table_close'    => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('Date', 'IP', 'Visits','Agent', 'Host', 'Page', 'Country' );
    $this->table->set_caption("<h3>Site Visits</h3>");
    $data['head']  = "Admin";
    $data['title'] = 'Admin Page';
    $this->load->view('pages/header/head', $data);
    $this->load->view('admin/admin', $data);
    $this->load->view('pages/footer/footer');
  }



} //end of controller
