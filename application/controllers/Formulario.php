<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
	//localhost/home/index
    //localhost/home/add
    //localhost/home/edit/1
    //localhost/home/search
    //localhost/home/delete/1
    
	public function add()
	{
		//zona de procesamiento del formulario
        if($this->input->post())
        {
            if($this->form_validation->run('add_formulario'))
            {
                //entro acá y proceso el formulario
                echo $this->input->post("nombre");
                echo "<br />";
                echo $this->input->post("correo");
                echo "<br />";
                echo $this->input->post("rut");
                echo "<br />";
                echo $this->input->post("telefono");
                echo "<br />";
                exit;
            }
        }
        
        //zona de visualización del formulario
        $this->layout->view("add");
	}
    
}
