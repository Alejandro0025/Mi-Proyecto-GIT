<?php 
 include("./bd/conection.php");
 session_start();
 $_SESSION['login']=false;
 
function searchUser($correo ,$pwd){
    $con =conectar();

    $sql = "Select user, rol, pwd from users where user = '".$correo."' ;";
    $result = mysqli_query($con,$sql);
    $dataUser = mysqli_fetch_array($result);

    if ($dataUser) {
        if($user['user']==$correo){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $dataUser['user'];
        $_SESSION['pwd']=$dataUser['pwd'];
        $_SESSION['rol']=$dataUser['rol'];
        return $dataUser;
        }
    }else {
        echo "0 results";
    }
    mysqli_close($con);
    
}

// function userExist($correo, $pwd){

//     $user = searchUser($correo,$pwd);
    
//     if($user['user']==$correo){
//         $_SESSION['login'] = true;
//         $_SESSION['user'] = $dataUser['user'];
//         $_SESSION['pwd']=$dataUser['pwd'];
//         $_SESSION['rol']=$dataUser['rol'];
//         return true;
//     }else{
//         echo "No imprimi";
//         return false;
//     }

// }

?>