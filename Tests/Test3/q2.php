<!--Write a public static method setLocalCountry that would allow to set the value 
of the property local_country-->

<!--Continuing with the class address, write a __construct method that will take one 
argument - an array like this:-->

<!--The __construct method should set the values of the appropriate properties.

The array may have any, all or none of the keys above.

Only the values present in the array should be used to set the properties. The rest 
of the properties should be left alone.

Create 4 objects of the class address with the following data:-->

<?php

array(
'name' => 'Eberhard Wellhausen',
'street' => 'Schulstrasse',
'house_nr' => 4,
'city' => 'Bad Oyenhausen',
'country' => 'de',
'postal_code' => '32547'
);


class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;
    protected static $local_country = null;

    public static function setLocalCountry($local_country)
    {
        $this->local_country = $local_country;
        return (static::$local_country);
    }
    public static function __construct($array)
    {
        $this->array = $array;
}


?>

<!--Create 4 objects of the class address with the following data passed into the 
constructor:-->

<?php
[
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510'
    'country' => 'de'
];

[
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
];

[
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
];

[
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
];