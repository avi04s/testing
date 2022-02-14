<?php

    include_once('Database.php');

    $db = new Database();
    $con = $db->getConnection();

    echo boolval($con); 

    if($con){
        echo "Success";
    }
    else{
        echo "failed";
    }

?>