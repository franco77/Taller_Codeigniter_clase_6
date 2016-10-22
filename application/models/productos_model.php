<?php
class productos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    //métodos de consulta a la base de datos
    //los que van a utilizar el
    //active record
    
    public function getTodos()
    {
        $query=$this->db
                ->select("id,nombre,precio,stock,fecha")
                ->from("productos")
                ->order_by("id","desc")
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->result();            
    }
    public function getTodosPorId($id)
    {
        $query=$this->db
                ->select("id,nombre,precio,stock,fecha")
                ->from("productos")
                ->where(array("id"=>$id))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }
    public function insertar($data=array())
    {
        $this->db->insert('productos',$data);
        return $this->db->insert_id();
    }
    public function update($data=array(),$id)
    {
        $this->db->where('id',$id);
        $this->db->update('productos',$data);
    }
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('productos');
    }
}

