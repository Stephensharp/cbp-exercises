<?php

require_once 'database.php';
require_once 'game.php';
require_once 'genre.php';

$games = game::getAllGames();

$game_ids = [];
foreach($games as $game)
{
    $game_ids[] = $game->id;
}

$genres = genre::getGenresForGames($game_ids);

var_dump($games);

var_dump($genres);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of games</title>
</head>
<body>

    <div class="game">
        <div class="image">
            <img src="http://static.metacritic.com/images/products/games/3/ce3b9fbd1b16661e2f249628c530c518-98.jpg" />
        </div>
        <div class="info">
            <h2 class="name">For Honor</h2>
            <div class="release">Released at: 2017-02-13</div>
            <div class="genres">
                <a href="#">Sci-fi</a>
                <a href="#">Fantasy</a>
            </div>
            <div class="description">
                </div>
            <div class="rating">77%</div>        
        </div>
    </div>

</body>
</html>