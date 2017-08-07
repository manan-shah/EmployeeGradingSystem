<?php
$result=mysqli_query($conn,$q);
if(  mysqli_num_rows($result) > 0 ){
        while($row= mysqli_fetch_assoc( $result ))
          {
            echo
            "<table border=5 width=723 height=50>
            <tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['date']}</td>
              <td>{$row['Tpr']}</td>
              <td>{$row['Tach']}</td>
              <td>{$row['percentage']}&nbsp;%</td>
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

//header('Location: welcome.php');
print "<button onclick=\"window.location.href='/e/logged.html'\">Go Back</button>";

?>