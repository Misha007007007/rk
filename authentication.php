<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Андрейцев Михаил 211-361</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header id = "header" class="header">
        <ul class = "menu">
            <li>
                <a href="index.php">
                    Назад
                </a>
            </li>
        </ul>
    </header>

    <section id = "about" class="about">
        <div class="authentication" id = "authentication">
            <form action="aunth.php" method="post">
                <p><b>Авторизация</b></p>
                <b>Логин:</b>
                <input type="text" size="41" name="login">
                <p>
                    <strong>Пароль:</strong>
                    <input type="password" maxlength="20" size="39" name="password">
                </p>
                <input type="submit" plaseholder = "Авторизоваться"> <br>
                <a href = "reg.php">Зарегистироваться</a>
            </form>
        </div>
    
    </section>

    <footer id = "footer" class="footer">
        <div class="container">
            
            <li>
                Для связи с нами Вы можете заполнить форму обратной связи или воспользоватья телеоном или почтой: Телефон: 8-777-777-77-77 Email: 777@yandex.ru
            </li>
        </div>
    </footer>
</body>
</html>