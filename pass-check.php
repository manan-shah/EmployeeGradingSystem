<?php

include('configa.php');

$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['date'];
$Tpr=$_POST['Tpr'];
$Tach=$_POST['Tach'];
$per=(($Tach/$Tpr)*100);

if ($per < "40") {
    $grade="D";
} elseif ($per>"40" && $per<="60") {
    $grade="C";
} elseif ($per>"60" && $per<="75"){
    $grade="B";
} elseif ($per>"75" && $per<="95"){
    $grade="A";
} else{
    $grade="S";
}
//mysqli_select_db($conn,"passcheck");
 $q =" INSERT INTO `logintable`(`id`, `name`, `date`, `Tpr`, `Tach` , `percentage` , `grade`) VALUES ($id,'$name','$date',$Tpr,$Tach,$per,'$grade')";
if(mysqli_query($conn,$q))
{
	echo "insertion successful";
}
else
{
	echo "insertion failure";
}

echo "Want to go back";
mysqli_close($conn);
print "<button onclick=\"window.location.href='/e/logged.html'\">Go Back</button>";

//header('Location: welcome.php');

?> 