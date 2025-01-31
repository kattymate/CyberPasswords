<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $file_name=$username.'.txt';
}
if(isset($_POST['send'])){
    if (isset($_SESSION['username'])){
            $username=$_SESSION['username'];
            $file_name=$username.'.txt';
    
    
            $social_net=$_POST['app'];
            $login=$_POST['login'];
            $password=$_POST['password'];
            $file=fopen($file_name, 'a');
            $stroka = "$social_net|$login|$password\n";
            fwrite($file, $stroka);
            fclose($file);

            unset($passwords);
            unset($_POST['send']);
        
            header('Location: password.php');
        
    }
}
    
?>