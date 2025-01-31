<?php
session_start();
if (isset($_SESSION['username'])){
    header('Location: password.php');
}
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $file=fopen('users.txt', 'a');

    $file2=fopen( $username.'.txt', 'w');

    fwrite($file, "$email:$username:$password\n");
    fclose($file);
    
    header("Location:auth.php");
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style_register.css" type="text/css">
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
</head>

<body>
    <section class="register">
        <div class="place">
            <p id='zaglawie' class="roboto-regular anim">Регистрация</p>
            <form method="POST" action="reg.php">
                <input class="roboto-regular anim" type="text" name="username" id="username" required placeholder='Логин'><br><br>
                <input class="roboto-regular anim" type="email" name="email" id="email" required placeholder='Эл.почта'><br><br>
                <input class="roboto-regular anim" type="password" name="password"  required placeholder='Пароль'><br><br>
                <input class="roboto-regular anim" type="password"  required placeholder='Повторите пароль'><br><br>
                <button class="anim">Зарегестрироваться</button>
                <p class='underline roboto-light anim' onclick="window.location='auth.php'">Уже есть в системе? Войти</p>
            
            </form>
        </div>
    </section>
</body>

</html>