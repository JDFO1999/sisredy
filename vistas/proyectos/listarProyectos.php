<?php include "config/Connection.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Registro de Proyectos</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</head>

<div class="card">
  <div class="card-header">
    <h4>Tabla de Registro de Proyectos</h4>
  </div>
  <div class="card-body table-scroll">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#InsertarPr">Insertar</button>
    <br>
    <br>
    <table id="tabla_Proyectos" class="table table-sm table-success table-striped text-center">
      <thead>                       
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Proyecto</th>
          <th scope="col">Observacion</th>
          <th scope="col">Fecha de Creacion</th>
          <th scope="col">Acciones</th> 
        </tr>
      </thead>
      <tbody>
        <?php
          $num = 1;
          $conexion = Conectarbd();
          $sql = "select * from sisredy.j001t_proyectos";
          $resultado = pg_exec($conexion, $sql);
          for ($i = 0; $i < pg_num_rows($resultado); $i++) {
            $fila = pg_fetch_row($resultado);
            echo "<tr>";
            echo "<td>" . $num++ . "</td>";
            echo "<td>" . $fila[1] . "</td>";
            echo "<td>" . $fila[2] . "</td>";
            echo "<td>" . $fila[3] . "</td>"; 
            echo "<td>";
            echo "<button class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#EditarPR'>Editar</button> ";
            echo "</td>";    
            echo "</tr>";
          }
          Desconectarbd($conexion);
        ?>
      </tbody>
    </table>
  </div>

  <div id="InsertarPr" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <form role="form" method="POST" enctype="multipart/form-data"> 
          <div class="modal-header bg-primary" style="color:white">
            <h4 class="modal-title">Agregar Proyecto</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                  <input type="text" class="form-control input-lg" name="PrNombre" placeholder="Ingresar Proyecto" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span>
                  <input type="text" class="form-control input-lg" id="PrObservacion" name="Observacion" placeholder="Observaciones" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                  <input type="date" class="form-control input-lg" id="PrCreacion" name="Creacion" placeholder="Fecha de Creacion" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar </button>
            <button type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Salir</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $('#tabla_Proyectos').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json'
        }
    });
});
</script>

<div id="EditarPR" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <form role="form" method="POST" enctype="multipart/form-data"> 
          <div class="modal-header bg-primary" style="color:white">
            <h4 class="modal-title">Editar Proyecto</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                  <input type="text" class="form-control input-lg" name="PrNombre" placeholder="Nombre Proyecto" value="" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span>
                  <input type="text" class="form-control input-lg" id="PrObservacion" name="Observacion" placeholder="Observaciones" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                  <input type="date" class="form-control input-lg" id="PrCreacion" name="Creacion" placeholder="Fecha de Creacion" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar Cambios </button>
            <button type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Salir</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>