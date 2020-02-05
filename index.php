<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
// evolution-chain/1/


$homepage = file_get_contents('https://pokeapi.co/api/v2/pokemon/' . ($_GET['subject']));


$data = json_decode($homepage, true);


$moves = $data["moves"];
$randMoves = array_rand($moves, 4);

//$apiInput = $_GET["apivalue"];
//echo $apiInput;

////   echo($name) . "<br>";
// }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Pokedex</title>
</head>
<body>

<div class="container">


    <form name="form" action="" method="get">
        <input type="text" name="subject" id="azeaze" value="Enter pokemon ID or name.">
    </form>


    <div class="d-flex" id="pokedex">

        <div>

            <div class="bg-success" id="pokemonSprite" style="height: 200px; width: 200px">
                <div id="innerBox">
                    <img alt="" id="sprite" src="<?php echo  ($data["sprites"]["front_default"]); ?>">
                </div>
            </div>
            <div class="d-flex flex-column justify-content-between">
                <p>Name: <span
                            id="pokemonNameHTML"></span>
                    <?php echo  ($data["name"]); ?>
                </p>
                <p>ID: <span id="pokemonIdHTML"></span>
                    <?php echo  ($data["id"]); ?>
                </p>
            </div>
        </div>
        <div class="flex-column">
            <p class="p-3 border" id="move1">
                <?php echo  ($moves[$randMoves[0]]["move"]["name"]); ?>

            </p>
            <p class="p-3 border" id="move2">

                <?php echo  ($moves[$randMoves[1]]["move"]["name"]); ?>
            </p>
            <p class="p-3 border" id="move3">

                <?php echo  ($moves[$randMoves[2]]["move"]["name"]); ?>
            </p>
            <p class="p-3 border" id="move4">
                <?php echo  ($moves[$randMoves[3]]["move"]["name"]); ?>
            </p>

        </div>
    </div>

    <div id="chainDiv">

        <div class="d-flex justify-content-between p-3 m-3 bg-danger" id="chain1">
            <div>
                <h2 id="nameChain1"></h2>
                <img alt="" id="spriteChain1">
            </div>
            <div>

                <div id="chain2">
                    <h2 id="nameChain2"></h2>
                    <img alt="" id="spriteChain2">
                </div>
            </div>

            <div>

                <div id="chain3">
                    <h2 id="nameChain3"></h2>
                    <img alt="" id="spriteChain3">
                </div>
            </div>

            <div id="chain4">
                <h2 id="nameChain4"></h2>
                <img alt="" id="spriteChain4">
            </div>

            <div id="chain5">
                <h2 id="nameChain5"></h2>
                <img alt="" id="spriteChain5">
            </div>
            <div id="chain6">
                <h2 id="nameChain6"></h2>
                <img alt="" id="spriteChain6">
            </div>

            <div id="chain7">
                <h2 id="nameChain7"></h2>
                <img alt="" id="spriteChain7">
            </div>
            <div id="chain8">
                <h2 id="nameChain8"></h2>
                <img alt="" id="spriteChain8">
            </div>

        </div>

    </div>

    <script src="script.js"></script>
    <script crossorigin="anonymous"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script crossorigin="anonymous"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script crossorigin="anonymous"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>