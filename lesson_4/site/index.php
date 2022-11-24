<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="content">

    <?php include "menu.php";?>

        <h1>Личный сайт студента GeekBrains</h1>

        <div class="center">
            <img src="img/photo.png">
            <div class="box_text">
                <p>Добрый день. Меня зовут Антон. Я совсем недавно начал программировать, однако
                    уже написал свой первый
                    сайт.</p>

                <p>В этом мне помог IT-портал <a href="https://gb.ru">GeekBrains</a></p>

                <p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:
                    <a href="index.php">Главная,</a>
                    <a href="puzzle.php">Загадки,</a>
                    <a href="guess.php">Угадайка,</a>
                    <a href="guess_2.php">Угадайка для двух игроков,</a>
                    <a href="random_pass.php">Генератор паролей.</a>
                </p>
            </div>
        </div>

        <div class="footer">
            Copyright &copy; <?php echo date("Y");?> GeekBrains
        </div>
    </div>

</body>

</html>