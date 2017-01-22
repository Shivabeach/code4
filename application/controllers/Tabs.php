<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function relate()
	{
		$tmpl = array (
	      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="50%"',
	      'cell_start'     => '<td class="small centered">',
	      'cell_end'       => '</td>',
	      'cell_alt_start' => '<td class="small centered">',
	      'table_close'    => '</table>'
	    );
		$this->db->select('relationship');
		$this->db->select('COUNT(relationship) AS Total');
		$this->db->WHERE('family', 'VanHorn');
		$this->db->GROUP_BY('relationship');
		$this->db->order_by('Total', 'desc');
	    $query = $this->db->get('primary');
	    $data['van'] = $query->result();

	    $this->db->select('relationship');
		$this->db->select('COUNT(relationship) AS Total');
		$this->db->WHERE('family', 'Bostick');
		$this->db->GROUP_BY('relationship');
		$this->db->order_by('Total', 'desc');
	    $query = $this->db->get('primary');
	    $data['bos'] = $query->result();
	    $this->table->set_template($tmpl);

		$data['title'] = "Stats";
		$this->load->view("pages/header/head", $data);
	    $this->load->view('tabs/main', $data);
	    $this->load->view("pages/footer/footer");
	}

	public function van()
	{
		$tmpl = array (
	      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
	      'cell_start'     => '<td class="small centered">',
	      'cell_end'       => '</td>',
	      'cell_alt_start' => '<td class="small centered">',
	      'table_close'    => '</table>'
	    );
		$this->db->select('relationship');
		$this->db->select('COUNT(relationship) AS Total');
		$this->db->WHERE('family', 'VanHorn');
		$this->db->GROUP_BY('relationship');
		$this->db->order_by('Total', 'desc');
	    $query = $this->db->get('primary');
	    $data['van'] = $query->result();
	    
	    $this->table->set_template($tmpl);
	    $this->load->view('tabs/vancount', $data);

	}

	public function bos()
	{
		$this->db->select('relationship');
		$this->db->select('COUNT(relationship) AS Total');
		$this->db->WHERE('family', 'Bostick');
		$this->db->GROUP_BY('relationship');
		$this->db->order_by('Total', 'desc');
	    $query = $this->db->get('primary');
	    $data['van'] = $query->result();
	    $tmpl = array (
	      'table_open'     => '<table class="pure-table pure-table-bordered pure-table-striped" width="100%"',
	      'cell_start'     => '<td class="small centered">',
	      'cell_end'       => '</td>',
	      'cell_alt_start' => '<td class="small centered">',
	      'table_close'    => '</table>'
	    );
	    $this->table->set_template($tmpl);
	    $this->load->view('tabs/boscount', $data);
	    
	}

}

/* End of file Tabs.php */
/* Location: ./application/controllers/Tabs.php */
