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
        background-color: #8BDB81;
        color: black;
        border-radius: 10px;
        position: relative;
    }


    .welcome {
        margin-bottom: 50px;
        padding-top: 80px;
    }

    .code {
        margin-top: 20px;
        font-size: 20px;
        color: black;
        position: absolute;
        display: block;
        top: 85%;
        width: 100%;
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
    .dataEntry {
        text-align: left;
        position: absolute;
        display: block;
        left: 38%;
    }
</style>
<body>
    <section class="main">

        <h1 class="welcome">
            <span class="intro">Assalamualikum,</span>
            <span class="intro">It's a simple HTML form powered by PHP!!!</span>
        </h1>

        <div class="dataEntry">
            <form action="checkbox.php" method="POST" autocomplete="off">
                <span>Plase take some fruits: </span> <br>
                <input type="checkbox" id="fruit" name="fruit[]" value="Apple"> Apple <br>
                <input type="checkbox" id="fruit" name="fruit[]" value="Banana"> Banana <br>
                <input type="checkbox" id="fruit" name="fruit[]" value="Orange"> Orange <br>
                <input type="checkbox" id="fruit" name="fruit[]" value="Strawberry"> Strawberry <br>
                <input type="checkbox" id="fruit" name="fruit[]" value="None"> None <br>

                <p class="blank"></p>
                <hr>
                <input type="submit" value="Enter">
            </form>
        </div>

        <div class="code">
        <?php
            if (empty($_POST["fruit"])) {}
            else { 
                $fruits = $_POST["fruit"];
                $flag = false;
                
                for ($x = 0; $x < count($fruits); $x++) {
                    if ($fruits[$x] == "None" && count($fruits) == 2) {
                        echo "You can not choose None and a fruit at the same time.";
                        $flag = true;
                        break;
                    }
                }

                if ($flag == false) {
                    for ($x = 0; $x < count($fruits); $x++) {
                        if ($fruits[$x] == "None" && count($fruits) > 2) {
                            echo "You can not choose None and some fruits at the same time.";
                            $flag = true;
                            break;
                        }
                    }
                }

                if ($flag == false) {
                    for ($x = 0; $x < count($fruits); $x++) {
                        if ($fruits[$x] == "None" && count($fruits) == 1) {
                            echo "You don't like fruits!<br> Strange!!!";
                            $flag = true;
                            break;
                        }
                    }
                }

                $flag2 = false;

                if ($flag == false) {
                    echo "Thanks for taking ";
                    if (count($fruits) == 1) {
                        echo "$fruits[0].";
                        $flag2 = true;
                    }
                    if ($flag2 == false) {
                        for ($x = 0; $x < count($fruits) - 1; $x++) {
                            echo "$fruits[$x], ";
                        }
                    }
                    if ($flag2 == false) {
                        echo $fruits[count($fruits) - 1];
                        echo ".";
                    }
                }
            }
        ?>
        </div>

    </section>
</body>
</html>