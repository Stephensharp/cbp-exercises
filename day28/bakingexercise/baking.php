<?php

require 'carrotcake.php';

$carrot_cake_far_jan = new carrot_cake('wheat', 'brown', 'chocolate');

var_dump($carrot_cake_for_jan);

$carrot_cake_far_atena = new carrot_cake('wheat', 'castor', 'cream');

var_dump($carrot_cake_for_atena);

var_dump(carrot_cake::$total_carrots_used);

var_dump(carrot_cake::$last_cake_baked_at);