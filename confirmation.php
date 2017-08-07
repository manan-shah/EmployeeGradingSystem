<?php

include('config.php');


$confirm_code=$_GET['confirm_code'];


$sql1="select * from temp_user_details where confirmation_code='$confirm_code' ";
$result1=mysqli_query($dbconn,$sql1);

if($result1)
{
    $count=mysqli_num_rows($result1);
    if($count==1)
    {
        $rows=mysqli_fetch_array($result1);
	$name=$rows['name'];
	$age=$rows['age'];
	$gender=$rows['gender'];
	$email=$rows['email'];
	$username=$rows['username'];
	$password=$rows['password'];

	$sql2="insert into user_details values('$username', '$password', $age , '$gender' , '$name' , '$email')";
	$result2=mysqli_query($dbconn,$sql2);
	}
	else 
	{
		echo "Wrong Confirmation code";
	}

	if($result2)
	{
		echo "Your account has been activated";
                $msg="Congratulations \n Your account has been activated ";
                $subject="Activation Successful";
                mail($email,$subject,$msg);


		$sql3="delete from  temp_user_details where confirmation_code = '$confirm_code' ";
		$result3=mysqli_query($dbconn,$sql3);
	}
}
?>