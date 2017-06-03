<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    $this->load->library('pagination');
    $this->load->library('session');
    $this->load->model('Test');
  }
/**
 * [index description]
 * @method index
 * @return return database query [description]
 */
  public function index()
  {
    $config['base_url']         = base_url() . '/pages/index/';
    $config['total_rows']       = $this->db->count_all_results('posts');
    $config['per_page']         = 4;
    $config['num_links']        = 4;
    $config['uri_segment']      = 3;
    $config['full_tag_open']    = "<div class='pagination'>";
    $config['full_tag_close']   = "</div>";
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';

    $this->pagination->initialize($config);
    $parent = "main";
    $this->db->select("title, content, date, last_date, slug")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get('posts', $config['per_page'],$this->uri->segment(3));
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $data['title']        = "VanHorn Family";
    $data['main_content'] = 'pages/prime';
    $this->load->view('pages/includes/template', $data);
  }

  public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true)
        {
          redirect("Checkin");
            //$this->load->view('login_form');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        redirect('Pages', 'refresh');
    }
  public function van()
  {

    $config['base_url']       = base_url() . 'pages/van';
    $config['total_rows']     = $this->db->count_all_results('posts');
    $config['per_page']       = 4;
    $config['num_links']      = 4;
    $config['uri_segment']    = 3;
    $config['full_tag_open']  = "<div class='pagination'>";
    $config['full_tag_close'] = "</div>";
    $config['first_link']     = "First";
    $config['last_link']      = "Last";

    $this->pagination->initialize($config);

    $parent        = "VanHorn";
    $this->db->select("title, content, date, last_date, slug")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get('posts', $config['per_page'],$this->uri->segment(3));
    if($query->result()){
      $data["mainContent"]    = $query->result();
    }
    $data['title'] = "VanHorn Page";
    $data['head']  = "VanHorn's";
    $this->load->view("pages/header/head", $data);
    $this->load->view("pages/van", $data);
    $this->load->view("pages/footer/footer");

  }
  public function bos()
  {
    $config['base_url']       = base_url() . 'Pages/bos';
    $config['total_rows']     = $this->db->count_all_results('posts');
    $config['per_page']       = 4;
    $config['num_links']      = 10;
    $config['uri_segment']    = 3;
    $config['full_tag_open']  = "<div class='pagination'>";
    $config['full_tag_close'] = "</div>";
    $config['first_link']     = "First";
    $config['last_link']      = "Last";

    $this->pagination->initialize($config);
    $data['title'] = "Bostick Page";
    $data['head']  = "Bosticks";
    $parent = "Bostick";
    $this->db->select("title, content, date, last_date, slug")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get('posts', $config['per_page'],$this->uri->segment(3));
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("pages/bos", $data);
    $this->load->view("pages/footer/footer");
  }

  function entry()
  {
    $this->is_logged_in();
    $this->db->select("id, title, parent, date, status")->order_by("id", "asc");
    $query = $this->db->get("posts");
    if ($query->result())
    {
      $data['getlist'] = $query->result();
    }
    $tmpl = array (
      'table_open'         => '<table class="m-addin"',
      'heading_cell_start' => '<th class="m-addin--head">',
      'heading_cell_end'   => '</th>',
      'cell_start'         => '<td class="m-addin--data-display">',
      'cell_end'           => '</td>',
      'cell_alt_start'     => '<td class="m-addin--data-display">',
      'table_close'        => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Title','Family', 'Status');
    $this->table->set_caption("Post Updates");
    $data['title'] = "Post Entry";
    $data['head']  = "Post Entry";
    $this->load->view("pages/header/head", $data);
    $this->load->view("admin/postEntry");
    $this->load->view("pages/footer/footer");
  }

  public function sources()
  {
    $data['title'] = "VanHorn Page";
    $data['head']  = "A VanHorn History";
    $parent        = "VanHorn";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("pages/van");
    $this->load->view("pages/footer/footer");
  }

  public function post_up()
  {
    $this->is_logged_in();
    $data["title"] = "Post update";
    $data['head']  = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data);
  $this->load->view('pages/footer/footer');
  }

  public function cities()
  {
      $this->is_logged_in();
      $data['head']  = "Cities entry";
      $data['title'] = 'Cities entry';
      $this->load->view('pages/header/head', $data);
      $this->load->view('admin/cities', $data);
      $this->load->view('pages/footer/footer');
  }

  public function vandna()
  {
      $data['head']  = "Our Male DNA";
      $data['title'] = 'VanHorn DNA';
      $this->load->view('pages/header/head', $data);
      $this->load->view('dna/vandna', $data);
      $this->load->view('pages/footer/footer');
  }

  public function bosdna()
  {
      $data['head']  = "Our Female DNA";
      $data['title'] = 'Bostick / Reed DNA';
      $this->load->view('pages/header/head', $data);
      $this->load->view('dna/bosdna', $data);
      $this->load->view('pages/footer/footer');
  }

  public function style()
  {
    $data['head']         = "Style page";
    $data['title']        = "Style colors";
    $data['main_content'] = 'style/style';
    $this->load->view('pages/includes/template', $data);
  }
  public function army()
  {
    $this->load->view('army');
  }

  public function vanlinage ()
  {
    $data['head']         = "VanHorn Linages";
    $data['title']        = "VanHorn Linages";
    $data['main_content'] = 'linage/vanlinage';
    $this->load->view('pages/includes/template', $data);
  }

  public function boslinage ()
  {
    $data['head']         = "Bostick Linages";
    $data['title']        = "Bostick Linages";
    $data['main_content'] = 'linage/boslinage';
    $this->load->view('pages/includes/template', $data);
  }

  public function map ()
  {
    $data['title'] = "Ancestoral Map";
    $this->load->view("pages/map", $data);
  }

  public function notes ()
  {
    $data['head']         = "Loose Ends";
    $data['title']        = "Family Notes";
    $data['main_content'] = 'pages/notes';
    $this->load->view('pages/includes/template', $data);
  }
  public function relatives()
    {
      $tmpl = array (
        'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
        'cell_start'     => '<td class="small centered">',
        'cell_end'       => '</td>',
        'cell_alt_start' => '<td class="small centered">',
        'table_close'    => '</table>'
      );
      $van = "VanHorn";
      $this->db->select('country');
      $this->db->select('COUNT(country) AS Total');
      $this->db->where('family', $van);
      $this->db->order_by('Total', 'desc');
      $this->db->group_by('country');
      $query = $this->db->get('primary');
      $data['van'] = $query->result();

      $bost = "Bostick";
      $this->db->select('country');
      $this->db->select('COUNT(country) AS Total');
      $this->db->where('family', $bost);
      $this->db->order_by('Total', 'desc');
      $this->db->group_by('country');
      $query = $this->db->get('primary');
      $data['bos'] = $query->result();

      $family = "VanHorn";
      $this->db->select('family');
      $this->db->select('relationship');
      $this->db->select('COUNT(relationship) AS Total');
      $this->db->where("family", $family);
      $this->db->group_by('relationship');
      $this->db->order_by('Total', 'desc');
      $query = $this->db->get('primary');
      $data['vangrand'] = $query->result();

      $family = "Bostick";
      $this->db->select('family');
      $this->db->select('relationship');
      $this->db->select('COUNT(relationship) AS Total');
      $this->db->where("family", $family);
      $this->db->group_by('relationship');
      $this->db->order_by('Total', 'desc');
      $query = $this->db->get('primary');
      $data['bosgrand'] = $query->result();


      $this->table->set_template($tmpl);

      $data['head']         = "Relative Stats";
      $data['title']        = "Relatives";
      $data['main_content'] = 'pages/relatives';
      $this->load->view('pages/includes/template', $data);
    }

    public function family()
    {
      $this->is_logged_in();
      $data['head']  = "Family Entry";
      $data['title'] = 'Family entry';
      $data['main_content'] = 'admin/family';
      $this->load->view('pages/includes/template', $data);
    }

    public function lists()
    {
      $this->is_logged_in();
    $this->db->select("id, title, parent, date, status")->order_by("id", "asc");
    $query = $this->db->get("posts");
    if ($query->result())
    {
      $data['getlist'] = $query->result();
    }
    $tmpl = array (
      'table_open'         => '<table class="m-addin"',
      'heading_cell_start' => '<th class="m-addin--head">',
      'heading_cell_end'   => '</th>',
      'cell_start'         => '<td class="m-addin--data-display">',
      'cell_end'           => '</td>',
      'cell_alt_start'     => '<td class="m-addin--data-display">',
      'table_close'        => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Title','Date','Family', 'Status');
    $data['title'] = "Post Listing";
    $data['head']  = "Post listing";
    $this->load->view("pages/header/head", $data);
    $this->load->view("admin/admin2");
    $this->load->view("pages/footer/footer");
    }

    public function reading()
    {
      $data = [];
      $data['head'] = "Reading Sources";
      $data['title'] = "Historical and Data Sources";

      $type1 = "History";
      $type2 = "DNA";
      $this->db->select("family, name, url, type");
      $this->db->where('type', $type1);
      $this->db->order_by("family");
      $query = $this->db->get("sources");
      if ($query->result())
      {
        $data['history'] = $query->result();
      }
      $this->db->select("family, name, url, type");
      $this->db->where('type', $type2);
      $this->db->order_by("family");
      $query = $this->db->get("sources");
      if ($query->result())
      {
        $data['dna'] = $query->result();
      }

      $data['main_content'] = 'pages/sources';
      $this->load->view('pages/includes/template', $data);
    }
    public function read()
    {
      $this->is_logged_in();
      $data['head']         = "Reading Sources Form";
      $data['title']        = "Reading Sources";
      $data['main_content'] = "admin/reading_form";
      $this->load->view('pages/includes/template', $data);
    }

    public function buried()
    {
      $this->is_logged_in();
      $data['head']         = "Cemetary Record";
      $data['title']        = "Cemetary Record";
      $data['main_content'] = "admin/cemetary";
      $this->load->view('pages/includes/template', $data);
    }

    public function vtime() {
      $data['head'] = "VanHorn Timeline";
      $data['title'] = "VanHorn Timeline";
      $data['main_content'] = "pages/vantimeline";
      $this->load->view('pages/includes/template', $data);
    }

    public function btime() {
      $data['head'] = "Bostick Timeline";
      $data['title'] = "Bostick Timeline";
      $data['main_content'] = "pages/bostimeline";
      $this->load->view('pages/includes/template', $data);
    }

} //end of file
/* End of file ${TM_FILENAME:${1/(.+)/lPages.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Sources/:application/controllers/${1/(.+)/lPages.php/}} */
