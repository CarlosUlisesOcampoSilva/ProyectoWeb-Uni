<?php
    $usuario = $_POST['nnombre'];
    $pass = $_POST['npassword'];

     if(empty($usuario) || empty($pass)){
        header("Location: Login.html");
      exit();
     }
 

    include('Conexion.php');
    $SQL ="SELECT * from usuarios where Username='" . $usuario ."'";
      $result= mysqli_query($Conexion, $SQL);       

if($row = mysqli_fetch_array($result)){
if($row['PassUser'] == $pass){
session_start();
$_SESSION['Username'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: login.html");
exit();
}
}else{
header("Location: login.html");
exit();
}

?>