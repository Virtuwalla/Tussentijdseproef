<?php
require_once( 'class/Winkelmand.php'); // object beschikbaar maken in deze pagina

$items[1] = array('id' => 1, 'titel' =>'GSM 1', 'prijs'=>150, 'aantal' => 1);
$items[2] = array('id' => 1, 'titel' =>'GSM 2', 'prijs'=>170, 'aantel' => 1);
$items[3] = array('id' => 1, 'titel' =>'GSM 3', 'prijs'=>190, 'aantal' => 1);
$items[4] = array('id' => 1, 'titel' =>'GSM 4', 'prijs'=>210, 'aantal' => 1);

$product = htmlentities($_GET['item']);


/*
echo'<pre>';
print_r($_GET[$product]);
echo '<pre>';
die();
*
 */

   $winkelmand = new Winkelmand();
   $winkelmand->toevoegenAanMand($items[$product]);
 
   
   
   
   echo '<pre>';
    print_r($winkelmand->mandWeergeven());
    echo '<pre>';
    die();

?>
