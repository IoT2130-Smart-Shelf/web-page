<?php // Do not put any HTML above this line

include('includes/dbconfig.php');

$reference = $database->getReference('test');
echo "<h1>". $reference->getValue()."</h1>";
?>
