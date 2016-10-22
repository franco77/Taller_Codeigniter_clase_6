<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">Listado de productos</div>
        <div class="panel-body">
            <?php
            if($this->session->flashdata('mensaje')!='')
            {
               ?>
               <div class="alert alert-<?php echo $this->session->flashdata('css')?>"><?php echo $this->session->flashdata('mensaje')?></div>
               <?php 
            }
            ?>
        
            <p>
                <a href="<?php echo base_url()?>productos/add" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
            </p>
            <table class="table table-bordered table-sprited table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($datos as $dato)
                        {
                            ?>
                            <tr>
                                <td><?php echo $dato->id?></td>
                                <td><?php echo $dato->nombre?></td>
                                <td><?php echo number_format($dato->precio,0,'','.')?></td>
                                <td><?php echo $dato->stock?></td>
                                <td><?php echo fecha($dato->fecha)?></td>
                                <td>
                                    <a href="<?php echo base_url()?>productos/edit/<?php echo $dato->id?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>productos/delete/<?php echo $dato->id?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

