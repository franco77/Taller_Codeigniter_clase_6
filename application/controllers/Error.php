<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
	//localhost/home/nosotros
    
	public function error_404()
	{
		$this->layout->view("error_404");
	}
    
}
