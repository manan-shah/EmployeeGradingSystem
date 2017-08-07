<?php

          
	include('config.php');

   
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $username=$_POST['username'];
       
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
   
    if(empty($name))    { die ("enter your name<br>"); }
    if(empty($age))    { die("select your age<br>");}
    if($age<=0)    { die("enter valid age<br>");}
    if(empty($username))   { die("enter username<br>");}
    if(empty($password1))   { die("enter password<br>");}
    if(empty($password2))   { die("enter password<br>");}
    if($password1!=$password2)  { die("password mismatch<br>");}
    

    $email_chk = "select email from user_details where email='$email'";

    if (mysqli_num_rows( mysqli_query($dbconn,$email_chk) )!=0)
    {
        die("<br>EMAIL already registered <br>");
    }


    
    $query = "select username from user_details where username='$username'";

    if (mysqli_num_rows( mysqli_query($dbconn,$query) )!=0)
    {
        die("<br>Username already exists");
    }
      


    $confirmation_code=md5(uniqid(rand())); 



    $insert_query="INSERT INTO `user_details` (`username`, `password`, `age`, `gender`, `name`, `email`) VALUES ('$username', '$password2', '$age', '$gender', '$name', '$email')";
    mysqli_query($dbconn,$insert_query);
   /* if (mysqli_query($dbconn, $insert_query)) 
    {

        $msg="Hello ".$name."\n Thankyou for choosing us\n";
        $subject="EGS \n Welcome to EGS";
        $sentmail=mail($email,$subject,$msg);

        if($sentmail)
        {
             echo "Your Confirmation link Has Been Sent To Your Email Address.";
        }
        else 
        {
             echo "Cannot send Confirmation link to your e-mail address";
        }

        echo "<br><button onclick=\"window.location.href='/e/index.html'\">LOGIN</button>";
    } 
    else 
    {
        die("Error: " . $insert_query . "<br>" . mysqli_error($dbconn));
    }
*/
    echo "<br><button onclick=\"window.location.href='/e/index.html'\">LOGIN</button>";
?>
