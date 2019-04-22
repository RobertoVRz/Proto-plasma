<div class="elDocker">
  <div class="iconosPs">
    <a data-toggle="tooltip" title="Horarios" data-placement="bottom"  onclick="activarVentanaInfo()"><img class="icono"
        src="vistas/img/iconos/cursos.svg"></a>
    <a data-toggle="tooltip" title="Ubicación" data-placement="bottom" onclick="activarVentanaMapa()" ><img class="icono"
        src="vistas/img/iconos/proto_sombra_pin.svg"></a>
    <a data-toggle="tooltip" title="Contacto" data-placement="bottom" onclick="activarVentanaContacto()"><img class="icono"
        src="vistas/img/iconos/proto_sombra_contacto.svg"></a>
  </div>
</div>
<div class="AccDir">
  <a onclick="activarVentanaMision()"><img class="iconoDesktop" src="vistas/img/iconos/logoproto.svg"></a><br>
  <label id="mision">¿Quiénes somos?</label>
</div>
<?php
  include('vistas/modulos/ventanaContacto.php');
  include('vistas/modulos/ventanaInfo.php');
  include('vistas/modulos/ventanaMapa.php');
  include('vistas/modulos/ventanaMision.php');
  
?>