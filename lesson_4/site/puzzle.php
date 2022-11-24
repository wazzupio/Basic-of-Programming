<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="content">
        
    <?php include "menu.php";?>

        <div class="contentWrap">
            <div class="center">

                <h1>Игра в загадки</h1>

                <div class="box">

                    <?php

                        if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])){
                            $userAnswer = $_GET["userAnswer1"];
                            $userAnswer = mb_strtolower($userAnswer);
                            $score = 0;

                            if ($userAnswer == "компьютер" || $userAnswer == "комп"){
                                $score++;
                            }

                            $userAnswer = $_GET["userAnswer2"];
                            $userAnswer = mb_strtolower($userAnswer);

                            if ($userAnswer == "клавиатура" || $userAnswer == "клава"){
                                $score++;
                            }

                            $userAnswer = $_GET["userAnswer3"];
                            $userAnswer = mb_strtolower($userAnswer);

                            if ($userAnswer == "принтер"){
                                $score++;
                            }

                            echo "Количество правильных ответов: " . $score;
                        }  
                    ?>

                    <form method = "GET">
                        <p>Электронная машина,<br>Знает все о целом мире,<br>Все ответы на вопросы очень быстро может
                            дать.<br>Помогает всегда людям,<br>Называется ...</p>
                        <input type="text" name="userAnswer1">

                        <p>На ней кнопок очень много:<br>Алфавит и цифры есть.<br>Чтобы слово написать,<br>Нужно кнопки
                            нажимать</p>
                        <input type="text" name="userAnswer2">

                        <p>Печатаю буквы, рисую цветочки,<br>И фото для вас напечатаю срочно.<br>Стою на столе я в конторе и
                            дома.<br>Ну, что догадались? Со мной вы знакомы?</p>
                        <input type="text" name="userAnswer3">

                        <br>
                        <input type="submit" value="Ответить" name="">
                    </form>
                </div>
            </div>

            <div class="footer">
                Copyright &copy; GeekBrains
            </div>
        </div>
    </div>


</body>

</html>