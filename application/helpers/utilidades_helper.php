<?php
if(!function_exists("saludo"))
{
    function saludo()
    {
        return "hola #manosenelcódigo";
    }
}
/**
 * validación set Value select
 **/
   if(!function_exists('set_value_select'))
   {
     function set_value_select($result=array(),$post,$campo,$valor)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]) and $_POST[$post]==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }
     }
   } 
   /**
 * validación set Value Producción input
 **/
   if(!function_exists('set_value_input'))
   {
     function set_value_input($result=array(),$post,$campo)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]))
                    {
                         return $_POST[$post];   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo)
                    {
                         return $campo;   
                    }else
                    {
                        return '';
                    }
                }
     }
   }
/**
 *  Detectar el dispositivo para cargar css web o mobile
 * Retorna True si es un disposivo móvil
 */
 if ( ! function_exists('detectar_SO') )
    {
        function detectar_SO()
        {
            $es_movil=FALSE; //Aquí se declara la variable falso o verdadero XD 
              $usuario = $_SERVER['HTTP_USER_AGENT']; //Con esta leemos la info de su navegador 
             $usuarios_moviles = "Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC,EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt,Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10,Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser,UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV"; 
            $navegador_usuario = explode(',',$usuarios_moviles);   
            foreach($navegador_usuario AS $navegador){ 
            if(@preg_match('/'.trim($navegador).'/',$usuario)){     
             $es_movil=TRUE;       
            }  
              }
             
             if($es_movil==TRUE){ 
             
               return true; 
             
            } 
             
            else{   
             
              return false;
             
                } 
        }
    }   
/**
    * formatea fecha
    * */
    if(!function_exists("fecha"))
    {
        function fecha($fecha){
          $dia=substr($fecha,8,2);
          $mes=substr($fecha,5,2);
          $anio=substr($fecha,0,4);
        switch ($mes){
          case '01':
          $mes="Enero";
          break;
          case '02':
          $mes="Febrero";
          break;
          case '03':
          $mes="Marzo";
          break;
          case '04':
          $mes="Abril";
          break;
          case '05':
          $mes="Mayo";
          break;
          case '06':
          $mes="Junio";
          break;
          case '07':
          $mes="Julio";
          break;
          case '08':
          $mes="Agosto";
          break;
          case '09':
          $mes="Septiembre";
          break;
          case '10':
          $mes="Octubre";
          break;
          case '11':
          $mes="Noviembre";
          break;
          case '12':
          $mes="Diciembre";
          break;
        }
        $fecha=$dia." de ".$mes." de ".$anio;
        return $fecha; 
        }
    }
    /**
     * calcular edad desde fecha de nacimiento
     * */
     if(!function_exists("calculaEdad"))
     {
        function calculaEdad($fecha)
        {
            //fecha actual
 
                $dia=date("j");
                $mes=date("n");
                $ano=date("Y");
                 
                //fecha de nacimiento
                  $dianaz=substr($fecha,8,2);
                  $mesnaz=substr($fecha,5,2);
                  $anonaz=substr($fecha,0,4);
              
                 
                //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
                 
                if (($mesnaz == $mes) && ($dianaz > $dia)) {
                $ano=($ano-1); }
                 
                //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
                 
                if ($mesnaz > $mes) {
                $ano=($ano-1);}
                 
                //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
                 
                $edad=($ano-$anonaz);
                 
                return $edad;
        }
     }
 
 
