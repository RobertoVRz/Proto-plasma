<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()

  })
</script>

<script>
  function activarVentanaCursos() {
    document.getElementById("ventana1").style.display = "block";
    
    //document.location.href = "?page=4";
    
  }

  function activarVentanaHorario() {
    document.getElementById("ventana2").style.display = "block";
  }

  function activarVentanaContacto() {
    document.getElementById("ventana3").style.display = "block";
    //document.location.href = "?page=3";
  }

  function activarVentanaMapa() {
    //var abierto = 1;
    //if (abierto == 1){
      //document.location.href = "?page=5";
    //}
    
    document.getElementById("ventana4").style.display = "block";
  }

  function activarVentanaMision() {
    document.getElementById("ventana5").style.display = "block";
    $(".contenidoVentanaMision").niceScroll(".wrap");
  }

  function activarVentanaExamenes() {
    document.getElementById("ventana6").style.display = "block";
  }

  function activarVentanaConfig() {
    document.getElementById("ventana7").style.display = "block";
  }

  function activarVentanaTienda() {
    document.getElementById("ventana8").style.display = "block";
  }

</script>

<script>
  function cerrarVentanaCursos() {
    document.getElementById("ventana1").style.display = "none";
  }

  function cerrarVentanaHorario() {
    document.getElementById("ventana2").style.display = "none";
  }

  function cerrarVentanaContacto() {
    document.getElementById("ventana3").style.display = "none";
  }

  function cerrarVentanaMapa() {
    document.getElementById("ventana4").style.display = "none";
  }

  function cerrarVentanaMision() {
    document.getElementById("ventana5").style.display = "none";
  }

  function cerrarVentanaExamenes() {
    document.getElementById("ventana6").style.display = "none";
  }

  function cerrarVentanaConfig() {
    document.getElementById("ventana7").style.display = "none";
  }

  function cerrarVentanaTienda() {
    document.getElementById("ventana8").style.display = "none";
  }
</script>