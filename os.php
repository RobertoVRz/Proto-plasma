<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="title" content="">

    <meta name="description" content="">

    <meta name="keyword" content="">

    <title>Proto-plasma</title>
    <link rel="icon" type="image/png" id="dinamico" href="vistas/img/iconos/faviconProto.png" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="vistas/css/app.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/balloon-css/0.5.0/balloon.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js"></script>
    <script src="vistas/js/jquery.nicescroll.min.js"></script>



    <?php
	include('controladores/controlador.docker.php');
	
	include('controladores/controlador.ventanaHorario.php');
	include('controladores/controlador.ventanaContacto.php');
	include('controladores/controlador.ventanaCursos.php');
	include('controladores/controlador.ventanaMapa.php');
	include('controladores/controlador.ventanaMision.php');
	include('controladores/controlador.ventanaExamenes.php');
	include('controladores/controlador.ventanaConfig.php');
	include('controladores/controlador.ventanaTienda.php');
	

	//include('modelos/modelo.conexion.php');
	//Los controladores que se utilizan en todas las páginas, se incluyen fuera del if de abajo.
	
	if(isset($_GET['id'])){
		include('controladores/controlador.finalizacionPago.php');
	}
	elseif(isset($_GET['page'])){//Esta variable verifica que exista un id para la página visitada,
						   //si no existe, es porque está en el index, entonces lo del index se incluye
						   //en el else en el orden que deben aparecer las closas

		switch($_GET['page']){

			case '1':
			//Registro
			include('controladores/controlador.docker.php');
			break;

			case '2':
			//Perfil
			include('controladores/controlador.ventanaHorario.php');
			break;

			case '3':
			//Nueva publicación
			include('controladores/controlador.ventanaContacto.php');
			break;

			case '4':
			//Publicación
			include('controladores/controlador.ventanaCursos.php');
			break;

			case '5':
			//Buscador
			include('controladores/controlador.ventanaMapa.php');
			break;

			case '6':
			//Panel de publicaciones
			include('controladores/controlador.ventanaMision.php');
			break;

			case '7':
			//Panel de publicaciones
			include('controladores/controlador.ventanaExamenes.php');
			break;

			case 'default':
			
			break;

		}
	}
	else{
		//Aquí se incluyen todos los controladores del index.
		include('controladores/controlador.masonryIndex.php');
	}

	?>
</head>

<body class="bgDesktop">
<div class="elEscritorio">
    <?php
include('vistas/modulos/docker.php');

if(isset($_GET['id'])){
	include('vistas/modulos/finalizacionPago.php');
}

elseif(isset($_GET['page'])){

	switch($_GET['page']){

		case '1':
		//Registro
		include('vistas/modulos/docker.php');
		break;

		case '2':
		//Perfil
		include('vistas/modulos/ventanaHorario.php');
		break;

		case '3':
		//Nueva publicación
		include('vistas/modulos/ventanaContacto.php');
		//7plugin de subida de imagenes
		break;

		case '4':
		//Publicación
		include('vistas/modulos/ventanaCursos.php');
		break;

		case '5':
		//Buscador
		include('vistas/modulos/ventanaMapa.php');
		break;

		case '6':
		//Panel de publicaciones
		include('vistas/modulos/ventanaMision.php');
		break;

		case '7':
		//Panel de publicaciones
		include('vistas/modulos/ventanaExamenes.php');
		break;


	}
}


?>
</div>
</body>

</html>