<html>
    <head>
	<style>
table {
    border-collapse: collapse;
    width: 85%;
}

th, td {
    text-align: left;
    padding: 8px;
}
th:nth-child(even){background-color: black; color:white;}
th:nth-child(odd){background-color: black; color:white;}
tr:nth-child(even){background-color: #f2f2f2}

button {background-color: black; color:white;height:60px;width:200px;font-size: 200%;}
</style>

	<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
        <title>PERSONAL INFORMATION</title>
    </head>
    <body>
        <?php
            session_start();
            include ("config.php");
            $user=$_SESSION["currentuser"];
            $get_data="select name , age , gender , username from user_details where username='$user'";    
            $result=  mysqli_query($dbconn, $get_data);
     
        ?>
         <br><br><center><button class="button button2" onclick=window.open("/e/","_self")>LOGIN</button><center>
       <?php session_destroy(); ?>
    </body>
</html>