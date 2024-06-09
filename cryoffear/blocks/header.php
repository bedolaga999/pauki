<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akromant store</title>
        <link rel="stylesheet" type="text/css" href="../../css/main.css?2">
</head>

<body>
    <header class="container">
            <span class="logo">Akromantt</span>
            <button class="menu-toggle" aria-label="Toggle navigation">☰</button>
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="catalog.php">Каталог</a></li>

                    <?php
                    if(isset($_COOKIE['login']))
                    {
                        echo '<li><a href="user.php">Личный кабинет</a></li>
                        <li class="btn"><a href="cart.php">Корзина</a></li>
                        <li class="btn"><a href="order-item.php">Заказы</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="reg.php">Регистрация</a></li>
                        <li><a href="login.php">Вход</a></li>';
                    }
                    ?>

                    
                </ul>
            </nav>
        </header>

        <script src="../../js/script.js"></script>

</body>
