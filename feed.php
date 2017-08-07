<!DOCTYPE html>
<html>
<head>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
    		 <style>

body {
  background: #333438; /* fallback for old browsers */
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
   color:#dcdde2;
   font-size: 20px;
   margin-top: 1.25cm;
}

.button {
  display: inline-block;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  margin: 1px;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 16px 24px;
    margin: 4px 2px;
	 width: 400px;;
	 border:none;
}

input[type=text],[type=password],[type=number],[type=email],[type=date] {
    padding: 16px 32px;
    margin: 4px 2px;
}

j{
font-size: 30px;
}

h1{
font-size: 40px;
}
hr{
width:50%;
}
k{
font-size: 20px;
}




    </style>
    
<title>
Login to join.
</title>


</head>
<body  alink="orange" vlink="yellow">

<br><br><br>
<center>
    <div class="well">
<h1>Enter employee information </h1>

</center>
<form id="pwd" action="pass-check.php"  method="post">
<center>
<b><font color="black">Emp id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</font></b><input id="text" type="number" name="id" required></br>
<b><font color="black">Emp name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</font></b><input id="text" type="text" name="name" required></br>
<b><font color="black">Date of joining&nbsp;&nbsp;&nbsp;&nbsp;</font></b><input type="date" id="text"  name="date" required></br>
<b><font color="black">Target Provided:</font></b><input id="text" type="number" name="Tpr" required></br>
<b><font color="black">Target Achieved:</font></b><input id="text" type="number" name="Tach" required></br>



<input id="submit" type="submit" name="submit" value="submit">
<!--<select name="List Employees">
  <option value="pls">--SELECT EMP BY GRADE--</option>
  <option value="All Employees"><a href="retr.php">ALL</a></option>
  <option value="S Grade"><a href="s.php">S grade</a></option>
  <option value="A Grade"><a href="a.php">a grade</a></option>
  <option value="B Grade"><a href="b.php">b grade</a></option>
  <option value="C Grade"><a href="c.php">c grade</a></option>
  <option value="D Grade"><a href="d.php">d grade</a></option>
</select>
<a href="retr.php">Retrieve the values</a>
<a href="s.php">S grade</a>
<a href="a.php">a grade</a>
<a href="b.php">b grade</a>
<a href="c.php">c grade</a>
<a href="d.php">d grade</a>
<a href="byid.html">IDDDDDDDDDDD</a>
<a href="byname.html">NAMEEEEEEEEEEEEEEEEE</a>
<a href="delnameinput.html">DELETE BY ID</a>
-->
<br/>
<a href="logged.html">GO BACK</a>
</div>

</center>
</form>


</body>
</html>



