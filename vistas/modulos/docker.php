<div class="elDocker">
  <div class="iconosPs">
    <a data-toggle="tooltip" title="Horarios" data-placement="bottom"  onclick="activarVentanaHorario()"><img class="icono"
        src="vistas/img/iconos/horario.svg"></a>
    <a data-toggle="tooltip" title="Exámenes" data-placement="bottom" onclick="activarVentanaExamenes()"><img class="icono"
        src="vistas/img/iconos/examenes.svg"></a>
    <a data-toggle="tooltip" title="Ubicación" data-placement="bottom" onclick="activarVentanaMapa()" ><img class="icono"
        src="vistas/img/iconos/proto_sombra_pin.svg"></a>
    <a data-toggle="tooltip" title="Contacto" data-placement="bottom" onclick="activarVentanaContacto()"><img class="icono"
        src="vistas/img/iconos/proto_sombra_contacto.svg"></a>
    <a data-toggle="tooltip" title="Configuración" data-placement="bottom" onclick="activarVentanaConfig()"><img class="icono"
        src="vistas/img/iconos/proto_sombra_perfil.svg"></a>
  </div>
</div>
<div class="AccDir">
  <a onclick="activarVentanaMision()"><img class="iconoDesktop" src="vistas/img/iconos/logoproto.svg"></a><br>
  <label id="mision">¿Quiénes somos?</label><br>
  <a onclick="activarVentanaCursos()"><img class="iconoDesktop" src="vistas/img/iconos/cursos.svg"></a><br>
  <label id="cursos">Cursos</label><br>
  <a onclick="activarVentanaTienda()"><img class="iconoDesktop" src="vistas/img/iconos/tienda.svg"></a><br>
  <label id="tienda">Tienda</label><br>
</div>

<?php
  include('vistas/modulos/ventanaContacto.php');
  include('vistas/modulos/ventanaCursos.php');
  include('vistas/modulos/ventanaMapa.php');
  include('vistas/modulos/ventanaMision.php');
  include('vistas/modulos/ventanaHorario.php');
  include('vistas/modulos/ventanaExamenes.php');
  include('vistas/modulos/ventanaConfig.php');
  include('vistas/modulos/ventanaTienda.php');
  
?>