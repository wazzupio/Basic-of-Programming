<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        let words = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function getLength() {
            let number = document.getElementById("userAnswer").value;
            return parseInt(number);

        }

        function getRandomNumber(max) {
            return rand = Math.round(Math.random() * max);
        }

        function generate(){
            let length = getLength();

            for (let i = 0; i < length; i++) {
                let n = getRandomNumber(words.length);
                text = text + words[n];
            }

            write("Ваш пароль: " + text);
            hide("button");
            hide("userAnswer");
        }

    </script>
</head>

<body>

    <div class="content">
        <?php include "menu.php";?>

        <div class="contentWrap">
            <div class="center">

                <h1>Генератор случайных паролей</h1>

                <div class="box">

                    <p id="info">Введите длину желаемого пароля:</p>
                    <input type="text" id="userAnswer">
                    <br>

                    <a href="#" onclick="generate();" id="button">Сгенерировать</a>

                </div>
            </div>

            <div class="footer">
                Copyright &copy; GeekBrains
            </div>
        </div>
    </div>


</body>

</html>