<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
	//localhost/home/nosotros
    
	public function index()
	{
		$this->layout->view("index");
	}
    public function nosotros($id=null)
	{
		$texto="mi muñeca me habló";
        $arreglo=array("algo","nada","tal vez","quizá");
        $this->layout->view("nosotros",compact("id","texto","arreglo"));
	}
    public function contacto()
	{
		$this->layout->setLayout("template");
        $this->layout->view("contacto");
	}
}
