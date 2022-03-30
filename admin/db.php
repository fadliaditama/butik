<?php 

try{
    $conn = new mysqli('localhost','root','','db_butik');
} catch (Exception $e){ 
    echo $e->getMessage();
}
?>