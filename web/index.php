<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="icon" href="images/di-logo.png">  LOGO EN PESATAÑA-->
        <title>PREGUNTAME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- BOOTSTRAP CSS -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style type="text/css">
            p{text-indent: 2%;}
        </style>
 
    </head>
    <body>
        
        <?php
        include 'header.html';
        ?>

        <main>
            
        <!-- Diseño en ELMENTOS -->

        <form action="index.php" method="post">
    
        <form>
  Selecciona la Temática:
  <select id="mySelect">
    <option value="DC">DC</option>
    <option value="Marvel">Marvel</option>
    <option value="HP">Harry Potter</option>
  </select>
</form>

<button type="button" onclick="myFunction()">Elegir temática</button>

<script>
function myFunction() {

  if(document.getElementById("mySelect").value == "DC" ){
    location.replace("http://localhost:3000/web/DC.php");
    }else if(document.getElementById("mySelect").value == "Marvel"){
        location.replace("http://localhost:3000/web/Marvel.php");
    }else if(document.getElementById("mySelect").value == "HP"){
        location.replace("http://localhost:3000/web/HP.php");
    }

}
</script>

        </main>

        <?php
        include 'footer.html';
        ?>
        <!-- BOOTSTRAP JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>


</html>

