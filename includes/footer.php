</div>
<footer>
    <div class="footer-icons">
        <div class="group-footer-icons">
            <img src="<?php echo $base; ?>content/images/icon-2.png" alt="Адрес">
            <p>г. Санкт-Петербург, наб. реки Мойки, д.24</p>
        </div>
        <div class="group-footer-icons">
            <img src="<?php echo $base; ?>content/images/icon-3.png" alt="Телефон">
            <p>+7 (912) 345 67 89</p>
        </div>
        <div class="group-footer-icons">
            <img src="<?php echo $base; ?>content/images/icon-4.png" alt="Email">
            <p>help@site.com</p>
        </div>
    </div>
    <div class="footer-subscription">
        <p class="footer-subscription__heading">Подпишись на новости</p>
        <p class="footer-subscription__description">Узнавайте первыми о новинках, акциях и <br> ароматных событиях</p>
        <form class="footer-subscription__form" action="#" method="post">
            <input class="new-products__input" type="email" name="email" placeholder="Ваш email" required>
            <button class="footer-subscription__btn" type="submit">Подписаться</button>
        </form>
    </div>
</footer>
<?php
//Задание 4
$date_today = date('d.m.Y');
$days_left = (date('L') ? 366 : 365) - date('z');
?>
<div style="text-align: left; width: 100%; padding: 10px; background-color: #EAE5DE; color: #8B5A2B;">
    <p style="margin-bottom: 5px;">Сейчас: <b><?php echo $date_today; ?></b></p>
    <p>До Нового года: <b><?php echo $days_left; ?></b> дней</p>
</div>
</footer>
</footer>
<script src="<?php echo $base; ?>content/script/main.js"></script>
</body>
</html>
