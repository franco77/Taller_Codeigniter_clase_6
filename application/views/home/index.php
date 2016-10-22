<h1>Hola mundo desde Codeigniter 3</h1>

<img src="<?php echo base_url();?>public/images/logo.png" />
<hr />
<?php echo saludo();?>
<hr />
la fecha de hoy es : <?php echo fecha("2016-09-20");?>
<hr />
Tu edad es  : <?php echo calculaEdad("1980-05-24");?>
<hr />
<?php 
if(detectar_SO()==false)
{
    echo "es un PC";
}else
{
    echo "es un movil";
}
?>