<?php
$title = 'О нас';
$base = '../';
require __DIR__ . '/../includes/header.php';
?>
    <main class="contact">
        <h1 class="visually-hidden">Контакты</h1>

        <section class="group-block-contact" aria-label="Контактная информация">
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-2.png" alt="Адрес">
                </div>
                <h2>Адрес</h2>
                <p>
                    г. Санкт-Петербург,<br>
                    наб. реки Мойки,<br>
                    д.24
                </p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-3.png" alt="Телефон">
                </div>
                <h2>Телефон</h2>
                <p>
                    +7 (912) 345 67 89<br>
                    Ежедневно с 10:00<br>
                    до 19:00
                </p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/icon-4.png" alt="Почта">
                </div>
                <h2>E-mail</h2>
                <p>
                    help@site.com<br>
                    Мы ответим вам<br>
                    в ближайшее время
                </p>
            </div>
            <div class="block-contact">
                <div class="card-icon">
                    <img src="../content/images/clock.png" alt="Время">
                </div>
                <h2>Режим работы</h2>
                <p>
                    Ежедневно<br>
                    с 10:00 до 19:00<br>
                    Касса закрывается<br>
                    за 1 час
                </p>
            </div>
        </section>

        <h2 class="location-title">Как нас найти</h2>

        <section class="group-map" aria-label="Карта и адреса">
            <div class="location-image">
                <img src="../content/images/карта.jpg" alt="Карта проезда">
            </div>
            <div class="location-info">
                <p>
                    Наш офис расположен<br>
                    в историческом центре города
                </p>
                <p>
                    г. Санкт-Петербург,<br>
                    наб. реки Мойки, д.24
                </p>
                <p>
                    г. Москва,<br>
                    ул. Арбат, 36/2
                </p>
                <p>
                    г. Москва,<br>
                    ул. Ильинка, 4
                </p>
            </div>
        </section>
    </main>
</div>


<script src="../content/script/main.js"></script>
<?php require __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>