<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <meta name="description" content="Контакты">
    <meta name="author" content="Ахтямова Камила">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../content/css/style.css">
</head>

<body>
<div class="container">
    <header>
        <div class="logo">
            <a href="../index.php"><img class="logo__img" src="../content/images/logo.png" alt="Логотип"></a>
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
                <li class="navigation__item"><a class="navigation__link" href="../index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="login.php">ВХОД</a>/<a href="registration.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
        </nav>
        <nav class="navigation-mobile">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="../index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="login.php">ВХОД</a>/<a href="registration.php">РЕГИСТРАЦИЯ</a></li>
            </ul>
        </nav>
        <button class="burger">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
    </header>

    <main class="contact">
        <section class="group-block-contact">
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-2.png" alt="Адрес">
                </div>
                <h2>Адрес</h2>
                <p>г. Санкт-Петербург, наб. реки Мойки, д.24</p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-3.png" alt="Телефон">
                </div>
                <h2>Телефон</h2>
                <p>+7 (912) 345 67 89<br>Ежедневно с 10:00 до 19:00</p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-4.png" alt="Почта">
                </div>
                <h2>E-mail</h2>
                <p>help@site.com<br>Мы ответим вам в ближайшее время</p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/clock.png" alt="Время">
                </div>
                <h2>Режим работы</h2>
                <p>Ежедневно<br>с 10:00 до 19:00<br>Касса закрывается за 1 час</p>
            </div>
        </section>

        <section class="group-map">
            <div class="location-image">
                <img src="../content/images/карта.jpg" alt="Фото">
            </div>
            <div class="location-info">
                <h2>Как нас найти</h2>
                <p>Наш офис расположен в историческом центре города</p>
                <p>г. Санкт-Петербург, наб. реки Мойки, д.24</p>
                <p>г. Москва, ул. Арбат, 36/2</p>
                <p>г. Москва, ул. Ильинка, 4</p>
            </div>
        </section>
    </main>
</div>

<footer>
    <div class="footer-icons">
        <div class="group-footer-icons">
            <img src="../content/images/icon-2.png" alt="Метка">
            <p>г. Санкт-Петербург, наб. реки Мойки, д.24</p>
        </div>
        <div class="group-footer-icons">
            <img src="../content/images/icon-3.png" alt="Телефон">
            <p>+7 (912) 345 67 89</p>
        </div>
        <div class="group-footer-icons">
            <img src="../content/images/icon-4.png" alt="Email">
            <p>help@site.com</p>
        </div>
    </div>
    <div class="footer-subscription">
        <p class="footer-subscription__heading">Подпишись на новости</p>
        <p class="footer-subscription__description">Узнавайте первыми о новинках, акциях и <br> ароматных событиях</p>
        <input class="new-products__input" type="email" placeholder="Ваш email">
        <button class="footer-subscription__btn">Подписаться</button>
    </div>
</footer>
<script src="../content/script/main.js"></script>
</body>
</html>