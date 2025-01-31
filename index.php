<?php
    session_start();
    if (isset($_SESSION['username'])){
        header('Location: password.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberPasswords</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="wrapper">
        <header class="header block">
            <div class="center">
                <span class="namePage roboto-bold" id="headerPage">CyberPasswords</span>
                <div>
                    <button class="reg buttHead roboto-regular" onclick="window.location='reg.php'">Регистрация</button>
                    <button class="auth buttHead roboto-regular" onclick="window.location='auth.php'">Авторизация</button>
                </div>
            </div>
        </header>
        <div class="SectionOne">
            <div class="container">
                <div class="SectionOne__container">
                    <div class="SectionOne__text">
                        <h1 class="SectionOne__text-title" id="sect1">Ваши пароли в надежных руках</h1>
                        <p class="SectionOne__text-subtitle roboto-regular" id="sect1">Простой и безопасный менеджер паролей, который хранит все данные локально на устройстве. Без сложных настроек, без синхронизации — только вы и ваши пароли под защитой мощного шифрования.</p>
                        <button class="SectionOne__text-button" id="sect1" onclick="window.location='reg.php'">Попробовать сейчас</button>
                    </div>
                    <div class="SectionOne__image">
                        <img src="image 12.png" alt="" id="sect1_img">
                    </div>
                </div>
            </div>
        </div>
        <section class="sect2">
            <div class="sect2_1">
                <span class="roboto-bold" id="namePage">Почему именно наш менеджер паролей?</span>
            </div>
            <div class="sect2_2">
                <div class="sect2_mini">
                    <span class="nameMini roboto-regular">Полная безопасность ваших данных</span>
                    <span class="textMini roboto-regular">Ваши пароли никогда не покидают вашего устройства. Мы исключили облачные хранилища и синхронизацию, чтобы вы могли быть уверены: доступ к вашим данным есть только у вас.</span>
                </div>
                <div class="sect2_mini marg">
                    <span class="nameMini roboto-regular">Простота использования</span>
                    <span class="textMini roboto-regular">Забудьте о сложных настройках и лишних функциях. Наш менеджер паролей — это минимализм и удобство. Вы можете начать пользоваться им за считанные минуты.</span>
                </div>
                <div class="sect2_mini thirdMini">
                    <span class="nameMini roboto-regular">Доступ в любое время</span>
                    <span class="textMini roboto-regular">Ваши данные всегда под рукой, где бы вы ни находились. Благодаря простому доступу через защищенный интерфейс, вы можете управлять паролями в любой момент — быстро и безопасно.</span>
                </div>
            </div>
        </section>
        <div class="SectionThree">
            <div class="container">
                <span class="roboto-bold" id="sec3Page">Как это работает?</span>
                <div class="SectionThree__container">
                    <div class="SectionFour__step-wrapper">
                        <div class="SectionThree__step-one SectionThree__step">
                            <div class="SectionThree__step-one--one SectionThree__step--card SectionThree__step--card-one">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPageNechet">Шаг 1: Зарегистрируйтесь и войдите в систему</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3Nechet">Создайте учетную запись на нашем сайте и получите доступ к защищенному личному кабинету. Это быстро и бесплатно.</p>
                            </div>
                            <div class="SectionThree__step-one--two SectionThree__step--card SectionThree__step--card-one">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPageNechet">Шаг 3: Создайте новые пароли</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3Nechet">Используйте встроенный генератор для создания уникальных и надежных паролей. Вы можете настроить длину, символы и уровень сложности.</p>
                            </div>
                            <div class="SectionThree__step-one--three SectionThree__step--card SectionThree__step--card-one">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPageNechet">Шаг 5: Используйте пароли быстро и легко</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3Nechet">Копируйте пароли одним нажатием, чтобы войти на нужные сайты или приложения. Никаких запоминаний или повторов.</p>
                            </div>
                        </div>
                        <div class="SectionThree__step-two SectionThree__step">
                            <div class="SectionThree__step-two--one SectionThree__step--card SectionThree__step--card-two">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPage">Шаг 2: Добавьте свои данные</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3">Внесите существующие пароли вручную или импортируйте их из браузера. Удобная система категорий поможет вам навести порядок.</p>
                            </div>
                            <div class="SectionThree__step-two--two SectionThree__step--card SectionThree__step--card-two">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPage">Шаг 4: Управляйте паролями</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3">Все пароли хранятся в одном месте, доступны через удобный поиск или категории. Вы можете редактировать, удалять или архивировать их.</p>
                            </div>
                            <div class="SectionThree__step-two--three SectionThree__step--card SectionThree__step--card-two">
                                <h3 class="SectionThree__step-title roboto-regular" id="miniPage">Шаг 6: Оставайтесь уверенными</h3>
                                <p class="SectionThree__step-subtitle roboto-regular" id="text3">Мы используем современные стандарты шифрования, чтобы гарантировать полную защиту ваших данных. Ваши пароли в безопасности, где бы вы ни были.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="secureSect block">
            <div class="center">
                <span class="nameSect roboto-bold">Безопасность вашего хранилища паролей</span>
                <div class="cards">
                    <div class="card">
                        <div class="nameCardDiv">
                            <span class="nameCard roboto-light">Ваша безопасность - наш главный приоритет</span>
                        </div>
                        <div class="textCardDiv">
                            <span class="textCard roboto-light">Шифрование на уровне устройства: Все ваши пароли шифруются с использованием современных алгоритмов шифрования. Это гарантирует, что только вы сможете получить доступ к своим данным, даже если устройство окажется в чужих руках.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nameCardDiv">
                            <span class="nameCard roboto-light">Регулярные обновления безопасности</span>
                        </div>
                        <div class="textCardDiv">
                            <span class="textCard roboto-light">Мы постоянно обновляем систему безопасности, чтобы защищать ваши данные от новых угроз. Все обновления происходят автоматически, без необходимости вашего вмешательства.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nameCardDiv">
                            <span class="nameCard roboto-light">Безопасное хранение</span>
                        </div>
                        <div class="textCardDiv">
                            <span class="textCard roboto-light">Ваши данные не хранятся в облаке или на сторонних серверах. Они остаются только на вашем устройстве, что исключает возможность утечек через внешние источоры</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="FeedBack">
            <div class="container">
                <div class="FeedBack__container">
                    <div class="FeedBack__post FeedBack--card">
                        <div class="FeedBack__post-title">
                            <h1 class="FeedBack__post-title--title roboto-regular textF" roboto-regular>CyberPasswords</h1>
                            <p class="FeedBack__post-title--subtitle roboto-regular textF">*2025 все права защищены</p>
                        </div>
                        <div class="FeedBack__post-list">
                            <ul>
                                <li class="FeedBack__post-list--item roboto-regular li">Вкладки</li>
                                <li class="FeedBack__post-list--item roboto-regular li" id="cursour" onclick="window.location='reg.php'">Регистрация</li>
                                <li class="FeedBack__post-list--item roboto-regular li" id="cursour" onclick="window.location='auth.php'">Авторизация</li>
                            </ul>
                        </div>
                        <div class="FeedBack__post-contact">
                            <div class="FeedBack__post-contact--item"> <img src="Instagram.png" class="imgs">
                            </div>
                            <div class="FeedBack__post-contact--item"> <img src="Facebook.png" class="imgs">
                            </div>
                            <div class="FeedBack__post-contact--item"> <img src="YouTube.png" class="imgs">
                            </div>
                        </div>
                    </div>
                    <div class="FeedBack__modal FeedBack--card">
                        <form method="POST" id="form">
                            <h1 class="FeedBack__modal--title formF">Оставьте обратную связь</h1>

                            <input type="hidden" name="access_key" value="b2714f99-30d0-4f7e-be9d-41a343948475" class="formF">

                            <div class="FeedBack__modal--gmail span">
                                <span class="roboto-regular formF">Почта</span>
                                <input type="text" class="input roboto-light formF" name="gmail">
                            </div>

                            <div class="FeedBack___modal--comment span">
                                <span class="roboto-regular formF">Коментарий</span>
                                <textarea name="message" class="input roboto-light formF" required></textarea>
                            </div>

                            <div class="FeedBack__modal--button">
                                <button type="submit" class="formF">Отправить</button>
                            </div>
                            <div id="result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>