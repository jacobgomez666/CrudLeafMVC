<?php view('header'); ?>

 
 <!-- Card de Boostrat -->
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="/contactos/crear" role="button">Agregar Contacto</a>

    </div>
    <div class="card-body">
       <!-- Tabla que muestra los coctactos de la Base de datos -->
 <div class="table-responsive-sm">
    <table class="table">
        <thead>

        
            <tr> 
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRIMER APELLIDO</th>
                <th scope="col">SEGUNDO APELLIDO </th>
                <th scope="col">CORREO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
                    <!-- fOR EACH PARA RECORRER la tabla tbl_usuarios -->
                    <?php foreach ($contactos as $contacto) : ?>

            <tr >
                <td> <?php echo $contacto['id']?></td>
                <td><?php echo $contacto['nombre']?></td>
                <td><?php echo $contacto['primerapellido']?></td>
                <td><?php echo $contacto['segundoapellido']?></td>
                <td><?php echo $contacto['correo']?></td>
                <td class="button">

                    <a name="" id="" class="btn btn-info" href="/contactos/editar/<?php echo $contacto['id']?>" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger" href="/contactos/<?php echo $contacto['id']?>" role="button">Borrar</a>
                </td>
            </tr>
            
            <?php endforeach;?>
        </tbody>
    </table>
 </div>


    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

 


  <?php view('footer'); ?>