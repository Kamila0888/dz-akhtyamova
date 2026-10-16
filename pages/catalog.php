<?php
$title = 'О нас';
$base = '../';
require __DIR__ . '/../includes/header.php';
?>
    <main class="main-catalog">
        <section class="catalog">
            <div class="group-catalog-card">
                <img src="../content/images/cat-1.png" alt="духи">
                <p class="group-catalog_text">
                    Винтажные духи <br>
                    «Версаль, 1789»
                </p>
                <p class="group-catalog_description">Реплика придворного аромата <br> эпохи Людовика XVI</p>
                <p class="group-catalog_price">4500</p>
                <button class="btn-buy" type="button">Купить</button>
                <a class="btn-more btn-more__link" href="product.php">Подробнее</a>
            </div>
            <div class="group-catalog-card">
                <img src="../content/images/cat-2.png" alt="духи">
                <p class="group-catalog_text">
                    Набор «Путешествие в <br> Древний Египет»
                </p>
                <p class="group-catalog_description">Подарочный набор с <br> историческими ароматами</p>
                <p class="group-catalog_price">3200</p>
                <button class="btn-buy" type="button">Купить</button>
                <button class="btn-more" type="button">Подробнее</button>
            </div>
            <div class="group-catalog-card">
                <img src="../content/images/cat-3.png" alt="духи">
                <p class="group-catalog_text">
                    Мастер-класс «Создай <br> свой аромат»
                </p>
                <p class="group-catalog_description">Образовательная услуга + <br> создание персонального парфюма</p>
                <p class="group-catalog_price">4500</p>
                <button class="btn-buy" type="button">Купить</button>
                <button class="btn-more" type="button">Подробнее</button>
            </div>
            <div class="group-catalog-card">
                <img src="../content/images/cat-4.png" alt="духи">
                <p class="group-catalog_text">
                    Свеча «Средневековый <br> монастырь»
                </p>
                <p class="group-catalog_description">Интерьерная свеча с историческим <br> ароматом</p>
                <p class="group-catalog_price">1200</p>
                <button class="btn-buy" type="button">Купить</button>
                <button class="btn-more" type="button">Подробнее</button>
            </div>
        </section>
    </main>
</div>

<script src="../content/script/main.js"></script>
<?php require __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>