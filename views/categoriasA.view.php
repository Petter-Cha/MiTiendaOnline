<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <!-- <script>
    // $(document).ready(function(){
    //     // Obteneidno Datos
    //     function obtener_datos() {
        
    //         $.ajax({
    //             url: "mostrar_datos.php",
    //             method: "POST",
    //             beforeSend: function(){
    //                 $("#result").html("Procesando...");
    //             },
    //             success: function(data){
    //                 $("#result").html(data);
    //             }
    //         })
    //     }

    //     obtener_datos();

    // });
    
    </script> -->

    <title>MiTienda</title>

</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="icon-laptop">MiTienda</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="<?php echo RUTA.'close.php'?>">Cerrar Sesion</a>
                <a href="<?php echo RUTA.'categoriasA.php'?>">Administrar Categorias</a>
                <a href="#">Principal</a>
                <a href="">Electronicos</a>
                <a href="">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="banner">
            <img src="img/play.jpg">
            <div class="contenedor">
                <h2>Por cual vas?</h2>
                <p>Una batalla sin presedentes, como nuna antes...</p>
                <a href="#">Leer más</a>
            </div>
        </section>
        <section id="Bienvenidos">
                <h2>CATEGORIAS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat! Ut odio qui expedita dolore dolorem,
                laudantium enim quas ea!</p>
            </section>
            <section id="Categorias">
                
           
            <!-- Tabla de categorias -->
                
   
    
    <div class="row">
        <div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12">
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <h3 class="col-sm-offset-2 col-sm-8 text-center">                    
                    Formulario de Registro de Categorias</h3>
                </div>
                <input type="hidden" id="idCategoria" name="idCategoria" value="0">
                <input type="hidden" id="opcion" name="opcion" value="registrar">
                
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-8"><input id="nombre" name="nombre" type="text" class="form-control" ></div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-8"><input id="descripcion" name="descripcion" type="text" class="form-control" maxlength="8" ></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input id="btn_guardar" type="submit" class="btn btn-primary" value="Guardar">
                        <input id="btn_listar" type="button" class="btn btn-primary" value="Listar">
                    </div>
                </div>
            </form>
            <div class="col-sm-offset-2 col-sm-8">
                <p class="mensaje"></p>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-sm-offset-2 col-sm-8">
                <h3 class="text-center"> <small class="mensaje"></small></h3>
            </div>
            <div class="table-responsive col-sm-12">        
                <table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>                                
                            <th>idCategorias</th>
                            <th>nombre</th>
                            <th>descripcion</th>
                            <th></th>                                            
                        </tr>
                    </thead>                    
                </table>
            </div>            
        </div>        
    </div>
    <div>
        <form id="frmEliminarCategoria" action="" method="POST">
            <input type="hidden" id="idCategoria" name="idCategoria" value="">
            <input type="hidden" id="opcion" name="opcion" value="eliminar">
            <!-- Modal -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalEliminarLabel">Eliminar Categoria</h4>
                        </div>
                        <div class="modal-body">							
							¿Está seguro de eliminar la categoria?<strong data-name=""></strong>
						</div>
						<div class="modal-footer">
							<button type="button" id="eliminar-categoria" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </form>
    </div>
    
            
                    
                  
            </section>
            <section id="info">
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, doloremque!</h3>
                <div class="contenedor">
                    <div class="info-cat">
                        <img src="img/cel.jpg">
                        <h4>iphone X</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/beats.jpg">
                        <h4>Beats White</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/lap.jpg">
                        <h4>Laptop Sony</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/lapt.jpg">
                        <h4>Huawei</h4>
                    </div>
                </div>
            </section>
    </main>
    <footer>
        <div class="contenedor">
            <p class="pie"> MiTienda &copy; 2018</p>
            <div class="redes">
                <a class="icon-facebook" href=""></a>
                <a class="icon-linkedin" href=""></a>
                <a class="icon-twitter" href=""></a>
                <a class="icon-github-circled" href=""></a>
            </div>
        </div>
    </footer>

    
    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <!--botones DataTables-->    
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.bootstrap.min.js"></script>
    <!--Libreria para exportar Excel-->
    <script src="js/jszip.min.js"></script>
    <!--Librerias para exportar PDF-->
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <!--Librerias para botones de exportación-->
    <script src="js/buttons.html5.min.js"></script>

    <script>        
        $(document).on("ready", function(){
            listar();
            guardar();
            eliminar();
        });

        $("#btn_listar").on("click",function(){
            listar();
            
        });

       
        var guardar = function(){
            $("form").on("submit", function(e){
            e.preventDefault();
            var frm = $(this).serialize();
            $.ajax({
                method: "PSOT",
                url: "guardar.php",
                data: frm
            });
        });
    }
			
			
        
        var eliminar = function(){
			$("#eliminar-categoria").on("click", function(){
				var idCategoria = $("#frmEliminarCategoria #idCategoria").val(),
					opcion = $("#frmEliminarCategoria #opcion").val();
				$.ajax({
					method:"POST",
					url: "guardar.php",
					data: {"idCategoria": idCategoria, "opcion": opcion}
				}).done( function( info ){
					var json_info = JSON.parse( info );
					mostrar_mensaje( json_info );
					limpiar_datos();
					listar();
				});
			});
		}

        var mostrar_mensaje = function( informacion ){
			var texto = "", color = "";
			if( informacion.respuesta == "BIEN" ){
					texto = "<strong>Bien!</strong> Se han guardado los cambios correctamente.";
					color = "#379911";
			}else if( informacion.respuesta == "ERROR"){
					texto = "<strong>Error</strong>, no se ejecutó la consulta.";
					color = "#C9302C";
			}else if( informacion.respuesta == "EXISTE" ){
					texto = "<strong>Información!</strong> La Categoria ya existe.";
					color = "#5b94c5";
			}else if( informacion.respuesta == "VACIO" ){
					texto = "<strong>Advertencia!</strong> debe llenar todos los campos solicitados.";
					color = "#ddb11d";
			}else if( informacion.respuesta == "OPCION_VACIA" ){
					texto = "<strong>Advertencia!</strong> la opción no existe o esta vacia, recargar la página.";
					color = "#ddb11d";
			}

			$(".mensaje").html( texto ).css({"color": color });
			$(".mensaje").fadeOut(5000, function(){
					$(this).html("");
					$(this).fadeIn(3000);
			});			
		}

		var limpiar_datos = function(){
			$("#opcion").val("registrar");
			$("#nombre").val("").focus();
			$("#descripcion").val("");
		}


        var listar = function(){
            var table = $("#dt_cliente").DataTable({
                "destroy":true,
                "ajax":{
                    "method":"POST",
                    "url":"listar.php"
                },
                "columns":[
                    {"data":"idCategorias"},
                    {"data":"nombre"},
                    {"data":"descripcion"},
                    {"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
                    ]
            });
            obtener_data_editar("#dt_cliente tbody", table);
            obtener_id_eliminar("#dt_cliente tbody", table);
        }

        var obtener_data_editar = function(tbody, table){
            $(tbody).on("click","button.editar", function(){
                //                metodo.parametro.filtro=tr=filas
                var data = table.row($(this).parents("tr")).data();
                var idCat = $("#idCat").val(data.idCat),
                nombre = $("#nombre").val(data.nombre),
                descripcion = $("#descripcion").val(data.descripcion),
                opcion = $("#opcion").val("modificar");

						
            });
        }
        var obtener_id_eliminar = function(tbody, table){
            $(tbody).on("click","button.eliminar", function(){
                //                metodo.parametro.filtro=tr=filas
                var data = table.row($(this).parents("tr")).data();
                var idCat = $("#frmEliminarCategoria #idCat").val(data.idCat)
            });
        }

        
        

    </script>
</body>

</html>
        
