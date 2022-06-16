
<a href="pokemon-challenge-php"></a>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>AJAX Pokédex</title>
</head>
<body>

<form class="input-text" action="" method="GET">
                Name: <input class="input" id="userInput" type="text" name="name" value="">
                <br>
                <input type="submit" id="btnNumbInput" value="">
            </form>
    <?php

    if (isset($_GET['name'])) {
 $pokemon = $_GET['name'];
 echo $pokemon;
  
           

            $api_url = "https://pokeapi.co/api/v2/pokemon/" . $_GET['name'];
            $json = file_get_contents($api_url);

            $data_res = json_decode($json, true);
            $name = $data_res['forms']['0']['name'];
           // echo $id;echo "<br>";
            $id = $data_res['id'];
            $image = $data_res['sprites']['front_default'];

        }
    ?>

            <div class="container">
                Id of the pokemon: <h4><?php if(isset($_GET['name'])) {
                 echo $id;
                } ?></h4>
            </div>


            <img src ="<?php
        if (isset($_GET['name'])) {
            echo $image;
        }?>">




</body>
</html>



