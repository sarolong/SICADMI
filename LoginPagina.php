<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SICADMI</title>
</head>
<body style="background-image: url('./img/04.jpg'); background-size: cover;">
    <div class="container">
        
       

            <!-- <div class="col-8 p-0">
                <img style="background-size: cover;" src="./img/fondo2.jpg" alt="">
            </div> -->


            <div class="row vh-100 justify-content-center align-items-center p-0 ">
                <div class="col-4 border border-2 rounded-3 bg-body">
                    <form class="px-3 m-3" method="post" action="LoginPagina.php">
                        <div class="text-center">
                            <img style="height: 150px; width: 150px; " src="./img/login.jpg" alt="">
                        </div>
                        <div class=" text-center">
                        <h2 class="mb-3">Administrador</h2>
                        <h5>Iniciar Sesion</h5><br>
                        </div>     
                        <div class="mb-3">            
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div><br>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                        </div><br>
                        
                            <?php
                            if($_POST){
                                include './php/login.php';
                            }
                            ?>
                        
                    </form>
                </div>
            </div>
            
      
         
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>