<?php view('header');?>

Formulario para editar datos a la base de datos

<div class="card">
    <div class="card-header">
        Contactos
    </div>
    <div class="card-body">

<!-- formulario -->
<!-- Obtenemos el id del registro a editar, de lo contrario -->
<!-- Al darle editar y guardar los cambios agregra otro registro-->
<form action="/contactos/<?php echo $contacto['id'];?>" method="post">  
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <!-- El value muestra texto dentro de los inputs,  -->
  <!-- En este caso mostramos con php los nombres a editar. DInamico -->
  <input type="text"
  
    class="form-control" value="<?php echo $contacto['nombre'];?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
</div>

<div class="mb-3">
  <label for="primerapellido" class="form-label">Primer apellido</label>
  <input type="text"
    class="form-control" value="<?php echo $contacto['primerapellido'];?>" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer Apellido">
</div>

<div class="mb-3">
  <label for="segundoapellido" class="form-label">Segundo Apellido</label>
  <input type="text"
    class="form-control" value="<?php echo $contacto['segundoapellido'];?>" name="segundoapellido" id="segundospellido" aria-describedby="helpId" placeholder="Segundo Apellido">
</div>

<div class="mb-3">
  <label for="correo" class="form-label">Correo</label>
  <input type="text"
    class="form-control" value="<?php echo $contacto['correo'];?>" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo">
</div>

<!-- Botones -->
<button type="submit" class="btn btn-success">Actualizar</button>
<a class="btn btn-primary" href="/" role="button">Cancelar</a>
</form>
        
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php view('footer');?>