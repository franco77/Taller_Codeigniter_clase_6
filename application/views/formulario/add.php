<div class="container">
    <div class="panel-primary">
        <div class="panel-heading">Formulario</div>
        <div class="panel-body">
            <?php echo form_open(null,array("class"=>"form-horizontal","name"=>"form"));?>
                
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
                
                <h1>Ingresa tus datos</h1>
                <p>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo set_value_input(array(),'nombre','nombre')?>" />
                </p>
                <p>
                    <label for="correo">E-Mail:</label>
                    <input type="text" name="correo" class="form-control" value="<?php echo set_value_input(array(),'correo','correo')?>" />
                </p>
                
                <p>
                    <label for="correo">RUT:</label>
                    <input type="text" name="rut" class="form-control" value="<?php echo set_value_input(array(),'rut','rut')?>" />
                </p>
                
                <p>
                    <label for="nombre">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="<?php echo set_value_input(array(),'telefono','telefono')?>" />
                </p>
                <hr />
                <input type="submit" value="Enviar" class="btn btn-default" />
            <?php echo form_close();?>
        </div>
        
    </div>
</div>