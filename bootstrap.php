<?php


//Подключение к базе данных -  хост :: пользователь :: пароль :: имя базы
$db = mysqli_connect('localhost', 'root', '', 'store');

// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';

// запускаем маршрутизатор
Route::start();