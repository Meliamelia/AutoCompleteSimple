<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmapping extends CI_Controller {
	function Cmapping(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Mmapping', '', TRUE);	 
	}
	
	function index()
	{
		$this->InstanceName();	
	}
	
	function InstanceName(){
		$this->load->model('Mmapping');
		$data['InstanceData'] = $this->Mmapping->GetInstance();
		$this->load->view('Vmapping',$data);
	}
 
	function TermData(){
		$this->load->model('Mmapping');
		if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->Mmapping->getTermData($q);
		}
	}
}

