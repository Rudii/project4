<?php
    
    if(isset($_COOKIE['Username'])){
        $user = $_COOKIE['Username'];
        setcookie('Username', $user, time()+60);
        
        echo "You have successful logged out.";
    }



?>