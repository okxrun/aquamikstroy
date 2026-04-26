<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">

    <title>АкваМикСтрой</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header class="header">
        <a href="/aquamikstroy/aquamikstroy/php/index.php" class="logo">
            АкваМикСтрой
        </a>
        <nav class="nav container">
            <ul class="menu">
                <li><a href="/aquamikstroy/aquamikstroy/php/index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Главная</a></li>
                <li><a href="/aquamikstroy/aquamikstroy/php/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">О нас</a></li>
                <li><a href="/aquamikstroy/aquamikstroy/php/services.php" class="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Услуги</a></li>
                <li><a href="/aquamikstroy/aquamikstroy/php/contacts.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : '' ?>">Контакты</a></li>
            </ul>
        </nav>
    </header>
