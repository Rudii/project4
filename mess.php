<?php
session_start();
    $recipient = $_POST['username'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];


    $con = mysql_connect("0.0.0.0","rudii","","data");
    if(!$con){
        die("Connection failed: " . mysql_error());
    }
    else {
        echo "Connection was successful!";
    }


        if (isset($_SESSION['username'])){
            $uid = "SELECT id FROM User WHERE username = '$_SESSION [username]' ";
            $recid = "SELECT id FROM User WHERE username = '$recipient'";
            
            $uidres = mysql_query($conn, $uid);
            $recidres = mysql_query($conn, $recid);
            
            //check to see if there is a recipient 
            
            if(mysql_fetch_array($recid)==0){
                echo "Please enter a valid username";
            }
                else
                {
                   $temp = "INSERT INTO Message (body, subject, recipient_id) VALUES ($body, $subject, $recidres)" ; 
                   
                   if(mysql_query($con, $temp)){
                       die("Please try again. The message was not inserted:" . mysql_error($con));
                   }
                   
                    else{
                        echo "Message was successfully inserted";
                    }
                   }
                
                    
               } 
                else 
                
                
                
                {
                    mysql_close($conn);
                    
                }
            
            
            
        
        

?>