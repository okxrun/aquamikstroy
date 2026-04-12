<?php include '../includes/header.php'; ?>

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