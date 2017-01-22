<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkmod extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function better_crypt($input, $rounds = 10)
  {
    $crypt_options = array(
      'cost' => $rounds
    );
    return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
  }

  function get_visits()
  {
    $this->db->select('ip, agent, visits, date, addr, country, region,page');
    $this->db->limit(20);
    $this->db->order_by('date', 'desc');
    $query = $this->db->get('visit');
    return $query->result();
  }

  function color($value)
  {
    if ($value != "#008080") {
        return false;
    }
  }

} //end of file
