<?php
class principal extends CI_Controller
{
	function __construnct()
	{
		parent::__construnct();
	}
	function index()
	{
	   $this->load->view("principal/index");
	}
	
}
