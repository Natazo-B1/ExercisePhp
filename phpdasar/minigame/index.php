<?php
$servername = "localhost";
$database = "phpdasar";
$username = "STIGER-R1";
$password = "5678";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!isset($conn)) {
    echo "eroer";
} else {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="aqua">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header>
        <h1>Mini game</h1>
    </header>
    <div class="score-board">
        <div class="user-label">User</div>
        <div class="comp-label">Comp</div>

        <span class="user-score">0</span>:<span class="comp-score">0</span>



    </div>
    <div class="result">
        <h2 id="result">Gunting Lawan Batu. Kamu Kalah </h2>
    </div>
    <div class="choices">
        <div class="choice-rock" id="rock">
            <img src="../img/hand.png" alt="">

        </div>
        <div class="choice-paper" id="paper">
            <img src="../img/hello.png" alt="">

        </div>
        <div class="choice-sccissors" id="sccissors">
            <img src="../img/peace.png" alt="">

        </div>

    </div>
    <h2 class="action">Make your move.</h2>


    <script src="app.js"></script>
</body>

</html>