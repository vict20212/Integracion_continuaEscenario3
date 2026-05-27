$(document).ready(function() {
    cargarTabla();


    /*
 * BetterNav - Bootstrap Navbar + bigSlide (for mobile)
 * ATTENTION: CSS does not use browser prefixes, modify if you decide to use in production!
 */

    /* Navbar specifics */
    document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
        if(!button.classList.contains('loading')) {
    
            button.classList.add('loading');
    
            setTimeout(() => button.classList.remove('loading'), 3700);
    
        }
        e.preventDefault();
    }));
    
    

    function limpiarCampos() {
        $("#codigo").val("");
        $("#txtNombre").val("");
        $("#precio").val("");
        $("#cantidadStock").val("");
        $("#descripcion").val("");
        $("#imagen").val("");
        $("#estado").val("");
    }

    function cargarTabla() {
        var mensaje = "ok";
        var objData = new FormData();
        objData.append("cargar", mensaje);
        $.ajax({
            url: "control/productoControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                var concatenar = "";

                respuesta.forEach(control);

                function control(item, index) {

                    concatenar += '<tr>';
                    concatenar += '<td>' + item.codigo + '</td>';
                    concatenar += '<td>' + item.nombre + '</td>';
                    concatenar += '<td>' + "$" + item.precio + '</td>';
                    concatenar += '<td>' + item.cantidadStock + '</td>';
                    concatenar += '<td>' + item.descripcion + '</td>';
                    concatenar += '<td><img id="imagenTabla" src="' + item.imagen + '"></img></td>';
                    concatenar += '<td>' + item.estado + '</td>';
                    concatenar += '<td>';
                    concatenar += '<div class="uk-margin-small">';
                    //concatenar += '<div class="uk-button-group">';
                    concatenar += '<a id="btnmod" class="uk-button uk-button-primary" href="#modalModificar" uk-toggle idProducto="' + item.idProducto + '" codigo="' + item.codigo + '" nombre="' + item.nombre + '" precio="' + item.precio + '" cantidadStock="' + item.cantidadStock + '" descripcion="' + item.descripcion + '" imagen="' + item.imagen +'" estado="' + item.estado +'">' + '<span uk-icon="icon:pencil"></span>' + '</a> <br>';
                    concatenar += '<button id="btnDel" class="uk-button uk-button-danger" idProducto="' + item.idProducto + '"  imagen="' + item.imagen + '" >' + '<span uk-icon="icon:info"></span>' + '</button>';
                    concatenar += '</div>';
                    concatenar += '</div>';

                    concatenar += '</td>';

                    concatenar += '</tr>';


                }
                // alert(concatenar);
                $("#cuerpoTabla").html(concatenar);

            }
        })

    }
    var idModificar = "";
    var imagen = "";
    $("#tablaProductos").on("click", "#btnmod", function() {
        $("#modalModificar").addClass('uk-open').show();
        idModificar = $(this).attr("idProducto");
        var codigo = $(this).attr("codigo");
        var nombre = $(this).attr("nombre");
        var precio = $(this).attr("precio");
        var cantidadStock = $(this).attr("cantidadStock");
        var descripcion = $(this).attr("descripcion");
        imagen = $(this).attr("imagen");
        var estado = $(this).attr("estado");
        
        
        
        $("#codigoMod").val(codigo);
        $("#txtNombreMod").val(nombre);
        $("#precioMod").val(precio);
        $("#cantidadStockMod").val(cantidadStock);
        $("#descripcionMod").val(descripcion);
        $("#imagenPr").attr("src", imagen);
        $("#estadoMod").val(estado);
        
        

    })



    $("#tablaProductos").on("click", "#btnDel", function() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var idEliminar = $(this).attr("idProducto");
                    var imagenEliminar = $(this).attr("imagen");
                    alert(idEliminar);
                    var objData = new FormData();
                    objData.append("idEliminar", idEliminar);
                    objData.append("imagenEliminar", imagenEliminar);



                    $.ajax({
                        url: "control/productoControl.php",
                        type: "post",
                        dataType: "json",
                        data: objData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            if (respuesta == "ok") {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                                cargarTabla();

                            }

                        }
                    })

                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    })




    $("#btnAbrirModal").click(function() {
        limpiarCampos();
        $("#modal-overflow").addClass('uk-open').show();



    })

    $("#btnRegistrar").click(function() {
        var codigo = $("#Codigo").val();
        
        var imagen = document.getElementById("imagen").files[0];
       

     //alert(codigo + " " + nombre + " " + precio + " " + cantidad + " " + descripcion + " " + imagen );

        var objData = new FormData();
        objData.append("codigo", codigo);
  
        objData.append("imagen", imagen);
      


        $.ajax({
            url: "control/productoControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                if (respuesta == "ok") {
                    cargarTabla();
                    // alert(respuesta);
                    $("#modal-overflow").removeClass('uk-open').hide();
                    limpiarCampos();
                  
                }
            }
        })

    })

    $("#btnModificar").click(function() {
        var codigo = $("#codigoMod").val();
        var nombre = $("#txtNombreMod").val();
        var precio = $("#precioMod").val();
        var cantidadStock = $("#cantidadStockMod").val();
        var descripcion = $("#descripcionMod").val();
        var anterior = imagen;
        var imagenMod = document.getElementById("imagenMod").files[0];
        var estado = $("#estadoMod").val();
        var objData = new FormData();

        objData.append("codigoMod", codigo);
        objData.append("nombreMod", nombre);
        objData.append("precioMod", precio);
        objData.append("cantidadStockMod", cantidadStock);
        objData.append("descripcionMod", descripcion);
        objData.append("idModificar", idModificar);
        objData.append("imagenAnteriorMod", anterior);

        if (imagenMod == null || imagenMod == "") {

            objData.append("anteriorImagen", anterior);

        } else {

            objData.append("imagenMod", imagenMod);

        }
        objData.append("estado", estado);
        

        $.ajax({
            url: "control/productoControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                if (respuesta == "ok") {
                    cargarTabla();
                    $("#modalModificar").removeClass('uk-open').hide();

                    swal("Registro Modificado!", "Se ha modificado el registro!", "success");
                }

            }
        })

    })

})