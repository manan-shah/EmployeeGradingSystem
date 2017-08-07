<?php

include('configa.php');

 $q =" SELECT `id`,`Tpr`, `Tach`, `grade` FROM `logintable` WHERE 1";
$result=mysqli_query($conn,$q);
echo "<h2>Removed outliers which were not necessary for decision making</h2>";
if(  mysqli_num_rows($result) > 0 ){
        while($row= mysqli_fetch_assoc( $result ))
          {
            echo
            "<table border=5>
            <tr>
              <td>{$row['id']}</td>
			  <td>{$row['Tpr']}</td>
              <td>{$row['Tach']}</td>
              <td>{$row['grade']}</td>
            
            </tr></table>\n";
          } 
        }
        else
        {
        echo "<script>alert('No records available');</script>";
          
          }
//echo "Hello";
mysqli_close($conn);
 print "<button onclick=\"window.location.href='/e/logged.html'\">Go Back</button>";

//header('Location: welcome.php');

?> 