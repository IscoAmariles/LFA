<!doctype html>
<html class="no-js" lang="es">
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sistema de Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="https://ligadefutbolaficionado.com/wp-content/uploads/2019/11/LFA4.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/fuentes.css">
       

<script src="https://kit.fontawesome.com/9de2e7ffd1.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        

        <style>
            body {
                padding-top: 120px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
    <div class="container">
        
    <center><img src="../img/logo2.png" class="img-fluid" width="200px" alt="Responsive image"></center>

    </div>
    
    <br>
    <br>
    
    <div class="container">
           <div class="row">


           
                <div class="col-12 col-md-12 col-lg-12">
                 <center><h5>Administrador de equipos</h5></center>
                    <center><div class="login">
                    
                    <form action="validar.php" method="POST">
                        <div class="form-group">
                            <label for="user" class="sr-only">Login</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="pw" class="sr-only">Contraseña</label>
                            <input type="password" name="pw" id="pw" class="form-control" placeholder="Contraseña">
                        </div>
                       
                        <input type="submit" id="btn-login" class="btn btn-outline-info btn-lg btn-block" value="Entrar">
                    </form>
                    
                    <hr>
              </div></center>
           </div>
           
        </div> <!-- /.row -->
    </div> <!-- /.container -->
  

    </body>
</html>
