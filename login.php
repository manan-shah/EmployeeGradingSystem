<?php
    
    
      include('config.php');


         $username=$_POST['username'];
        $password=$_POST['password'];
        if(!empty($username)  &&  !empty($password))//chking for incomplete information
        {

            $sql="Select * from user_details where username='$username' AND password='$password' ";

            if(mysqli_num_rows( mysqli_query($dbconn,$sql) )==1)
            {
                echo "Login successful";
                session_start();
                $_SESSION["currentuser"]="$username";
                header('Location:logged.html');   
				
				 
            }
            else
            {
                echo "<br>Incorrect username or password";
            }
        }
        else	
        {
            echo "<br>Incomplete information ";
        }
		
		
		
?>
