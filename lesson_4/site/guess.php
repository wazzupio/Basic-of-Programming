<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        let answer = parseInt(Math.random() * 100);
        let tryCount = 0;
        let maxTryCount = 3;

        function readInt() {
            let number = document.getElementById("userAnswer").value;
            return parseInt(number);

        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function guess() {
            tryCount++;
            let userAnswer = readInt();
            if (userAnswer == answer) {
                write("<b>Поздравляю, вы угадали!</b>");
                hide("userAnswer");
                hide("button");
            } else if (tryCount >= maxTryCount) {
                write("Вы проиграли<br>Правильный ответ: " + answer);
                hide("userAnswer");
                hide("button");
            } else if (userAnswer < answer) {
                write("Вы ввели слишком маленькое число<br>Попробуйте еще раз<br>Осталось попыток: " + (maxTryCount - tryCount) + "<br>Угадайте число от 1 до 100");
            } else if (userAnswer > answer) {
                write("Вы ввели слишком большое число<br>Попробуйте еще раз<br>Осталось попыток: " + (maxTryCount - tryCount) + "<br>Угадайте число от 1 до 100");
            }

        }
    </script>
</head>

<body>

    <div class="content">
        <?php include "menu.php";?>

        <div class="contentWrap">
            <div class="center">

                <h1>Игра угадайка</h1>

                <div class="box">

                    <p id="info">Угадайте число от 1 до 100. У Вас есть 3 попытки.</p>
                    <input type="text" id="userAnswer">
                    <br>

                    <a href="#" onclick="guess();" id="button">Начать</a>

                </div>
            </div>

            <div class="footer">
                Copyright &copy; GeekBrains
            </div>
        </div>
    </div>


</body>

</html>