<?php
$hour = date('G');
if ($hour >= 8 && $hour < 24) {
    $theme = 'style.css';
} else {
    $theme = 'night.css';
}
$base = $base ?? '';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?? 'Музей Ароматов'; ?></title>
    <link rel="stylesheet" href="<?php echo $base; ?>content/css/<?php echo $theme; ?>">
</head>
<body>
<div class="container">
    <header>
        <div class="logo">
            <a href="<?php echo $base; ?>index.php">
                <img class="logo__img" src="<?php echo $base; ?>content/images/logo.png" alt="Логотип">
            </a>
            <div class="logo__text">
                <p class="logo__heading">МУЗЕЙ</p>
                <p class="logo__subtitle">АРОМАТОВ</p>
            </div>
        </div>
        <div class="block__text">
            <p class="block__text-heading">МУЗЕЙ <br> АРОМАТОВ</p>
            <p class="block__text-slogan">ИСТОРИЯ В КАЖДОМ ФЛАКОНЕ</p>
        </div>
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/login.php">ВХОД</a>/<a class="navigation__link" href="<?php echo $base; ?>pages/registration.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
        </nav>
        <nav class="navigation-mobile">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php echo $base; ?>pages/login.php">ВХОД</a>/<a class="navigation__link" href="<?php echo $base; ?>pages/registration.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
        </nav>
        <button class="burger">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
    </header>