<?php
  // include("./bd/consultas.php");  

   // $sql = "INSERT INTO users VALUES ('erik@gmail.com', '".sha1("erikt1")."','empleado')";
    // if (mysqli_query($con, $sql)) {
    //     echo "Nuevo Registro creado Exitosamente!";
    // }
    // else{
    //     echo "Error".$sql . ":".mysqli_error($coon);
    // }

    include("./bd/conection.php");
    session_start();
    $_SESSION['login']=false;
    
    $con =conectar();
    
    $correo = $_POST["email"] ?? NULL;
    $contraseña = $_POST['password'] ?? NULL;
    
    // $userLogeado="";

    $sql = "Select user, rol, pwd from users where user = '".$correo."' ;";
    $result = mysqli_query($con,$sql);
    $dataUser = mysqli_fetch_array($result);
    

    if ($dataUser) {
      if($dataUser['user']==$correo && $dataUser['pwd']==$contraseña){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $dataUser['user'];
        $_SESSION['pwd']=$dataUser['pwd'];
        $_SESSION['rol']=$dataUser['rol'];

        if($dataUser["rol"]=="admin"){
          header('location:../listLibros.php');
        }else if($dataUser["rol"]=="empleado"){
          header('location:../userLibros.php');
        }else{
          header('location:../index.php');
        }
      }else{
        header('location:../index.php');
        echo "Contraseña Incorrecta";
      }
    }else {
      header('location:../index.php');
      echo "0 results";
    }
    mysqli_close($con);
    










    
    // echo $correo;
    // if ($correo == "" || $contraseña ="") {
    //   header('location:../index.php');
    //   echo ('Llena todos los campos');
    // }else{
    //   $dataUser = searchUser($correo,$contraseña);
    //   if ($dataUser) {

    //     if($dataUser["rol"]="admin"){
        
    //       header('location:../listLibros.php');
    //     }else if($dataUser["rol"]="empleado"){
    //       header('location:../userLibros.php');
    //     }else{
    //     header('location:../index.php');
    //     }
        
    //   }else{
    //     header('location:../index.php');
    //   }
    // }
  
    
    
    ?>