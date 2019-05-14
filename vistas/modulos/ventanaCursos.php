<div class="ventanaCursos" id="ventana1" onclick="enfrenteCursos()" style="display:none">
  <div class="barraUp">
    <a onclick="cerrarVentanaCursos()"><i class="fas fa-times-circle"></i></a>
    <span class="spanTitulo">Cursos</span>
  </div>

  <div class="contenidoVentanaCursos">
    <div class="flexCon">
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folderArduino.svg" onclick="arduino()">
        <label class="labelCarpeta">Arduino</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folder3D.svg" onclick="diseño()">
        <label class="labelCarpeta">Diseño 3D</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folderCarpinteria.svg" onclick="carpinteria()">
        <label class="labelCarpeta">Carpintería</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folderRobot.svg" onclick="robotica()">
        <label class="labelCarpeta">Robótica</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/fol derProgra.svg" onclick="programacion()">
        <label class="labelCarpeta">Programación</label>
      </div>
    </div>

    <div class="zonaTipo" id="arduinoZone" >
      <img onclick="regresar()" class="imgCursos" src="vistas/img/iconos/prto_arduino.svg">
      <p>Los microcontroladores como el Arduino son herramientas que facilitan el uso de la electrónica en proyectos multidisciplinarios. Son herramientas muy poderosas pues permiten que la tecnología interaccione con el mundo, en otras palabras, podrás aprender a programar estos microprocesadores para que hagan múltiples cosas como prender luces al ritmo de la música, manejar robots, automatizar un proceso ―en fin― todo lo que se te ocurra diseñar.
      </p>
    </div>

    <div onclick="regresar()" class="zonaTipo" id="diseñoZone" >
      <img class="imgCursos" src="vistas/img/iconos/prto_diseño3d.svg">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, modi? Omnis, accusamus! Possimus, molestias!
        Rerum tenetur perspiciatis ducimus incidunt illum dolores enim tempora adipisci nulla, sapiente quia,
        cupiditate, facilis animi.</p>
    </div>

    <div onclick="regresar()" class="zonaTipo" id="carpinteriaZone" >
      <img class="imgCursos" src="vistas/img/iconos/prto_carpinteria.svg">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, modi? Omnis, accusamus! Possimus, molestias!
        Rerum tenetur perspiciatis ducimus incidunt illum dolores enim tempora adipisci nulla, sapiente quia,
        cupiditate, facilis animi.</p>
    </div>

    <div onclick="regresar()" class="zonaTipo" id="roboticaZone" >
      <img class="imgCursos" src="vistas/img/iconos/">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, modi? Omnis, accusamus! Possimus, molestias!
        Rerum tenetur perspiciatis ducimus incidunt illum dolores enim tempora adipisci nulla, sapiente quia,
        cupiditate, facilis animi.</p>
    </div>

    <div onclick="regresar()" class="zonaTipo" id="programacionZone" >
      <img class="imgCursos" src="vistas/img/iconos/prto_arduino.svg">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, modi? Omnis, accusamus! Possimus, molestias!
        Rerum tenetur perspiciatis ducimus incidunt illum dolores enim tempora adipisci nulla, sapiente quia,
        cupiditate, facilis animi.</p>
    </div>




  </div>
</div>