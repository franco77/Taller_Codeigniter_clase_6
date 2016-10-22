<?php
class MY_Form_validation extends CI_Form_validation
{
	public $_error_array			= array();
	public $_field_data;



public function valida_url($url){

    if(filter_var($url, FILTER_VALIDATE_URL))

    {

        return true;

    }else

    {

        return false;

    }

}
/**
 * validar que en un select haya sido elegida una opción
 * */ 
public function validaSelect($valor)
{
    if($valor==0)
    {
        return false;
    }else
    {
        return true;
    }
}

/**
 * validar que en un select haya sido elegida una opción
 * */ 
public function validaSelectEspecial($valor)
{
    if($valor==0 or $valor==1 )
    {
        return true;
    }else
    {
        return false;
    }
}
 /**
     * validar RUT
     * */
     public function esRut($r = false){
    if((!$r) or (is_array($r)))
        return false; /* Hace falta el rut */
 
    if(!$r = preg_replace('|[^0-9kK]|i', '', $r))
        return false; /* Era código basura */
 
    if(!((strlen($r) == 8) or (strlen($r) == 9)))
        return false; /* La cantidad de carácteres no es válida. */
 
    $v = strtoupper(substr($r, -1));
    if(!$r = substr($r, 0, -1))
        return false;
 
    if(!((int)$r > 0))
        return false; /* No es un valor numérico */
 
    $x = 2; $s = 0;
    for($i = (strlen($r) - 1); $i >= 0; $i--){
        if($x > 7)
            $x = 2;
        $s += ($r[$i] * $x);
        $x++;
    }
    $dv=11-($s % 11);
    if($dv == 10)
        $dv = 'K';
    if($dv == 11)
        $dv = '0';
    if($dv == $v)
        //return number_format($r, 0, '', '.').'-'.$v; /* Formatea el RUT */
        return true;
    return false;
    }
    
}
