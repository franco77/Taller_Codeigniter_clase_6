<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        /**
         * add_formulario
         * */
        'add_formulario'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[5]'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|valid_email'),
            array('field' => 'rut','label' => 'RUT','rules' => 'required|is_string|trim|esRut'),
            
        ), 
        
        
        /**
         * add_producto
         * */
        'add_producto'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim'),
            array('field' => 'precio','label' => 'Precio','rules' => 'required|trim|integer'),
            array('field' => 'stock','label' => 'Stock','rules' => 'required|trim|integer'),
            
        ), 
   
   //éste es el final      
);
