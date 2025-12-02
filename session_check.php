<?php 
    session_start();
    // if (isset($_SESSION["a"])) {
    //     echo "Session is set => " . $_SESSION["a"];
    // }else{
    //     echo "Session is not set";
    // }

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
        echo "You are still logged in.";
    }else{
        echo "You are not logged in.";
    }
?>