<?php
$title = 'О нас';
$base = '../';
require __DIR__ . '/../includes/header.php';
?>
    <main class="main-registration">
        <section class="registration">
            <form class="registration__form" action="#" method="post">
                <p class="registration-name">Музей Ароматов</p>
                <div class="group-input">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="group-input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="group-input">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="group-input">
                    <label for="confirm_password">Подтвердите пароль</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="btn-register_auth">Зарегистрироваться</button>
            </form>
            <img src="../content/images/img-register.png" alt="Духи">
        </section>
    </main>
</div>

<script src="../content/script/main.js"></script>
<?php require __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>