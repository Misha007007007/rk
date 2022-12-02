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
                        <a href="#">
                            Главная
                        </a>
                    </li>

                    <li>
                        <a href="location.php">
                            Расположение магазинов
                        </a>
                    </li>

                    <li>
                        <a href="connect.php">
                            Обратная связь
                        </a>
                    </li>

                    <li>
                        <a href="authentication.php">
                            Личный кабинет
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section id = "about" class="about">
        <div class="container">
            <div class = "fig">
                <?php
                    $s = date('s');	
                    $os = $s % 3;	
                    
                    if ( $os === 0 ){	
                        $name='img/1.png'; 
                    }else if ( $os === 2 ){	
                        $name='img/2.png';
                    }else{	
                        $name='img/3.png';
                    }
                    
                    echo '<img src="'.$name.'" alt="Меняющаяся фотография">'; 
                ?>
            </div>
        </div>
    <?php
        include "databaseconnect.php";
        $sql = "SELECT * FROM `products`";
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
                <th>id</th>
                <th>Фотография</th>
                <th>Краткая информация</th>
                <th>Характеристики</th>
            </tr>
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td ><?php echo($row['id']) ?></td>
                    <td > <img src = <?php echo($row['photo']) ?>></td>
                    <td ><?php echo($row['description']) ?></td>
                    <td ><?php echo($row['characteristics']) ?></td>
                </tr>  
            <?php 
                }
            ?>
            
            <p>Посмотреть дополнительную информацию о <a href = "one.php">Первом, </a><a href = "two.php">Втором, </a><a href = "three.php">Третьем </a>устройстве</p>


            


       
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