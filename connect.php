<!DOCTYPE html>
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
        
        <div class="connection" id = "connection">
            <form action = "answer.php" method="post">
                <p><b>Обратная связь</b></p>
                
                <p><b>Имя:</b>
                    <input type="text" maxlength="30" size="40" name="login">
                </p>
                <p><b>Email:</b>
                    <input type="text" maxlength="30" size="40" name="login">
                </p>
                <p><b>Откуда вы узнали о нас</b></p>
                <input type="radio" id="contactChoice1"
                name="contact" value="email">
                <label for="contactChoice1">Рассказали друзья</label>
            
                <input type="radio" id="contactChoice2"
                name="contact" value="phone">
                <label for="contactChoice2">Реклама в социальных сетях</label>
            
                <input type="radio" id="contactChoice3"
                name="contact" value="mail">
                <label for="contactChoice3">Рассказали на улице</label>

                
                <p><b>Тип обращения</b></p>
                <select size="1" style="width: 100px;">
                    <option disabled>Выберети один вариант</option>
                    <option value="1">Похвала</option>
                    <option value="2">Благодарность</option>
                    <option value="3">Просто отправить мем</option>
                </select>

                <p><b>Введите текст обращения</b></p>
                <p><textarea rows="10" cols = "100" name="text"></textarea></p>
            
                <fieldset>  
                    <legend>
                        <input type="checkbox"> Даю согласие на обработку перональных данных <br>
                    </legend>
                <input type="submit">
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