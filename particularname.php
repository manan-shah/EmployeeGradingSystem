<?php

include('configa.php');
$name=$_POST['name'];
$q =" SELECT * FROM `loginTable` WHERE `name`='$name'";
  include('displayy.html');
?> 