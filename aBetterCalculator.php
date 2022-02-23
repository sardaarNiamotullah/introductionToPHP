<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Addition Calculator</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        padding: 10px 300px;
    }

    .main {
        height: 97vh;
        text-align: center;
        background-color: #B4CFB0;
        color: #191A19;
        border-radius: 10px;
    }
    .welcome {
        margin-bottom: 80px;
        padding-top: 80px;
    }

    .code {
        margin-top: 40px;
    }

    .intro {
        display: block;
        font-size: 20px;
    }
    .blank {
        height: 15px;
    }
    hr {
        width: 25%;
        align-items: center;
        margin-block-start: 0.5em;
        margin-block-end: 0.5em;
        margin-inline-start: auto;
        margin-inline-end: auto;
    }
    input {
        margin-top: 15px;
        margin-bottom: 15px;
        width: 70px;
    }
    input:last-child {
        width: 150px;
    }
    .result {
        color: red;
        margin-top: 20px;
        font-size: 50px;
    }

</style>
<body>
    <section class="main">

        <h1 class="welcome">
            <span class="intro">Assalamualikum,</span>
            <span class="intro">We can help to perfom some basic arithmetic operation!!!</span>
        </h1>

        <form action="aBetterCalculator.php" method="$_GET" autocomplete="off">
            <span>Please insert your 1st number: </span> <br>
            <input type="number" name="firstNumber" step="any"> <br>
            <span>Please insert your 2nd number: </span> <br>
            <input type="number" name="secondNumber" step="any"> <br>
            <span>Which operation do you want to perform? </span> <br>
            <input type="text" name="operand"> <br>
            <p class="blank"></p>
            <hr>
            <input type="submit" value="Perform Operation">
        </form>

        <div class="code">
        <?php
            if(empty($_GET["firstNumber"]) || empty($_GET["secondNumber"] || empty($_GET["operand"]))) {
            } else {
                switch ($_GET["operand"]) {
                    case "+":
                        $result = $_GET["firstNumber"] + $_GET["secondNumber"];
                        echo "<p>The result of the addition of your two number is:</p> <h1 class='result'>$result</h1>";
                        break;
                    case "-":
                        $result = $_GET["firstNumber"] - $_GET["secondNumber"];
                        echo "<p>The result of the subtraction of your two number is:</p> <h1 class='result'>$result</h1>";
                        break;
                    case "*":
                        $result = $_GET["firstNumber"] * $_GET["secondNumber"];
                        echo "<p>The result of the multiplication of your two number is:</p> <h1 class='result'>$result</h1>";
                        break;
                    case "/":
                        $result = $_GET["firstNumber"] / $_GET["secondNumber"];
                        echo "<p>The result of the division of your two number is:</p> <h1 class='result'>$result</h1>";
                        break;
                    case "^":
                        $result = pow($_GET["firstNumber"], $_GET["secondNumber"]);
                        $fN = $_GET["firstNumber"];
                        $sN = $_GET["secondNumber"];
                        echo "<p>The result of $fN<sup>$sN</sup> is:</p> <h1 class='result'>$result</h1>";
                        break;
                    default:
                        echo "Please enter a valid operand. <br> You can try: +, -, *, / and ^";
                }
            }
        ?>
        </div>

    </section>
</body>
</html>