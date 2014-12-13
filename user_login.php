<?php
        session_start();
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        $conn = mysql_connect("0.0.0.0", "rudii", "fingers1992");
        
        if(!$conn){
                die("Connection Failed:" . mysqli_connect_error() );
        }
        echo "Connection was successful";
        
        
        $sql = "SELECT * FROM User WHERE Username = '$username' and Password = '$password';";
        
        $result = mysql_db_query($conn, $sql);
        
        
        if (sizeof(mysql_fetch_array($result))==0){
                
                echo "Sorry there was a problem, please try again.";
        }
        else
        {
                $_SESSION['Username']= $username;
                
                echo "Great, you pass!";
        }
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
        