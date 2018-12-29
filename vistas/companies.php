<?php
  require_once("header.php");
?>
    <div class="content-wrapper">        
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                  <div class="box">
                        <div class="box-header with-border">
                            <h1 class="box-title">
                                <button class="btn btn-primary"  onClick="clean()" id="add_button" 
                                data-toggle="modal" data-target="#companyModal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Agregar Empresa</button></h1>
                        <div class="box-tools pull-right">
                    </div>
                </div>
                    <div class="panel-body table-responsive">
                          <table id="company_data" class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                <th>Nombre</th>
                                <th>RFC</th>
                                <th>Calle</th>
                                <th>Numero</th>
                                <th>Colonia</th>
                                <th>Municipio</th>
                                <th>CP</th>
                                <th>Estado</th>
                                <th>Pais</th>
                                <th>Correo</th>
                                <th width="10%">Editar</th>
                                <th width="10%">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>                         
                            </tbody>
                          </table>
                    </div>
                  </div>
              </div>
          </div>
      </section>

    </div>

<?php
  require_once("footer.php");
?>

<script text="text/javascript" src="js/companies.js"></script>