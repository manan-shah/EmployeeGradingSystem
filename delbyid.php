<?php

include('configa.php');

$id=$_POST['id'];

 $q =" DELETE FROM `loginTable` WHERE `id`=$id";
$result=mysqli_query($conn,$q);

mysqli_close($conn);
 print "<button onclick=\"window.location.href='/e/logged.html'\">Go Back</button>";

//header('Location: welcome.php');

?> 