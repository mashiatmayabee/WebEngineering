<?php 

$query = $_POST["query"];

$newBook = file_get_contents('books.json');
$jsonfile = json_decode($newBook, true);
        
echo  $jsonfile; 


?>