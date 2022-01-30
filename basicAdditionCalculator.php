<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Addition Calculator</title>
</head>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: white;
        padding: 30px;
        font-weight: bold;
    }
    header {
        text-align: center;
        height: 20vh;
    }
    .main {
        text-align: center;
    }
    .intro {
        display: block;
        font-size: 20px;
    }
    .blank {
        height: 5px;
    }
    hr {
        width: 30%;
    }
    input {
        margin-top: 15px;
        margin-bottom: 15px;
        width: 70px;
    }

</style>
<body>
    <header>
        <h1>
            <span class="intro">Assalamualikum</span>
            <span class="intro">We can help you to add two numbers</span>
        </h1>
    </header>
    <section class="main">
        <form action="basicAdditionCalculator.php" method="$_GET">
            <span>Please insert your 1st number: </span> <br>
            <input type="number" name="firstNumber"> <br>
            <span>Please insert your 2nd number: </span> <br>
            <input type="number" name="secondNumber"> <br>
            <p class="blank"></p>
            <hr>
            <input type="submit">
        </form>
    </section>
    <section class="result">
        <p>The addition of your two numbers is: 
            <?php 
                echo ($_GET["firstNumber"] + $_GET["secondNumber"]);
            ?>
        </p>
    </section>
</body>
</html>