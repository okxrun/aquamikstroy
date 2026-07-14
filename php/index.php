<?php include '../includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <h1>АкваМикСтрой</h1>

        <p>Короткое описание</p>
    </div>
</section>
<section class="hero-slider">
    <div class="slider-left">
        <div class="slider-menu">
            <button class="menu-item active" data-index="0">
                Продукт 1
            </button>
            <button class="menu-item" data-index="1">
                Продукт 2
            </button>
            <button class="menu-item" data-index="2">
                Продукт 3
            </button>
            <button class="menu-item" data-index="3">
                Продукт 4
            </button>
            <button class="menu-item" data-index="4">
                Продукт 5
            </button>
        </div>
        <div class="slider-controls">
            <button id="prev">←</button>
            <button id="next">→</button>
        </div>
    </div>
    <div class="slider-right">
        <img id="slider-image" src="../assets/img/slide1.jpg" alt="">
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

<?php include '../includes/footer.php'; ?>