<?php
  require_once("header.php");
?>


      <div class="content-wrapper" data-spy="scroll">        
      

        <section class="content">
  		<blockquote class="blockquote text-center">
  			<h1 class="titleClients" style="color:  #a4243b; font-weight: bold;">Clientes</h1>
		</blockquote>

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Nombre del Cliente</label>
      <input type="text" class="form-control" id="" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="">Facturar</label>
      <input type="text" class="form-control" id="" placeholder="Facturar">
    </div>
      <div class="form-group col-md-6">
      <label for="">Domicilio</label>
      <input type="text" class="form-control" id="" placeholder="Domicilio">
    </div>
    <div class="form-group col-md-6">
      <label for="">Colonia</label>
      <input type="text" class="form-control" id="" placeholder="Colonia">
    </div>
       <div class="form-group col-md-6">
      <label for="">Cod. Postal</label>
      <input type="text" class="form-control" id="" placeholder="Cod. Postal">
    </div>
    <div class="form-group col-md-6">
      <label for="">Ciudad</label>
      <input type="text" class="form-control" id="" placeholder="Ciudad">
    </div>
       <div class="form-group col-md-6">
      <label for="">Estado</label>
      <input type="text" class="form-control" id="" placeholder="Estado">
    </div>
    <div class="form-group col-md-6">
      <label for="">Identificación Oficial</label>
      <input type="text" class="form-control" id="" placeholder="Edentificacion Oficial">
    </div>
       <div class="form-group col-md-6">
      <label for="">Telefono Móvil</label>
      <input type="text" class="form-control" id="" placeholder="Telefono Móvil">
    </div>
    <div class="form-group col-md-6">
      <label for="">Telefono Casa</label>
      <input type="text" class="form-control" id="" placeholder="Telefono Casa">
    </div>
      <div class="form-group col-md-6">
      <label for="">Modelo</label>
      <input type="text" class="form-control" id="" placeholder="Modelo">
    </div>
    <div class="form-group col-md-6">
      <label for="">Marca</label>
      <input type="text" class="form-control" id="" placeholder="Marca">
    </div>
      <div class="form-group col-md-6">
      <label for="">Color</label>
      <input type="text" class="form-control" id="" placeholder="Color">
    </div>
    <div class="form-group col-md-6">
      <label for="">Email (1)</label>
      <input type="text" class="form-control" id="" placeholder="Email (1)">
    </div>
  <div class="form-group col-md-6">
      <label for="">Email (2)</label>
      <input type="text" class="form-control" id="" placeholder="Email (2)">
    </div>
      <div class="form-group col-md-6">
      <label for="">Email (3)</label>
      <input type="text" class="form-control" id="" placeholder="Email (3)">
    </div>
  <div class="form-group">
      <label for="">Nota</label>
      <input type="text" class="form-control" id="" placeholder="Nota" style="height: 60px;">
    </div>


 <div class="form-group ">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Status
  </label>
</div>

  <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="submit" class="btn btn-primary">Editar</button>
  <button type="submit" class="btn btn-danger">Eliminar</button>
    <button type="submit" class="btn btn-warning">Cancelar</button>
  <button type="submit" class="btn btn-primary">Imprimir</button>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
  Mostrar Clientes
</button>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Lista de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Colonia</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Cod. Postal</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
      <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
      <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
      </section>

     


    </div>
<?php

  require_once("footer.php");
?>