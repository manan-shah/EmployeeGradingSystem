<?php
include('configa.php');
$id=$_POST['id'];
 $q =" SELECT * FROM `loginTable` WHERE `id`=$id";
  include('displayy.html');
?> 