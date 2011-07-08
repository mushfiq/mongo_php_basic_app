<?php

try{
    $connection = new Mongo();
    $db = $connection->selectDB('blog_post');
    
}
 catch (Exception $e){
     echo 'Caught exception: ',  $e->getMessage(), "\n";
 }
?>
