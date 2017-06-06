<?php

class genre
{
public $id	= null;	 
public $name = NULL;	 
}

public static function getGenresForGames($game_ids)
{

    $game_ids_string = join(',', $game_ids);

    $query = "
        SELECT *
        FROM `genre`
        RIGHT JOIN `game_has_genre`
        ON `game_has_genre`.`genre_id` = `genre`.`id`
        WHERE `game_has_genre`.`game_id` IN (".$game_ids_string.")
        ";

$statement = database::query($query);

$statement->setFetchMode(PDO::FETCH_CLASS, 'genre');

$all_genres = $statement->fetchAll();

$genres_for_games = [];

foreach($all_genres as $genre)
{
    $genres_for_games[$genre->game_id][] = $genre;
}

return $genres_for_games;

}
}

//below is the same as above 3 lines**********

// $statement = database::query($query);

// $results = $statement->fetchAll();

// $genres = [];

// foreach($results as $genre_array)
// { 

//     $genre = new genre();

//     $genre->id =                 $genre_array['id'];
//     $genre->name =               $genre_array['name'];

//     $genres[] = $genre;

// }

// return $genre;