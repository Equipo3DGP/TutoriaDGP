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
    
        
          
        </form>
        </form>
        <div class="m-0 vh-100 row justify-content-center align-item-center">
            <div class="col-auto bg-danger p-5 text-center">
                <div id="mi-carrusel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <p>En qué año se descubrió América?:</p><br> <input type="text"  />
                        </div>
                        <div class="carousel-item">
                        <p>¿De qué color es el sol?:</p> <br><input type="text" /><br><br>
                        </div>
                        <div class="carousel-item">
                        <p>¿Cuántos años tenía la reina?</p><div class="respuestas">
                            <input type="radio" name="preg1" value="1" /> 59<br />
                            <input type="radio" name="preg1" value="2" /> 89<br />
                            <input type="radio" name="preg1" value="3" /> 96<br />
                        </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#mi-carrusel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>

                    <a class="carousel-control-next" href="#mi-carrusel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>


        <!-- PARTE DE SANDRA -->

</datalist>
            <button class = "registro"><a href="index.php">Cambiar temática</a></button>
            </div>
        </form>
    </div> 

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

