<?php
if(isset($_POST['password'])){
    $password=$_POST['password'];
    $pattern = '/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*\d)(?=.*[A-Z]).{6,}$/';
    if (preg_match($pattern, $password)){
        echo "<p style='color: green;'>Пароль безопасный";
        $truthfulness = 1;
    }
    else{
        echo "<p style='color: red;'>Неверный формат";
        $truthfulness = 2;
    }
}
?>

<?php
    $passwords=file('info.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация</title>
</head>
<body>
    <ul>Придумайте пароль (латиница) в котором будет:
        <li>6 символов</li>
        <li>одна заглавная буква</li>
        <li>один специальный символ</li>
        <li>одна цифра</li>
    </ul>
    <form method="post" action='generation2.php'>
        <label for="social">Выберите соц.сеть:</label>
        <select id="social" name="net">
            <option value="insta">Instagram</option>
            <option value="mail">E-mail</option>
            <option value="tik">TikTok</option>
            <option value="own">Свой вариант</option>
        </select>
        <label>Введите логин:
            <input type='text' name='login'></input>
        </label>
        <label>Введите пароль:
            <input id='j' type='text' name='password'>
        </label>
        <button name='send' type='submit'>Отправить</button>
    </form>
    <form action='generation2.php' method='post'>
       
        <input name='generator' type='button' value='сгенерировать'>
    </form>   
</body>
</html>
<?php
function generatePassword($length = 8) {
    if ($length < 6) {
        throw new Exception("Длина пароля должна быть не менее 6 символов.");
    }
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $digits = '0123456789';
    $specialChars = '!@#$%^&*(),.?":{}|<>';
    $allChars = $uppercase . $lowercase . $digits . $specialChars;
    $password = [];
    $password[] = $uppercase[random_int(0, strlen($uppercase) - 1)];
    $password[] = $lowercase[random_int(0, strlen($lowercase) - 1)];
    $password[] = $digits[random_int(0, strlen($digits) - 1)];
    $password[] = $specialChars[random_int(0, strlen($specialChars) - 1)];
    for ($i = 4; $i < $length; $i++) {
        $password[] = $allChars[random_int(0, strlen($allChars) - 1)];
    }
    shuffle($password);
    return implode('', $password);
}
    if(isset($_POST['generator'])){
        try {
            $a = generatePassword(10);
            echo "<script>
            let yj = document.getElementById('j');
            yj.value = '$a';
            </script>";

        } catch (Exception $e) {
            echo 'Ошибка: ' . $e->getMessage();
        }
    }
    if(isset($_POST['send'])){
        $social_net=$_POST['net'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $file=fopen('info.txt', 'a');
        $stroka = "$social_net|$login|$password\n";
        fwrite($file, $stroka);
        fclose($file);
    }
?>