<?php
class libro
{

    var $NOMBRE;
    var $ISBN;
    var $autor;
    var $editor;
}
$book = new libro;

$book->NOMBRE   = 'Crónica del primer amor <br> ';
$book->ISBN     = '978612476768 <br>';
$book->autor    = 'Samuel Cardich <br>';
$book->editor   = 'Ediciones Condorpasa <br>';

echo $book->NOMBRE;
echo $book->ISBN ; 
echo $book->autor ;  
echo $book->editor ;
?> 