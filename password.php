<?php
if(isset($_POST['password'])){
    $password=$_POST['password'];
    $pattern = '/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*\d)(?=.*[A-Z]).{6,}$/';
    if (preg_match($pattern, $password)){
       $truly=1;

    }
    else{
        $truly=2;
    }
}
session_start();
    $username=$_SESSION['username'];

    $file_name=$username.'.txt';

if(!isset($passwords)){
    $passwords=file($file_name);

}
$passwords=file($file_name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="password.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="modal.js"></script>
</head>

<body>

    <div class="create">
        <div class="container">
            <div class="create__container">
                <div class="create___header">
                    <div class="create__header--title">
                        <h1>CyberPasswords</h1>
                    </div>
                    <div class="create__header--profile-icon">
                        <img src="ellipse.png" id="accountMan">
                    </div>
                </div>
                <div class="window">
                    <div>
                        <button onclick="window.location='logout.php'">Выйти</button>
                    </div>
                </div>
                <div class="create__section">
                    <div class='create__section-card'>
                    <!-- <div class="create__section-card">
                        <div class="create__section--cards-card"> -->
                            <?php
                            
                                
                        
                                foreach($passwords as $passwordiks){
                                    $passwordik = explode('|', $passwordiks);
                                   
                                    echo "<div class='create__section--cards-card'>";
                                    echo "<div class='create__section--cards-card-image'>";
                                    echo "<img src='secure.png' alt=''>";
                                    echo "</div>";
                                    echo "<div class='create__section--cards-card-text'>";
                                   
                                    
                                    echo "<h1>Сервис: $passwordik[0]</h1>";
                                    echo "<p>Логин: $passwordik[1]</p>";
                                    echo "<p>Пароль: $passwordik[2]</p>";
                                    
                                    echo "</div>";
                                    echo "</div>";
                                }
                            ?>
                    </div>-+
                    
                            
                          
                            <div class="create__section--cards-card-text">
                                <h1>Инстаграм</h1>
                                <p>логин</p>
                                <p>пароль</p>
                            </div>
                            <button class="create__section--button-button" id="modal__button">Создать</button>
                        </div>
                    </div>
                    <div class="create__section-button">
                        <div class="back_modal"></div>
                        <div class="modal__window">
                            <button id="close--button">✕</button>
                            <div class="modal__window--title">Создать пароль</div>
                            <form method="POST" action='passwords.php'>
                                <div class="wrapper">
                                    <select class="selector" name="app">
                                        <option selected value='own'>-</option>
                                        <option value='Instagram'>Instagram</option>
                                        <option value='Tik Tok'>Tik Tok</option>
                                        <option value='E-mail'>Gmail</option>
                                    </select>
                                    <input type="text" placeholder="Ввести логин" class="login" name="login">
                                    <div class="gen">
                                        <input type="text" id='j' placeholder="Ввести пароль" class="password" name="password">
                                        <input type="button" value="Сгенерировать пароль" class="gen__password"></button>
                                        <button class="arrowdown" type="button">↓</button>
                                    </div>
                                    <div class="kriterii">
                                        <div class="kriterii-div">
                                            <input name='upper' type="checkbox" id="includeUppercase">
                                            <span class="roboto-light">Верхний регистр</span>
                                        </div>
                                        <div class="kriterii-div">
                                            <input name='spec' type="checkbox" id="includeSpecial">
                                            <span class="roboto-light">С спец символами</span>
                                        </div>
                                        <div class="kriterii-div">
                                            <input name='downer' type="checkbox" id="includeLowercase">
                                            <span class="roboto-light">Нижний регистр</span>
                                        </div>
                                        <div class="kriterii-div">
                                            <input name='cyfr' type="checkbox" id="includeNumbers">
                                            <span class="roboto-light">С цифрами</span>
                                        </div>
                                    </div>

                                    <button class="button__add" name='send' type="submit">Создать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
