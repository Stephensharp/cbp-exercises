



<?php

// $movies = [
//   'The Shawshank redemption',
//   'The Godfather',
//   'The Godfather II',
//   'Dark Knight', 
//   '12 angry men', 
//   'Schindler\'s list',
//   'Pulp fiction',
//   'Lord of the Rings: Return of the King',
//   'The good, the bad and the ugly',
//   'Fight club'
// ];

// sort($movies);

// $movie_names = [
//   'tt0111161' => 'The Shawshank redemption',
//   'tt0068646' => 'The Godfather',
//   'tt0071562' => 'The Godfather II',
//   'tt0468569' => 'Dark Knight', 
//   'tt0050083' => '12 angry men', 
//   'tt0108052' => 'Schindler\'s list',
//   'tt0110912' => 'Pulp fiction',
//   'tt0167260' => 'Lord of the Rings: Return of the King',
//   'tt0060196' => 'The good, the bad and the ugly',
//   'tt0137523' => 'Fight club'
// ];
// asort($movie_names);
// $movie_ratings = [
//   'tt0111161' => 9.2,
//   'tt0068646' => 9.2,
//   'tt0071562' => 9.0,
//   'tt0468569' => 8.9, 
//   'tt0050083' => 8.9, 
//   'tt0108052' => 8.9,
//   'tt0110912' => 8.9,
//   'tt0167260' => 8.9,
//   'tt0060196' => 8.9,
//   'tt0137523' => 8.8,
// ];


// $films = [];
// foreach($movie_names as $movie_id => $name)
// {
//     $films[$movie_id] = [
//         'name' => $name,
//         'rating' => $movie_ratings[$movie_id]
//     ];
// }
// var_dump($films);



$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];


// $calling = [];
// foreach($calling_codes as $country_id => $name)
// {
//     $calling[$calling_id] = [
//         'name' => $name,
//         'rating' => $country_names[$country_id]
//     ];
// }
// var_dump($calling);
// ?>


<h2>Calling</h2>
    <ol>
        <?php foreach($calling_codes as $country_id => $title) : ?>
        
            <li><?php echo $title; ?> (<?php echo $country_names[$country_id]; ?>)</li>
     
   
        <?php endforeach; ?>

    </ol>

</body>
</html>


<!--Write PHP code to loop through the array $calling_codes with the foreach loop and for each key and value print a line of text 
similar to this (replacing the country name and the number with the right values):

The calling code of USA is +1<br>

It should print 5 lines in total.-->

