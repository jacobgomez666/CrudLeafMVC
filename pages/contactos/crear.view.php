<?php view('header');?>

Formulario para ingresar datos a la base de datos

<div class="card">
    <div class="card-header">
        Contactos
    </div>
    <div class="card-body">

<!-- formulario -->
<form action="/contactos" method="post">  
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
</div>

<div class="mb-3">
  <label for="primerapellido" class="form-label">Primer apellido</label>
  <input type="text"
    class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer Apellido">
</div>

<div class="mb-3">
  <label for="segundoapellido" class="form-label">Segundo Apellido</label>
  <input type="text"
    class="form-control" name="segundoapellido" id="segundospellido" aria-describedby="helpId" placeholder="Segundo Apellido">
</div>

<div class="mb-3">
  <label for="correo" class="form-label">Correo</label>
  <input type="text"
    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo">
</div>

<!-- Botones -->
<button type="submit" class="btn btn-primary">Guardar</button>
<a class="btn btn-primary" href="/" role="button">Cancelar</a>
</form>
        
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php view('footer');?>