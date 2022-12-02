<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <?php
        $name = "Андрейцев Михаил 211-361";
        echo '<title>Андрейцев Михаил 211-361</title>'
    ?>
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header id = "header" class="header">
        <div class="container">
            <div class="nav">
                
                <ul class = "menu">
                    <li>
                        <a href="index.php">
                            Главная
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </header>

    <section id = "about" class="about">
        
    <?php
        include "databaseconnect.php";
        $sql = "SELECT * FROM `productsTable` WHERE id = 2";
        $result = mysqli_query($conn, $sql);

        //$sqlWeight = "SELECT weight FROM `Bears`";
        //$resultWeight = mysqli_query($mysql, $sqlWeight);

        if ($result == false){
            print("произошла ошибка при выполненнии запроса");
        }
        
    ?>

    <div class="table">
        <table border="2">
            <tr>
                
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Фото</th>
            </tr>
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    
                    <td ><?php echo($row['name']) ?></td>
                    <td ><?php echo($row['products']) ?></td>
                    <td ><?php echo($row['price']) ?></td>
                    <td ><img src = <?php echo($row['photo']) ?>></td>
                </tr>  
            <?php 
                }
            ?> 

           
            


       
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