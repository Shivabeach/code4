<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tracker extends CI_Model {

  function __construct()
{
    parent::__construct();
    $ip = $this->input->ip_address();
}

public function track()
{
  $ip   = $this->input->ip_address();
  $addr = gethostbyaddr($ip);
  $headers  = $this->input->request_headers($xss_clean = TRUE);
  $platform = $this->agent->platform();
  date_default_timezone_set("America/Detroit");
  $datestring = ("Y-m-d H:i:s");
  $date       = time();
  if ($this->agent->is_browser())
    {
            $agent = $this->agent->browser().' '.$this->agent->version();
    }
    elseif ($this->agent->is_robot())
    {
            $agent = $this->agent->robot();
    }
    elseif ($this->agent->is_mobile())
    {
            $agent = $this->agent->mobile();
    }
    else
    {
            $agent = 'Unidentified User Agent';
    }
    $query = $this->db->select(ip)->get('visit');
    if ($query->num_rows() == 0)
    {
      $visits = 1;
      $attr = [
        'ip'       => $ip.
        'headers'  => $headers,
        'platform' => $platform,
        'date'     => $date,
        'agent'    => $agent,
        'visits'   => $visits,
        'addr'     => $addr
      ];
      $this->db->insert('visit', $attr);
    }else {
      $visits = 'visits' + 1;
      $attr1 = [
        'date'   => $date,
        'visits' => $visits,
        'addr'   => $addr
      ];
      $this->db->where('ip', $ip)->update('visit', $attr1);
    }
  }





}/* End of file ${TM_FILENAME:${1/(.+)/lTracker.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Tracker/:application/models/${1/(.+)/lTracker.php/}} */
