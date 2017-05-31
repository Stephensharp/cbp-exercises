
<?php

    class piece {
        protected $type = null;
        protected static $images = array(
    'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
    'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
    'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
    'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
    'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
    'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
    'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
    'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
    'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
    'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
    'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
    'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    );

    public function __construct($type)
    {

        $this->type = $type;

// 3.

// To the class piece add the __toString method.

// It will return a string containing HTML for an <img> tag.

// The src attribute of the image will be a value from the $images static property with the key of the (non-static) property $type.

    }
    public function __toString()
{
    return '<img src="' . static::$images[$this->type] . '" />'; // enhance this
}
    // public function __toString()
    // {
    //     return '<img src="http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png">' ;
    // }
    }

$black_pawn = new piece('K');
$black_pawn = new piece('Q');
$black_pawn = new piece('B');
$black_pawn = new piece('N');
$black_pawn = new piece('R');
$black_pawn = new piece('P');

$white_queen = new piece('k');
$white_queen = new piece('q');
$white_queen = new piece('b');
$white_queen = new piece('n');
$white_queen = new piece('r');
$white_queen = new piece('p');
echo $black_pawn;
echo $white_queen;

    class square {

        protected $x_coord = null;
        protected $y_coord = null;
        protected $piece = null; 

    public function __construct($x, $y, $piece = null){

        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;               // HONZA//
    }
    protected function isDark(){

            if(
                ($this->x_coord%2 ==0) && ($this->y_coord%2== 0) 
                || ($this->x_coord%2 ==1) && ($this->y_coord%2== 1)
                )
            { 
                return true;
        }
        else
        {
            return false;
        }

    }
             function __toString(){                /////////////////////////////////////////////////////////////////

        if ($this->isDark()){                   //how you call a method //

            return '<div class= "light"   >' . $this->piece. '</div>';  ////////////////////////////////////////////////

        }else 
        {
            return '<div class= "dark"   >' . $this->piece. '</div>';
        }
    }
}

$a2 = new square(1, 2);
$b2 = new square(2, 2, $white_queen);
$c2 = new square(3, 2, $black_pawn);
$d2 = new square(4, 2);
echo $a2;
echo $b2;
echo $c2;
echo $d2;
?>

<style>

body{
    background-color: skyblue;
}
/*.light{
        background-color: darkblue;
}
.dark{
        background-color: lightgreen;
}*/
</style>