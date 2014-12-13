<?php
$user_id=$_POST["user_id"];
$password=$_POST["password"];

if ($user_id!=NULL && $password!=NULL)
{
	//The host and other arguments are placeholders to guide you on what to put.
	$con=mysqli_connect("127.0.0.0","rudii","","data");

	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_errno($con).'<br/>';
	}
	else
	{
		$sql="SELECT user_id,recipient_id,subject,body FROM
			Message WHERE user_id ='".$user_id."';" ;

		$result=mysqli_query($con,$sql);
		$result2;
		$from;
		$to;

		echo "<ul>";
		while ($row = mysql_fetch_array($result))
		{
		     $sql= "SELECT firstname FROM User WHERE user_id='".$row['user_id']."';";
		     $result2=mysqli_query($con,$sql);
		     $from = $result2;
		     $sql= "SELECT firstname FROM User WHERE user_id='".$row['recipient_id']."';";
		     $result2=mysqli_query($con,$sql);
		     $to = $result2;
		     echo "<li>'".$to."'<br/>".$from."<br/>Subject:".$row['subject'] . "<br/><br/>" . $row['body'] . "</li>";
		}

		echo "</ul>";

		mysqli_close($con);
	}
}

?>
