<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Includes extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function vancount()
  {
    $this->db->select('State, Total');
    $this->db->order_by('id', 'asc');
    $query = $this->db->get('vanc');
    $data['van'] = $query->result();
    $tmpl = array (
      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
      'cell_start'     => '<td class="small centered">',
      'cell_end'       => '</td>',
      'cell_alt_start' => '<td class="small centered">',
      'table_close'    => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->load->view('includes/vancount', $data);
  }

  function boscount()
  {
    $this->db->select('State, Total');
    $this->db->order_by('id', 'asc');
    $query = $this->db->get('bosc');
    $data['bos'] = $query->result();
    $tmpl = array (
      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
      'cell_start'     => '<td class="small centered">',
      'cell_end'       => '</td>',
      'cell_alt_start' => '<td class="small centered">',
      'table_close'    => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('State', 'Total' );
    $this->load->view('includes/boscount', $data);

  }

}
