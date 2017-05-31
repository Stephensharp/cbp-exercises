<?php

// request class

class carrot_cake

{
    public static $total_carrots_used = 0;
    public static $last_cake_baked_at = null;

    public $type_of_flour = null;
    public $type_of_sugar = null;
    public $topping = null;
    public $size = null;
    public $baked_at = null;

    public function __construct($type_or_flour = 'self raising', $type_or_sugar = 'brown', $topping = null, $size = '30cm')
    {
        //chop the carrots
        static::$total_carrots_used += 15;
        //mix everything together
        $this->type_of_flour = $type_of_flour;
        $this->type_of_sugar = $type_of_sugar;
        $this->topping = $topping;
        $this->size = $size;
        //voila - a carrot cake
        $this->baked_at = time();


        static::$last_cake_baked_at = time();
    }
}

