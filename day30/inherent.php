<?php

class vahicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;


public function travel($distance)
{
    return $distance / $this->$average_speed;
}

    // public static $nr_of_giraffes = 0;
    public static $list_of_giraffes = [];

    public static function getNrOfGiraffes()
    {
        // return static::$nr_of_giraffes;
        return count(static::$list_of_giraffes);
    }

    public static function getNrOfGiraffesInForest()
    {
        //number of giraffes found in forest = 0
        $nr_of_gs_in_f = 0;

        //for each giraffe in the list of giraffes
        foreach(static::$list_of_giraffes as $giraffe_object)
        {
            //if this giraffe is in the forest
            if ($giraffe_object->location == 'forest');
            {
                //raise number of giraffes found in forest by 1
                  $nr_of_gs_in_f++;
        }  
    }
    return $nr_of_gs_in_f;
    }

    public function __construct($name, $location = 'forset')
    {
        // a giraffe is born
        $this->name = $name;   //it is given a location
        $this->location = $location; //it is given a location for birth

        // static::$nr_of_giraffes ++;
        static::$list_of_giraffes[] = $this;

    }
        public function eat()
    {
        $this->is_hungry = false;
    }

        public function drink()
    {
        $this->is_thirsty = false;
    }

        public function sleep()
    {
        $this->is_hungry = true;
        $this->is_thirsty = true;
    }
        public function goTo($location)
        {
            $this->location = $location;
        }
}