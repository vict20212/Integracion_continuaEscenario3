<html>

<head>
    <title>
        Registra Productos
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- UIKIT -->

    <link rel="stylesheet" href="vista/librerias/css/uikit.min.css" />
    <link rel="stylesheet" href="vista/css/main.css" />
    <script src="vista/librerias/js/uikit.min.js"></script>
    <script src="vista/librerias/js/uikit-icons.min.js"></script>

  

    <script src="vista/js/producto.js"></script>

</head>

<body id="body1">

<div id="body">
<img src="vista/fondo/banner.png" style="width:100%; height: 60%;" />
</div>

<nav id="navbar" class="push better-nav fixed-top" >
  <div class="container" style="color:white;">
    <div class="head">
      <a href="#" class="brand">
        <div class="logo">
          <img class="image" src="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_64.png" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Branding" />
        </div>
        <div class="title">
          <h3>Vendedo----</h3>
        </div>
        
      </a>
    </div>
    <div class="body">
    
      <ul>
        <li class="home"><a href="#">Inicio</a></li>
        <li class="page"><a href="#">Perfil</a></li>
        <li class="blog active dropdown"><a href="#">Inventario</a>
          <span class="selector"></span>
          <ul>
            <li><a href="#">Pedidos</a></li>
            <li><a href="#">Estadisticas</a></li>
            <li class="dropdown"><a href="#">Categories</a>
              <span class="selector"></span>
         </ul>
        </li>
        <li class="page"><a href="#">Contacts</a></li>
        <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <span class="selector"></span>
          
        </li>
      </ul>
    </div>
    <div class="toggle">
      <a href="#navbar-slide">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</nav>
<div id="underlay" class="better-nav-mobile-underlay"></div>
<nav id="navbar-slide" class="better-nav-pills"></nav>
  
       


  <br> 

  <div class="container2">
  <button class="btn" id="btnAbrirModal" class="uk-button uk-button-primary btn-crear" href="#modal-overflow"><span class="btn-text">Agregar Producto</span></button>
 
</div>


  
    <br> 

    <div id="modal-overflow" uk-modal>
        <div class="uk-modal-dialog">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Registro Producto</h2>
            </div>



            <div class="uk-modal-body" uk-overflow-auto  id="modal">
                <form>
                <div class="form-group">
                        <label for="Codigo">Codigo:</label>
                        <input type="text" class="form-control" id="Codigo">
                    </div>

                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre">
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                    
                    <div class="form-group">
                        <label for="cantidadStock">Cantidad Stock:</label>
                        <input type="text" class="form-control" id="cantidadStock">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <textarea class="form-control" id="descripcion"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen: </label>
                        <input type="file" class="form-control" id="imagen">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado: </label>
                        <input type="text" class="form-control" id="estado">
                    </div>

                    <div class="form-group">
                          <form>
                              <label for="txtidCategoria" >Categoria:</label>
                              <select id="selectCategoria">
                                <option value="Categoria"></option>
                                
                              </select>
                          </form>
                        </div>


                </form>

            </div>

            <div class="uk-modal-footer uk-text-right">
                <button class="btn-crear uk-button uk-button-default uk-modal-close" type="button">cancelar</button>
                <button class="button" id="btnRegistrar" >
    <span>Subir Producto</span>
    <div class="cart">
        <svg viewBox="0 0 36 26">
            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
        </svg>
    </div>
</button>
            </div>

        </div>
    </div>




    <div id="modalModificar" uk-modal>
        <div class="uk-modal-dialog">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Modificar Producto</h2>
            </div>



            <div class="uk-modal-body" uk-overflow-auto>
                <form>
                <div class="form-group">
                        <label for="codigo">Codigo:</label>
                        <input type="text" class="form-control" id="codigoMod">
                    </div>

                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombreMod">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" id="precioMod">
                    </div>
                    <div class="form-group">
                        <label for="cantidadStock">Cantidad Stock:</label>
                        <input type="text" class="form-control" id="cantidadStockMod">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <textarea class="form-control" id="descripcionMod"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="precio">Actual:</label>
                        <br>
                        <img id="imagenPr" src="">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen: </label>
                        <input type="file" class="form-control" id="imagenMod">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado: </label>
                        <input type="text" class="form-control" id="estadoMod">
                    </div>
                    
                    
                    
                   
                    
                </form>




            </div>



            <div class="uk-modal-footer uk-text-right">
                <button class="btn-crear uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button id="btnModificar" class="btn-crear uk-button uk-button-primary" type="button">Modificar</button>
            </div>

        </div>
    </div>




    <div class="container">
        <table id="tablaProductos" class="uk-table uk-table-hover uk-table-divider" style="background-color: white; color: black;">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>cantidadStock</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Estado</th>
                 
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla">

            </tbody>
        </table>
        
    </div>

    <img src="">


</body>

</html>