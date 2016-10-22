<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }
    
 
	public function index()
	{
		
        $datos=$this->productos_model->getTodos();
        //print_r($datos);exit;
        $this->layout->view("index",compact('datos'));
	}
    public function add()
	{
		if($this->input->post())
        {
            if($this->form_validation->run('add_producto'))
            {
                $data=array
                (
                    'nombre'=>$this->input->post('nombre',true),
                    'precio'=>$this->input->post('precio',true),
                    'stock'=>$this->input->post('stock',true),
                    'fecha'=>date("Y-m-d"),
                );
                $insertar=$this->productos_model->insertar($data);
                //echo $insertar;exit;
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','El registro se ha creado exitosamente');
                redirect(base_url()."productos");
            }
        }
        $this->layout->view("add");
	}
    public function edit($id=null)
    {
        if(!$id){show_404();}
        $datos=$this->productos_model->getTodosPorId($id);
        if(sizeof($datos)==0){show_404();}
        if($this->input->post())
        {
            if($this->form_validation->run('add_producto'))
            {
                $data=array
                (
                    'nombre'=>$this->input->post('nombre',true),
                    'precio'=>$this->input->post('precio',true),
                    'stock'=>$this->input->post('stock',true),
                );
                $this->productos_model->update($data,$this->input->post('id',true));
                 $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','El registro se ha modificado exitosamente');
                redirect(base_url()."productos");
            }
        }
        
        
        $this->layout->view('edit',compact('datos','id'));
    }
    public function delete($id=null)
    {
        if(!$id){show_404();}
        $datos=$this->productos_model->getTodosPorId($id);
        if(sizeof($datos)==0){show_404();}
        $this->productos_model->delete($id);
        $this->session->set_flashdata('css','success');
        $this->session->set_flashdata('mensaje','El registro se ha eliminado exitosamente');
        redirect(base_url()."productos");
    }
}




