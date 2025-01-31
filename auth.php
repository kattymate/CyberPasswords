<?php
session_start();
if (isset($_SESSION['username'])){
    header("Location: password.php");
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $file=file('users.txt');
    $auth=false;
    foreach ($file as $line){
        $stroka=explode(':', trim($line));
        if ($stroka[1]==$username && $stroka[2]==$password){
            $_SESSION['username']=$username;
            $auth=true;
            break;
        }
    }
    if($auth){
        header("Location: password.php");
    }
    else{
        echo "Неверный логин или пароль. <a href='auth.php'>Попробовать снова</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="auth.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        document.addEventListener('DOMContentLoaded', () => {
            AnimationAuth('.anim');
        });

        function AnimationAuth(name) {
            let tl = gsap.timeline({
                duration: .2
            });

            tl.add('start')
                .fromTo(name, {
                    y: 20
                }, {
                    y: 0,
                    stagger: .2,
                    opacity: 1
                }, 'start');
        }
    </script>
    <title>Авторизация</title>
</head>

<body>
    <section class="auth">
        <div class="place">
            <p id='zaglawie' class="roboto-regular anim">Вход</p>
            <form method="POST" action="auth.php">
                <label for="username" class="anim"></label><br>
                <input type="text" name="username" id="username" class="roboto-regular anim" required placeholder='Логин'><br><br>
                <label for="password" class="anim"></label><br>
                <input type="text" name="password" id='password' class="roboto-regular anim" required placeholder='Пароль'><br><br>
                <button class="anim">Войти</button>
                <p class='underline roboto-light anim' onclick="window.location='reg.php'">В первый раз? Зарегистрироваться</p>
            </form>
        </div>
    </section>
</body>

</html>