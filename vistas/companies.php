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

    <div id="companyModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="companyForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar Empresa</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="rfc">RFC:</label>
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="street">Calle:</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Calle">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="internal_number">N. Interno:</label>
                                <input type="text" class="form-control" id="internal_number" name="internal_number" placeholder="N.I">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="external_number">N. Externo:</label>
                                <input type="text" class="form-control" id="external_number" name="external_number" placeholder="N.E">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="colony">N. Externo:</label>
                                <input type="text" class="form-control" id="colony" name="colony" placeholder="Colonia">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="municipality">Municipio:</label>
                                <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Municipio">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="zip_code">C.P:</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="CP">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="state">Estado:</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="country">Pais:</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Pais">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mail1">Correo 1:</label>
                            <input type="text" class="form-control" id="mail1" name="mail1" placeholder="example@example.com">
                        </div>

                        <div class="form-group">
                            <label for="mail2">Correo 2:</label>
                            <input type="text" class="form-control" id="mail2" name="mail2" placeholder="example@example.com">
                        </div>

                        <div class="form-group">
                            <label for="mail3">Correo 3:</label>
                            <input type="text" class="form-control" id="mail3" name="mail3" placeholder="example@example.com">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
  require_once("footer.php");
?>

<script text="text/javascript" src="js/companies.js"></script>