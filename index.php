<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <h1>Название компании</h1>

        <p>Короткое описание</p>
    </div>
</section>
<section class="products">
    <div class="container">
        <h2>Продукция</h2>
        <div class="consult-button">Получить консультацию</div>
        <a href=""><div>Продукция</div></a>
        <a href=""><div>Продукция</div></a>
        <a href=""><div>Продукция</div></a>
    </div>
</section>
<section class="about-us">
    <h2>О нас</h2>
    <p>Какая-то информация</p>
</section>
<section class="advantages">
    <h2>Преимущества</h2>
    <div class="container">
        <div class="advantage">Какое-то преимущество</div>
        <div class="advantage">Какое-то преимущество</div>
        <div class="advantage">Какое-то преимущество</div>
    </div>
</section>
<section class="mail">
    <div class="container">
        <h2>Оставьте заявку</h2>

        <form action="/php/mail.php" method="POST">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="phone" placeholder="Ваш телефон" required>
            <input type="email" name="email" placeholder="Ваша почта" required>
            <input type="text" name="message" placeholder="Сообщение" required>

            <button type="submit">Отправить</button>
        </form>
    </div>
</section>
<?php include 'includes/footer.php'; ?>