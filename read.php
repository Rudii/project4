

<?php 
 session_start();
 
    $messageid = $_REQUEST['id'];
    $messagesender = $_REQUEST['sender'];
    $flag = $_REQUEST['flag'];
    $con=mysqli_connect("0.0.0.0","rudii", "" ,"data");
    if (!$con) {
    	echo "Connection failed";
    	return false;
    }
    
    
		    
		else{
			
				if($flag == 1){
				 $useridstring=  "SELECT id FROM user WHERE username = '$current_user'";
				    $useridquery = mysqli_query($con,$useridstring);
				    while($row2=mysqli_fetch_array($useridquery)){
				        $date = date("Y/m/d");
				        $userid=$row2['id'];
				        $sql= "INSERT INTO message_read (message_id,reader_id,date) VALUES ('$messageid','$userid','$date');";
				        if (!mysqli_query($con,$sql)){
		  					    //die('Error: ' . mysqli_error($con));
		  					    echo "ERROR";
		  				}
		
				    }
				    
				}
	}
	
	    
	    
    

?>
