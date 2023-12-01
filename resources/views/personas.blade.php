<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAGS|Landing</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">DAGS</a></h2>

        <input type="checkbox" id="menu-toggler">

        <label for="menu-toggler" id="hamburger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
            </svg>
        </label>

        <ul class="all-links">
          <li><a href="./index.html">Inicio</a></li>
          <li><a href="./page_biblioteca/biblioteca.html">Biblioteca</a></li>
          <li><a href="./page_generos/generos.html">Géneros</a></li>
          <li><a href="./page_artistas/artistas.html">Artistas</a></li>
          <li><a href="./page_acerca/acerca.html">Acerca de</a></li>
        </ul>
        
      </nav>
    </header>
    
    <div id="content">
        <button class="btn btn-success" data-toggle="modal" data-target="#agregarModal">
            <i class="fas fa-plus"></i> Agregar
        </button>
    <table id="guardarForm" class="table mt-3">
        @csrf
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido materno</th>
                <th>Apellido paterno</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>Smith</td>
            <td>
                <button class="eliminar-btn">Eliminar</button>
            </td>
            <td>
                <button  data-toggle="modal" data-target="#editarModal" class="editar-btn">Editar</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td>Doe</td>
            <td>Smith</td>
            <td>
                <button class="eliminar-btn">Eliminar</button>
            </td>
            <td>
                <button  data-toggle="modal" data-target="#editarModal" class="editar-btn">Editar</button>
            </td>
        </tr>
    </tbody>
    </table>
 </div>
 <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Agregar Nuevo Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="guardarForm">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidoM">Apellido materno</label>
                        <input type="text" class="form-control" id="apellidoM" placeholder="Ingrese el apellido materno">
                    </div>
                    <div class="form-group">
                        <label for="apellidoP">Apellido paterno</label>
                        <input type="text" class="form-control" id="apellidoP" placeholder="Ingrese el apellido paterno">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="agregar()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Modificar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editarForm">
                    <div class="form-group">
                        <label for="nombreEditar">Nombre</label>
                        <input type="text" class="form-control" id="nombreEditar" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidoMEditar">Apellido materno</label>
                        <input type="text" class="form-control" id="apellidoMEditar" placeholder="Ingrese el apellido materno">
                    </div>
                    <div class="form-group">
                        <label for="apellidoPEditar">Apellido paterno</label>
                        <input type="text" class="form-control" id="apellidoPEditar" placeholder="Ingrese el apellido paterno">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="guardarEdicion()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script>
     // Función para generar un ID único
     function generarID() {
        return new Date().getTime();
    }

        function agregar() {
        var nombre = $('#nombre').val();
        var apellidoM = $('#apellidoM').val();
        var apellidoP = $('#apellidoP').val();

        // Generar un nuevo ID único
        var nuevoID = generarID();

        // Agregar una nueva fila a la tabla con el nuevo registro
        var nuevaFila = '<tr>' +
                            '<td>' + nuevoID + '</td>' +
                            '<td>' + nombre + '</td>' +
                            '<td>' + apellidoM + '</td>' +
                            '<td>' + apellidoP + '</td>' +
                            '<td><button class="eliminar-btn">Eliminar</button></td>' +
                            '<td><button data-toggle="modal" data-target="#editarModal" class="editar-btn">Editar</button></td>' +
                         '</tr>';

        $('#guardarForm tbody').append(nuevaFila);

        $('#nombre').val('');
        $('#apellidoM').val('');
        $('#apellidoP').val('');

        $('#agregarModal').modal('hide');
    }

    // Manejador de eventos para el clic en el botón de agregar
    $('#agregarModal .btn-primary').on('click', function() {
        agregar();
    });


// El modal para editar
    function editar(id, nombre, apellidoM, apellidoP) {
        $('#editarModal #nombreEditar').val(nombre);
        $('#editarModal #apellidoMEditar').val(apellidoM);
        $('#editarModal #apellidoPEditar').val(apellidoP);

        $('#editarModal').attr('data-id', id);

        $('#editarModal').modal('show');
    }

    $('.editar-btn').on('click', function() {
        var row = $(this).closest('tr');
        var id = row.find('td:eq(0)').text();
        var nombre = row.find('td:eq(1)').text();
        var apellidoM = row.find('td:eq(2)').text();
        var apellidoP = row.find('td:eq(3)').text();

        editar(id, nombre, apellidoM, apellidoP);
    });

    function guardarEdicion() {
        var id = $('#editarModal').attr('data-id');
        var nombre = $('#editarModal #nombreEditar').val();
        var apellidoM = $('#editarModal #apellidoMEditar').val();
        var apellidoP = $('#editarModal #apellidoPEditar').val();

        var row = $('td:contains("' + id + '")').closest('tr');
        row.find('td:eq(1)').text(nombre);
        row.find('td:eq(2)').text(apellidoM);
        row.find('td:eq(3)').text(apellidoP);

        $('#editarModal').modal('hide');
    }
</script>
    <!--<footer>
      <div>
        <span>Copyright © 2023 All Rights Reserved</span>
        <span class="link">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </span>
      </div>
    </footer>-->

  </body>
</html>
