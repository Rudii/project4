<?php
session_start();
    $recipient = $_POST['username'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];


    $con = mysqli_connect("0.0.0.0","rudii","","data");
    if(!$con){
        die("Connection failed: " . mysqli_error());
    }
    else {
        echo "Connection was successful!";
    }


        if (isset($_SESSION['username'])){
            $uid = "SELECT id FROM User WHERE username = '$_SESSION [username]' ";
            $recid = "SELECT id FROM User WHERE username = '$recipient'";
            
            $uidres = mysqli_query($conn, $uid);
            $recidres = mysqli_query($conn, $recid);
            
            //check to see if there is a recipient 
            
            if(mysqli_fetch_array($recid)==0){
                echo "Please enter a valid username";
            }
                else
                {
                   $temp = "INSERT INTO Message (body, subject, recipient_id) VALUES ($body, $subject, $recidres)" ; 
                   
                   if(mysqli_query($con, $temp)){
                       die("Please try again. The message was not inserted:" . mysqli_error($con));
                   }
                   
                    else{
                        echo "Message was successfully inserted";
                    }
                   }
                
                    
               } 
                else 
                
                
                
                {
                    mysqli_close($conn);
                    
                }
            
            
            
        
        

?>