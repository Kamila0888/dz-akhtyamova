<?php
$title = 'О нас';
$base = '../';
require __DIR__ . '/includes/header.php';
?>
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
            <span style="color:#ffc88b;">О музее</span>
            <p>
                <?php
                $text = 'Музей Ароматов - это место, где оживают истории через запахи. Мы бережно сохраняем наследие парфюмерного искусства и делимся им с вами';

                //Задание 1
                $words = explode(' ', $text);
                $colored_text = '';
                for ($i = 0; $i < count($words); $i++) {
                    if ($i % 2 == 0) {
                        $colored_text .= '<span style="color:#613700">' . $words[$i] . '</span> ';
                    } else {
                        $colored_text .= '<span style="color:#ffc88b">' . $words[$i] . '</span> ';
                    }
                }
                echo $colored_text;
                ?>
            </p>
        </div>
        <img src="content/images/img-2.png" alt="О музее">

        <div class="about-product-smell__text">
            <span class="about-product-smell__title" style="color: inherit;">Экспозиция ароматов</span>
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

    <?php
    $text_for_count = 'Музей Ароматов - это место, где оживают истории через запахи. Мы бережно сохраняем наследие парфюмерного искусства и делимся им с вами';

    //Задание 2
    $vowels_list = 'аеёиоуыэюя';
    $count_vowels = 0;
    for ($i = 0; $i < mb_strlen($text_for_count); $i++) {
        if (strpos($vowels_list, mb_substr($text_for_count, $i, 1)) !== false) {
            $count_vowels++;
        }
    }

    //Задание 3
    $count_words = count(explode(' ', $text_for_count));
    ?>

    <div style="text-align: right; margin: 20px 0; font-size: 14px; font-family: Arial, sans-serif;">
        <p>Количество гласных букв: <b><?php echo $count_vowels; ?></b></p>
        <p>Количество слов: <b><?php echo $count_words; ?></b></p>
    </div>

</main>
</div>
<script src="content/script/main.js"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
</body>
</html>