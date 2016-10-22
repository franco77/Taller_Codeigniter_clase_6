<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rutas extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
	//localhost/home/nosotros
    
	public function sobre_nosotros()
	{
		$this->layout->view("sobre_nosotros");
	}
    public function preguntas_frecuentes()
	{
		$this->layout->view("preguntas_frecuentes");
	}
    public function con_parametro($id=null)
	{
		//if(!$id){show_404();}
        $this->layout->view("con_parametro");
	}
    
}
