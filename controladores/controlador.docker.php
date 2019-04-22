<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()

    var abierto = 0;
  })
</script>

<script>
  function activarVentanaInfo() {
    document.getElementById("ventana1").style.display = "block";
    $(".contenidoVentanaInfo").niceScroll(".wrap");
    //document.location.href = "?page=4";
    
  }

  function activarVentanaCalendario() {
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
  }
</script>

<script>
  function cerrarVentanaInfo() {
    document.getElementById("ventana1").style.display = "none";
  }

  function cerrarVentanaCalendario() {
    document.getElementById("ventana2").style.display = "none";
  }

  function cerrarVentanaContacto() {
    document.getElementById("ventana3").style.display = "none";
  }

  function cerrarVentanaMapa() {
    document.getElementById("ventana4").style.display = "none";
    abierto = 0;
  }

  function cerrarVentanaMision() {
    document.getElementById("ventana5").style.display = "none";
  }
</script>