<?php
$hour = date('G');

if ($hour >= 8 && $hour < 20) {
    $theme = 'style.css';
} else {
    $theme = 'night.css';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Музей Ароматов — Главная</title>
    <link rel="stylesheet" href="content/css/<?php echo $theme; ?>">
</head>
<body>
<div class="container">
    <header>
        <div class="logo">
            <img class="logo__img" src="content/images/logo.png" alt="Логотип">
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
                <li class="navigation__item"><a class="navigation__link" href="index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/login.php">ВХОД</a>/<a href="pages/registration.php">РЕГИСТРАЦИЯ</a>
                </li>
            </ul>
        </nav>
        <nav class="navigation-mobile">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="index.php">ГЛАВНАЯ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/contact.php">КОНТАКТЫ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/catalog.php">КАТАЛОГ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/about.php">О НАС</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/sale.php">АКЦИИ</a></li>
                <li class="navigation__item"><a class="navigation__link" href="pages/login.php">ВХОД</a>/<a href="pages/registration.php">РЕГИСТРАЦИЯ</a>
                </li>
            </ul>
        </nav>
        <button class="burger">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
    </header>
    <main>
        <section class="main-img">
            <div class="group-main-img__text">
                <div class="main-img__name">Магазин <br>
                    «Музей Ароматов»
                </div>
                <div class="main-img__slogan">Погрузитесь в истории парфюмерии</div>
                <div class="main-img__text">Коллекционные ароматы, вдохновленные эпохами и созданием по <br> мотивам
                    легендарных
                    композиций
                </div>
            </div>
            <img src="content/images/img-1.png" alt="Девушка с духами">
        </section>
        <section class="infographics">
            <div class="inp">
                <img src="content/images/inp-1.png" alt="Колонны">
                <p><span>Исторические ароматы</span> <br> Вдохновленные великими <br>
                    эпохами и традициями</p>
            </div>
            <div class="inp">
                <img src="content/images/inp-2.png" alt="Колба">
                <p><span>Эксклюзивные коллекции</span> <br> Ограниченные серии <br>
                    для ценителей</p>
            </div>
            <div class="inp">
                <img src="content/images/inp-3.png" alt="Листик">
                <p><span>Изысканные ингредиенты</span> <br> Отборные натуральные <br>
                    компоненты</p>
            </div>
            <div class="inp">
                <img src="content/images/inp-4.png" alt="Подарок">
                <p><span>Идеальный подарок</span> <br> Элегантная упаковка <br>
                    и внимание к деталям</p>
            </div>
        </section>
        <section class="about-product">
            <div class="about-product-museum__text">
                <span>О музее</span>
                <p>Музей Ароматов - это место, где оживают <br> истории через запахи. Мы бережно <br> сохраняем
                    наследие
                    парфюмерного <br> искусства и делимся им с вами</p>
            </div>
            <img src="content/images/img-2.png" alt="О музее">
            <div class="about-product-smell__text">
                <span>Экспозиция ароматов</span>
                <p>Откройте для себя коллекцию ароматов, <br> вдохновленых Великими эпохами, <br> событиями и
                    легендами</p>

            </div>
            <img src="content/images/img-3.png" alt="Экспозиция ароматов">
        </section>
        <section class="popular-collections">
            <p class="popular-collections__heading">Популярные коллекции</p>
            <div class="group-popular-collections__card">
                <div class="popular-collections__card">
                    <img class="popular-collections__card-img" src="content/images/img-4.png" alt="Духи">
                    <p class="popular-collections__name">ATTAR COLLECTION <br> MUSK KASHMIR</p>
                    <p class="popular-collections__price">8325р</p>
                    <button class="popular-collections__btn">В КОРЗИНУ <img src="content/images/icon-1.png" alt="Корзина"></button>
                </div>
                <div class="popular-collections__card">
                    <img class="popular-collections__card-img" src="content/images/img-5.png" alt="Духи">
                    <p class="popular-collections__name">Initio Rehab</p>
                    <p class="popular-collections__price">54000р</p>
                    <button class="popular-collections__btn">В КОРЗИНУ <img src="content/images/icon-1.png" alt="Корзина"></button>
                </div>
                <div class="popular-collections__card">
                    <img class="popular-collections__card-img" src="content/images/img-6.png" alt="Духи">
                    <p class="popular-collections__name">ATTAR COLLECTION MUSK KASHMIR <br>
                        духи (унисекс) 80ml tester</p>
                    <p class="popular-collections__price">14848р</p>
                    <button class="popular-collections__btn">В КОРЗИНУ <img src="content/images/icon-1.png" alt="Корзина"></button>
                </div>
            </div>
        </section>
        <section class="reviews">
            <p class="reviews__heading">Отзывы наших гостей</p>
            <div class="group-reviews">
                <div class="block-review">
                    <img src="content/images/logo-1.png" alt="Логотип">
                    <div class="group-block-review__text">
                        <div class="block-review-name-stars">
                            <p>Анна С</p>
                            <img src="content/images/stars.png" alt="Звезды">
                        </div>
                        <div class="block-review__description">
                            <p>Потрясающее место! Каждый <br> аромат в другую эпоху.</p>
                        </div>
                    </div>
                </div>
                <div class="block-review">
                    <img src="content/images/logo-2.png" alt="Логотип">
                    <div class="group-block-review__text">
                        <div class="block-review-name-stars">
                            <p>Екатерина Л</p>
                            <img src="content/images/stars.png" alt="Звезды">
                        </div>
                        <div class="block-review__description">
                            <p>Люблю сюда возвращаться. <br> Всегда можно открыть для <br> себя что то новое</p>
                        </div>
                    </div>
                </div>
                <div class="block-review">
                    <img src="content/images/logo-3.png" alt="Логотип">
                    <div class="group-block-review__text">
                        <div class="block-review-name-stars">
                            <p>Максим П</p>
                            <img src="content/images/stars.png" alt="Звезды">
                        </div>
                        <div class="block-review__description">
                            <p>Купил аромат “Восточные сны” - <br> невероятно стойкий и утонченный. <br> Отличный сервис
                                и упаковка!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="new-products">
            <img src="content/images/inp-5.png" alt="Почта">
            <div class="group-new-products__text">
                <p class="new-products__heading">Будьте в курсе новинок</p>
                <p class="new-products__text">Подпишись на рассылку , чтобы первыми узнать <br>
                    о новинках и специальных предложениях.</p>
            </div>
            <input class="new-products__input" type="email" placeholder="Ваш email">
        </section>

    </main>
</div>
<footer>
    <div class="footer-icons">
        <div class="group-footer-icons">
            <img src="content/images/icon-2.png" alt="Метка">
            <p>г. Санкт-Петербург, наб. реки Мойки, д.24</p>
        </div>
        <div class="group-footer-icons">
            <img src="content/images/icon-3.png" alt="Телефон">
            <p>+7 (912) 345 67 89</p>
        </div>
        <div class="group-footer-icons">
            <img src="content/images/icon-4.png" alt="Email">
            <p>help@site.com</p>
        </div>
    </div>
    <div class="footer-subscription">
        <p class="footer-subscription__heading">Подпишись на новости</p>
        <p class="footer-subscription__description">Узнавайте  первыми о новинках, акциях и <br> ароматных событиях</p>
        <input class="new-products__input" type="email" placeholder="Ваш email">
        <button class="footer-subscription__btn">Подписаться</button>
    </div>
</footer>
<script src="content/script/main.js"></script>
</body>
</html>м