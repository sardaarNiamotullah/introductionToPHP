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
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 30px 350px;
    }

    .main {
        height: 90vh;
        text-align: center;
        background-color: #FFA1C9;
        color: #191A19;
        border-radius: 10px;
    }


    .welcome {
        margin-bottom: 50px;
        padding-top: 80px;
    }

    .code {
        margin-top: 20px;
        font-size: 20px;
        color: #DA1212;
    }

    .intro {
        display: block;
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

</style>
<body>
    <section class="main">

        <h1 class="welcome">
            <span class="intro">Assalamualikum,</span>
            <span class="intro">Let's play a game called Mad Libs!!!</span>
        </h1>

        <form action="madLibsGame.php" method="$_GET" autocomplete="off">
            <span>Please insert the name of your favourite color: </span> <br>
            <input type="text" name="color"> <br>
            <span>Please insert a pulral noun: </span> <br>
            <input type="text" name="noun"> <br>
            <span>Please insert the name of a person you love most: </span> <br>
            <input type="text" name="name"> <br>
            <p class="blank"></p>
            <hr>
            <input type="submit" value="Let's Play">
        </form>

        <div class="code">
        <?php
            if (empty($_GET["color"]) || empty($_GET["noun"]) || empty($_GET["name"])) {
            } else {
                $color = $_GET["color"];
                $noun = $_GET["noun"];
                $name = $_GET["name"];
                echo "Roses are $color,<br>$noun are blue,<br>I love you $name.";
            }
        ?>
        </div>

    </section>
</body>
</html>