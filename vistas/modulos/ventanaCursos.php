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
        <img class="iconoCarpeta" src="vistas/img/iconos/folderElectro.svg" onclick="carpinteria()">
        <label class="labelCarpeta">Carpintería</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folderRobot.svg" onclick="robotica()">
        <label class="labelCarpeta">Robótica</label>
      </div>
      <div class="flexContenedorCursos">
        <img class="iconoCarpeta" src="vistas/img/iconos/folderImp.svg" onclick="programacion()">
        <label class="labelCarpeta">Programación</label>
      </div>
    </div>

    <div class="zonaTipo" id="arduinoZone">
      <div class="flexCurso">
        <i onclick="regresar()" class="fas fa-arrow-left return"></i>
        <div class="cursoIzq">
          <img class="imgCursos" src="vistas/img/iconos/prto_arduino.svg">
        </div>
        <div class="cursoDer">
          <h1 class="tituloCurso">Arduino</h1>
          <div class="scrollCurso">
            <div class="wrap">
              <p class="cursoP">Los microcontroladores como el Arduino son herramientas que facilitan el uso de la
                electrónica en proyectos multidisciplinarios. Son herramientas muy poderosas pues permiten que la
                tecnología interaccione con el mundo, en otras palabras, podrás aprender a programar estos
                microprocesadores para que hagan múltiples cosas como prender luces al ritmo de la música, manejar
                robots, automatizar un proceso ―en fin― todo lo que se te ocurra diseñar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="zonaTipo" id="disenoZone">
      <div class="flexCurso">
        <i onclick="regresar()" class="fas fa-arrow-left return"></i>
        <div class="cursoIzq">
          <img class="imgCursos" src="vistas/img/iconos/prto_diseño3d.svg">
        </div>
        <div class="cursoDer">
          <h1 class="tituloCurso">Diseño 3D</h1>
          <div class="scrollCurso">
            <div class="wrap">
              <p class="cursoP">Aprender a modelar piezas y productos en 3D es una habilidad que te permitirá plasmar
                tridimensionalmente formas más complejas para todo tipo de usos; desde una pieza de arte, tu propia
                funda de celular, la placa de tu mascota, pines para tu mochila, hasta moldes de repostería, llaveros
                personalizados, tuppers, modelado de personajes, entre otras cosas. Esto te permitirá obtener
                conocimiento sobre lo que involucra el diseño industrial.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="zonaTipo" id="electroZone">
      <div class="flexCurso">
        <i onclick="regresar()" class="fas fa-arrow-left return"></i>
        <div class="cursoIzq">
          <img class="imgCursos" src="vistas/img/iconos/prto_carpinteria.svg">
        </div>
        <div class="cursoDer">
          <h1 class="tituloCurso">Electrónica</h1>
          <div class="scrollCurso">
            <div class="wrap">
              <p class="cursoP">La electrónica forma parte de tu día a día en numerosos aparatos que son de uso común. En este taller te ofrecemos toda la capacitación que necesitas para tener un conocimiento general y armar desde prototipos de bocinas, motores, una bobina Tesla, hasta aquel proyecto de tecnología que no sabías cómo elaborar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="zonaTipo" id="roboticaZone">
      <div class="flexCurso">
        <i onclick="regresar()" class="fas fa-arrow-left return"></i>
        <div class="cursoIzq">
          <img class="imgCursos" src="vistas/img/iconos/">
        </div>
        <div class="cursoDer">
          <h1 class="tituloCurso">Robótica</h1>
          <div class="scrollCurso">
            <div class="wrap">
              <p class="cursoP">Aprender a modelar piezas y productos en 3D es una habilidad que te permitirá plasmar
                tridimensionalmente formas más complejas para todo tipo de usos; desde una pieza de arte, tu propia
                funda de celular, la placa de tu mascota, pines para tu mochila, hasta moldes de repostería, llaveros
                personalizados, tuppers, modelado de personajes, entre otras cosas. Esto te permitirá obtener
                conocimiento sobre lo que involucra el diseño industrial.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="zonaTipo" id="impresionZone">
      <div class="flexCurso">
        <i onclick="regresar()" class="fas fa-arrow-left return"></i>
        <div class="cursoIzq">
          <img class="imgCursos" src="vistas/img/iconos/prto_arduino.svg">
        </div>
        <div class="cursoDer">
          <h1 class="tituloCurso">Impresión 3D</h1>
          <div class="scrollCurso">
            <div class="wrap">
              <p class="cursoP">Aprovecha y aprende a plasmar tus ideas con las tecnologías modernas. En este taller te enseñaremos los fundamentos de la impresión 3D, así como todo el proceso que involucra la materialización de tu diseño. Aprenderás cómo se usan los programas de modelado 3D para diseñar y fabricar objetos desde tu computadora.</p>
            </div>
          </div>
        </div>
      </div>
    </div>




  </div>
</div>