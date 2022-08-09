<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login MancosAnonimos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href= "css/estilos.css">
        <script src="js/ValidacionInput.js"></script>
    </head>

    <body>
        <h1 class="display-3 text-center mt-5"> Acesso a usuarios </h1>

        <div class="container">

            <form class="contenedorform mt-5" action="controlador.php" method="POST" onsubmit="return vaciosLogin();">

                <div class="form-group">
                    <label>Usuario:</label>
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                </div>
        
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" name="txtPass" id="txtPass"class="form-control">
                </div>
                
                    
            
                    <button type="submit" name="btnEntrar" class="btn btn-warning btn-block"> Entrar </button>

            <div>
               <br>
                    
                    <button type="submit" name="btnNuevoU" class="btn btn-warning btn-block"> Registrar nuevo usuario </button>
            
        </div>
                    
                </form>

        </div>

        
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>        
    </body>
</html>