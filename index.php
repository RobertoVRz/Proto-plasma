<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Carga de CSS-->
	<link rel="icon" type="image/png" id="dinamico" href="vistas/img/elfavicon/favnar.png" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
<link href="vistas/css/app.css" media="all" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js"></script>
<script src="vistas/js/jquery.nicescroll.min.js"></script>
    <title>Proto-Plasma</title>
</head>
<!--El escritorio-->

<body>
       <div class="zonaCompu">
           <img class="compu zoom" src="img/carga-01.svg">
           
           
            <div class="loading-page zoom">
                <div class="counter">
                    <p>loading</p>
                    <h1 class="porcentaje">0%
                        <!--
                            h1.abs loading
                            h1.abs.color loading
                            -->
                    </h1>
                    <hr />
                </div>
            </div>
           
       </div>


 
<script>
    $(document).ready(function() {
  
  var counter = 0;
  var c = 0;

  var i = setInterval(function(){
      $(".loading-page .counter h1").html(c + "%");
      $(".loading-page .counter hr").css("width", c * 3.7  + "px");
      

    
    //$(".loading-page .counter h1.color").css("width", c + "%");
    
    counter++;
    c++;
      
    if(counter == 101) {
        clearInterval(i);
        document.location.href = "../Proto-plasma/os.php";
    }
  }, 50);
});

</script>
    

</body>

</html>