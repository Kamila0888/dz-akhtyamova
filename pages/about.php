<?php
$title = 'О нас — Музей Ароматов';
$base = '../';
require __DIR__ . '/../includes/header.php';
?>
    <main class="main-about">
        <section class="block-about">
            <h1 class="block-about__text">Команда магазина-музея «Музей Ароматов»</h1>
            <div class="group-block-about__cards">
                <div class="block-about__card">
                    <p class="block-about__role">Хранитель времени</p>
                    <img class="block-about__img" src="<?php echo $base; ?>content/images/ava-1.png" alt="Екатерина">
                    <p class="block-about__name">Екатерина</p>
                    <p class="block-about__description">Хранит коллекцию ароматов, <br> следит за экспонатами</p>
                </div>
                <div class="block-about__card">
                    <p class="block-about__role">Продавец-консультант</p>
                    <img class="block-about__img" src="<?php echo $base; ?>content/images/ava-2.png" alt="Дмитрий">
                    <p class="block-about__name">Дмитрий</p>
                    <p class="block-about__description">Консультирует посетителей, <br> продает сувениры</p>
                </div>
                <div class="block-about__card">
                    <p class="block-about__role">Режиссер атмосферы</p>
                    <img class="block-about__img" src="<?php echo $base; ?>content/images/ava-3.png" alt="Алина">
                    <p class="block-about__name">Алина</p>
                    <p class="block-about__description">Создает атмосферу, <br> оформляет выставочные залы.</p>
                </div>
            </div>
            <div class="group-block-about__icons">
                <div class="block-about__icons">
                    <img src="<?php echo $base; ?>content/images/pr-1.png" alt="Телеграм">
                    <img src="<?php echo $base; ?>content/images/pr-2.png" alt="Фейсбук">
                    <img src="<?php echo $base; ?>content/images/pr-3.png" alt="Инстаграм">
                </div>
                <div class="block-about__icons">
                    <img src="<?php echo $base; ?>content/images/pr-1.png" alt="Телеграм">
                    <img src="<?php echo $base; ?>content/images/pr-2.png" alt="Фейсбук">
                    <img src="<?php echo $base; ?>content/images/pr-3.png" alt="Инстаграм">
                </div>
                <div class="block-about__icons">
                    <img src="<?php echo $base; ?>content/images/pr-1.png" alt="Телеграм">
                    <img src="<?php echo $base; ?>content/images/pr-2.png" alt="Фейсбук">
                    <img src="<?php echo $base; ?>content/images/pr-3.png" alt="Инстаграм">
                </div>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/../includes/footer.php'; ?>