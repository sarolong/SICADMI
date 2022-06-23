<?php
include 'conexion.php';

$usuario=$_POST['usuario'];
$pass=$_POST['password'];

$query="SELECT U.* FROM tbl_usuarios AS U WHERE U.Usuario='$usuario' AND U.Password='$pass'";
$q=mysqli_query($con,$query);
$array=mysqli_fetch_row($q);

if($array){
   header('Location: ./index.php');
   session_start();
   $_SESSION['Usuario'] = $usuario;

}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Usuario o Contraseña Incorrecta
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}


?>