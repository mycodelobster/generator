<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NAMETOP extends CI_Controller {

	public function index()
	{
		$this->listing();
	}

	public function listing()
	{
		$this->load->view('NAMEBOTTOM/listing');
	}

	public function detail()
	{
		$this->load->view('NAMEBOTTOM/detail');
	}

	public function update()
	{
		$this->load->view('NAMEBOTTOM/update');
	}

	public function delete()
	{

	}

}

/* End of file NAMEBOTTOM.php */
/* Location: ./application/controllers/NAMEBOTTOM.php */
