<?php

class game
{
public $id	= null;	 
public $name = NULL;	 
public $image_url = NULL;	 
public $description = NULL;
public $rating = NULL;	 
public $released_at = NULL;	 
}

public static function getAllGames()
{
    $query = "
        SELECT *
        FROM `game`
        ORDER BY `game`.`name` ASC
        ";

$statement = database::query($query);

$statement->setFetchMode(PDO::FETCH_CLASS, 'game');

return = $statement->fetchAll();
}

//below is the same as above 3 lines**********

// $results = $statement->fetchAll();

// $games = [];

// foreach($results as $game_array)
// { 

//     $game = new game();

//     $game->id =                 $game_array['id'];
//     $game->name =               $game_array['name'];
//     $game->image_url =          $game_array['image_url'];
//     $game->description =        $game_array['description'];
//     $game->rating =             $game_array['rating'];
//     $game->released_at =        $game_array['released_at'];

//     $games[] = $game;

// }

// return $games;




// }

