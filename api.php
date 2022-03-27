<?php 
use Fogg\Google\CustomSearch\CustomSearch; 
require 'CustomSearch.php'; 

//Initialize the search class 
$cs = new CustomSearch(); 

//Perform a simple search 
$response = $cs->simpleSearch( 'whole foods' ); 
?>