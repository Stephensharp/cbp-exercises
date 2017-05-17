<?php

$movie_name = 'Arrival';

$ratings = [69, 95, 82];

foreach ($ratings as $rating){
 
}


$ratings = [
    'user642' => 69,
    'user643' => 95,
    'user644' => 82
    ];

$user_names = [
    'user642' => 'bob',
    'user643' => 'stuart',
    'user644' => 'kevin'
];

$user_name = $user_names ['user642'];

foreach ($ratings as $user_id => $rating)
{
echo  get_username($user_id) . 'gave' . $movie_name . $rating;
}

function get_username($user_id){
    global $user_names;
    return $user_names[$user_id];
}


function print_rating($rating){
    echo $rating . ' %';
}
