<div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>productos">Listado de productos</a></li>
      <li class="active">Agregar producto</li>
    </ol>
    <div class="panel panel-primary">
        <div class="panel-heading">Agregar producto</div>
        <div class="panel-body">
            
            <?php echo form_open(null,array("name"=>"form"));?>
            <?php
                //acá visualizamos los mensajes de error
                $errors=validation_errors('<li>','</li>');
                if($errors!="")
                {
                    ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php echo $errors;?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo set_value_input(array(),'nombre','nombre')?>" class="form-control" autofocus="true" />
            </p>
            
             <p>
                <label for="precio">Precio:</label>
                <input type="text" name="precio" value="<?php echo set_value_input(array(),'precio','precio')?>" class="form-control" />
            </p>
            
            <p>
                <label for="precio">Stock:</label>
                <input type="text" name="stock" value="<?php echo set_value_input(array(),'stock','stock')?>" class="form-control" />
            </p>
            
            <hr />
            <input type="submit" value="Enviar" class="btn btn-default" />
            <?php echo form_close();?> 
            
        </div>
    </div>
</div>

