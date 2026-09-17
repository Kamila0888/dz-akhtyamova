<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация — Музей Ароматов</title>
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
                    <li class="navigation__item"><a class="navigation__link" href="login.php">ВХОД</a>/<a
                            href="registration.php">РЕГИСТРАЦИЯ</a>
                    </li>
                </ul>
            </nav>
            <nav class="navigation-mobile">
                <ul class="navigation__list">
                    <li class="navigation__item"><a class="navigation__link" href="../index.php">ГЛАВНАЯ</a></li>
                    <li class="navigation__item"><a class="navigation__link" href="contact.php">КОНТАКТЫ</a></li>
                    <li class="navigation__item"><a class="navigation__link" href="catalog.php">КАТАЛОГ</a></li>
                    <li class="navigation__item"><a class="navigation__link" href="about.php">О НАС</a></li>
                    <li class="navigation__item"><a class="navigation__link" href="sale.php">АКЦИИ</a></li>
                    <li class="navigation__item"><a class="navigation__link" href="login.php">ВХОД</a>/<a
                            href="registration.php">РЕГИСТРАЦИЯ</a>
                    </li>
                </ul>
            </nav>
            <button class="burger">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>
        </header>
        <main class="main-registration">
            <section class="registration">
                <form class="registration__form">
                    <p class="registration-name">Музей Ароматов</p>
                    <div class="group-input">
                        <label for="name">Имя</label>
                        <input type="text" id="name">
                    </div>
                    <div class="group-input">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                    </div>
                    <div class="group-input">
                        <label for="password">Пароль</label>
                        <input type="password" id="password">
                    </div>
                    <div class="group-input">
                        <label for="confirm_password">Подтвердите пароль</label>
                        <input type="password" id="confirm_password">
                    </div>
                    <button type="submit" class="btn-register_auth">Зарегистрироваться</button>
                </form>
                <img src="../content/images/img-register.png" alt="Духи">
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
            <p class="footer-subscription__description">Узнавайте первыми о новинках, акциях и <br> ароматных событиях
            </p>
            <input class="new-products__input" type="email" placeholder="Ваш email">
            <button class="footer-subscription__btn">Подписаться</button>
        </div>
    </footer>
    <script src="../content/script/main.js"></script>
</body>

</html>