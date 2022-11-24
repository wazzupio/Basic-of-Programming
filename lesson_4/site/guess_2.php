<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        let answer = parseInt(Math.random() * 100);
        let player_1 = "Игрок №1";
        let player_2 = "Игрок №2";
        let player = player_1;
        let exit = "стоп";

        function readAnswer() {
            let answer = document.getElementById("userAnswer").value;
            answer = answer.toLowerCase();

            if (answer == exit) {
                return answer;
            }

            return parseInt(answer);
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function guess() {
            let userAnswer = readAnswer();
            if (userAnswer == answer) {
                write("<b>Поздравляю, вы угадали!\nПравильный ответ: " + answer + "\nПобедил: " + player + "</b>");
                hide("userAnswer");
                hide("button");
            } else if (userAnswer == exit) {
                write(player + " решил выйти из игры.\nИгра окончена.");
                hide("userAnswer");
                hide("button");
            } else if (userAnswer < answer) {
                if (player == player_1) {
                    player = player_2;
                } else {
                    player = player_1;
                }
                write("Вы ввели слишком маленькое число<br>Ходит: " + player + "<br>Угадайте число от 1 до 100");
            } else if (userAnswer > answer) {
                if (player == player_1) {
                    player = player_2;
                } else {
                    player = player_1;
                }
                write("Вы ввели слишком большое число<br>Ходит: " + player + "<br>Угадайте число от 1 до 100");
            }
        }
    </script>
</head>

<body>

    <div class="content">
        <?php include "menu.php";?>

        <div class="contentWrap">
            <div class="center">

                <h1>Игра угадайка для двух игроков</h1>

                <div class="box">

                    <p id="info">Угадайте число от 1 до 100.<br>Ходит: Игрок №1</p>
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