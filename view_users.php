
<?php 
   
    
    $con=mysqli_connect("0.0.0.0","rudii", "" ,"data");
    if (!$con) {
	    echo "Connection failed";
	    return false;
    }

    if(isset($_SESSION['username'])){
	
		$userlist =  "SELECT * FROM user;";
		$userlistres = mysqli_query($con,$userlist);
		while($row=mysqli_fetch_array($userlistres)){
			$firstname= $row['first_name'];
			$lastname= $row['last_name'];
			$username= $row['username'];
			
			
            echo $firstname;
            echo $lastname;
            echo $username;
            

		
		}
		
		
	}else{
	    echo"Please check your connection or if you are logged in";
	}










?>

