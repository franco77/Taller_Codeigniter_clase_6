<div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>productos">Listado de productos</a></li>
      <li class="active">Editar producto</li>
    </ol>
    <div class="panel panel-primary">
        <div class="panel-heading">Editar producto</div>
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
                <input type="text" name="nombre" value="<?php echo set_value_input($datos,'nombre',$datos->nombre)?>" class="form-control" autofocus="true" />
            </p>
            
             <p>
                <label for="precio">Precio:</label>
                <input type="text" name="precio" value="<?php echo set_value_input($datos,'precio',$datos->precio)?>" class="form-control" />
            </p>
            
            <p>
                <label for="precio">Stock:</label>
                <input type="text" name="stock" value="<?php echo set_value_input($datos,'stock',$datos->stock)?>" class="form-control" />
            </p>
            
            <hr />
            <input type="hidden" name="id" value="<?php echo $id?>" />
            <input type="submit" value="Enviar" class="btn btn-default" />
            <?php echo form_close();?> 
            
        </div>
    </div>
</div>

