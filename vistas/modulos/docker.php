<div class="elDocker">
  <div class="iconosPs">
    <div class="iconosFlex">
      <a class="iconitoss" data-balloon="Horario" data-balloon-pos="down" onclick="activarVentanaHorario()"><img class="icono"
          src="vistas/img/iconos/newicons/horario.svg"></a>
      <a class="iconitoss" data-balloon="Exámenes" data-balloon-pos="down" onclick="activarVentanaExamenes()"><img class="icono"
          src="vistas/img/iconos/newicons/examenes.svg"></a>
      <a class="iconitoss" data-balloon="Mapa" data-balloon-pos="down"  onclick="activarVentanaMapa()" ><img class="icono"
          src="vistas/img/iconos/newicons/ubicacion.svg"></a>
      <a class="iconitoss" data-balloon="Contacto" data-balloon-pos="down" onclick="activarVentanaContacto()"><img class="icono"
          src="vistas/img/iconos/newicons/telefono.svg"></a>
      <a class="iconitoss" data-balloon="Configuración" data-balloon-pos="down"  onclick="activarVentanaConfig()"><img class="icono"
          src="vistas/img/iconos/newicons/conf.svg"></a>
    </div>
  </div>
</div>
<div class="AccDir">
  <div class="flexContenedor">
    <a  onclick="activarVentanaMision()"><img class="iconoDesktop" src="vistas/img/iconos/logoproto.svg"></a><br>
    <label class="mision">¿Quiénes somos?</label>
  </div><br>
  <div class="flexContenedor">
    <a onclick="activarVentanaCursos()"><img class="iconoDesktop" src="vistas/img/iconos/elsombrerito.svg"></a><br>
    <label class="mision">Cursos</label>
  </div><br>
  <div class="flexContenedor">
    <a onclick="activarVentanaTienda()"><img class="iconoDesktop" src="vistas/img/iconos/tienda.svg"></a><br>
    <label class="mision">Tienda</label>
  </div><br>
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