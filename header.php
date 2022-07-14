<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ?>/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header">
        <div class="header-top__top">
            <h1>Государственное бюджетное общеобразовательное учреждение города Москвы Школа № 1354 "Вектор"</h1>
        </div>
        <div class="header-top my-container">
            <div class="ht-logo">
                <img src="<?php bloginfo('template_directory')?>/img/icon/logo.png" width="2480" height="2162" alt="">
            </div>
            <div class="ht-menu">
                <ul>
                    <li>
                        <a href="#">Главная</a>
                    </li>
                    <li>
                        <a href="?page_id=91">Обучение</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </div>
            <?php
                include_once("my_functions.php");
                auth_result();
            ?>
            <div class="ht-button">
            <?php
             
                if (isset($_SESSION['username'])) {     //разобраться в script.js
                    echo '<button class="open3" style="display:none">Войти</button>';
                    echo '<button class="open2" style="display:none">Регистрация</button>';
                    echo '<button class="open4">Выйти</button>';
                    echo '<button class="open">Настройки</button>'; // заменил гамбургер на кнопку для тестирования
                } else {
                    echo '<button class="open3">Войти</button>';
                    echo '<button class="open2">Регистрация</button>';
                    echo '<button class="open4" style="display:none">Выйти</button>';
                    echo '<button class="open" style="display:none">Настройки</button>'; // заменил гамбургер на кнопку для тестирования
                }
                // для выхода пользователя использовал страницу выхода - у меня это "?page_id=88" (у меня это шаблон Выход) - переходил на нее и обновлял чтобы сработал end_session()
            ?>

                <!-- <button class="open3">Войти</button>
                <button class="open2">Регистрация</button>
                <button class="open4">Выйти</button>
                <button class="open">Настройки</button> -->
                

            </div>
            <div class="modal3">
                <div class="modal3-window">
                
                    <div class="modal3-close">X</div>
                    <form method="post" action=""> <!-- добавить method="post" и action="...какая-то функция..." -->
                        Вход
                        <label>
                            <input type="text" name="email" placeholder="Электроная почта">
                        </label>
                        <label>
                            <input type="password" name="pass" placeholder="Пароль">
                        </label>
                        <button type="submit" name="login">Вход</button>
                    </form>
                </div>
            </div>
            <div class="modal2">
                <div class="modal2-window">
                <?php 
                    include_once("my_functions.php");
                    create_ph_users_db();
                    register_ph_user();
                ?>
                    <div class="modal2-close">X</div>
                    <form method="post" action=""> <!-- добавить action="...какая-то функция..." -->
                        Регистрация
                        <label>
                            <input type="text" class="email" name="email" id="email" placeholder="Электроная почта" required>
                        </label>
                        <label>
                            <input type="text" class="login" name="userlogin" id="userlogin" placeholder="Логин" required>
                        </label>
                        <label>
                            <input type="text" class="pass" name="pass" id="pass" placeholder="Пароль" required>
                        </label>
                        <label>
                            <input id="online_phone" name="online_phone" type="tel" maxlength="50"
                                   autofocus="autofocus"
                                   value="+7(___)___-__-__"
                                   pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                   placeholder="+7(___)___-__-__" required>
                        </label>
                        <label>
                            <input type="text" class="name" name="username" id="username" placeholder="Имя" required>
                        </label>
                        <button type="submit" class="register" name="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
            <div class="modal">
                <div class="modal-window">
                    <div class="modal-close">X</div>
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Обучение</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle my-container">
            <div class="hm-content">
                <h1>Инженерный класс в московской школе</h1>
                <p>Сайт учеников инженерных классов ГБОУ Школа №1354 "Вектор", которые будут сдавать ОГЕ по физикике и хотят получить оценку "отлично" на экзамене</p>
            </div>
        </div>

</header>