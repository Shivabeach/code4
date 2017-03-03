<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Model {

  var $auto_add_visit = TRUE;
  function __construct()
    {
        parent::__construct();
        $page = $_SERVER["REQUEST_URI"];
        $ip = $this->input->ip_address();
       // if($this->auto_add_visit)
       //{
         //  $this->add_visit();
     //  }
    }


    /**
     * Adds new visits to the site
     * @method add_visit
     */
    function add_visit()
    {
        $date     = time();
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
                  $agent = 'Unidentified';
          }
        $ip = $this->input->ip_address();
        $addr = gethostbyaddr($ip);
        $platform = $this->agent->platform();
        $is_mobile	= $this->agent->is_mobile();
        $is_robot		= $this->agent->is_robot();
        $this->db->where('ip', $ip);
        $query = $this->db->get('visit');
        if ($query->num_rows() == 0)
        {
          $ip = $this->input->ip_address();
          $visits = 1;
          $page = $_SERVER["REQUEST_URI"];
          $this->db->set('page', $page);
          $this->db->set('ip', $ip);
          $this->db->set('platform', $platform);
          $this->db->set('date', $date);
          $this->db->set('agent', $agent);
          $this->db->set('visits', $visits);
          $this->db->set('city', $this->city());
          $this->db->set('region', $this->region());
          $this->db->set('country', $this->country());
          $this->db->set('is_robot', $is_robot);
          $this->db->set('is_mobile', $is_mobile);
          $this->db->set('addr', $addr);
          $this->db->insert('visit');
        }elseif($query->num_rows() >= 1)
        {
          $page = $_SERVER["REQUEST_URI"];
          $data = [
            'date'      => $date,
            'platform'  => $platform,
            'agent'     => $agent,
            'is_robot'  => $is_robot,
            'is_mobile' => $is_mobile,
            'page'      => $page,
            'addr'      => $addr
          ];
          $this->db->set('visits', 'visits+1', FALSE);
          $this->db->where('ip', $ip);
          $this->db->limit(1);
          $this->db->update('visit', $data);
        }

    }//end of index
    public function city()
    {
      $ip = $this->input->ip_address();
       $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
       $city = $geo["geoplugin_city"];
      return $city;
    }

    public function region()
    {
      $ip = $this->input->ip_address();
       $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
       $region = $geo["geoplugin_regionName"];
       return $region;
    }
    public function country($country = null)
    {
      $ip = $this->input->ip_address();
       $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
      $country = $geo["geoplugin_countryName"];
      return $country;
    }

}
/* End of file ${TM_FILENAME:${1/(.+)/l.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/models/${1/(.+)/l.php/}} */
