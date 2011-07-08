
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP Mongo App</title>
<link rel="stylesheet" type="text/css" href="templates/view.css" media="all">
<script type="text/javascript" src="templates/view.js"></script>
</head>
    <body>
<?php

//echo $_POST["element_1"];
require_once 'connect.php';
$topic_title = $_POST["element_1"];
$topic_classifcation = $_POST["element_2"];
$topic_decription = $_POST["element_3"];
$collection = $db->selectCollection('topic');
$document_topic = array(
    'title'=>$topic_title,
    'classification'=>$topic_classifcation,
    'description'=>$topic_decription
);
$safe_insert = true;

try{
    $collection->insert($document_topic, $safe_insert);
     echo "<h2>"."Insertion Successful :)!"."</h2>";
}
 catch (Exception $e){
      echo 'Caught exception: ',  $e->getMessage(), "\n";
     
 }


?>
    </body>
</html>