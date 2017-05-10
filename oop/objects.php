<?php
class car
{
    public $manufacturer = null;
    public $model = null;
    public $color = null;
    public $class = null;
    public $size = null;
    public $cost = null;


  public function go_fast()
  {
    echo 'Zoom!';
  }

  public function go_very_fast()
  {
    $this->position = 'sitting';
  }
}

$my_dog = new dog();
?> 
