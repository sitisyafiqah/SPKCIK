<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
	
	$host = 'localhost';
  $user = 'root';
  $pass = '';
  mysql_connect($host, $user, $pass);
  mysql_select_db('spkcik');
	
 $.ajax({
 type: 'post',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
	
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>Select state</option>
  <?php
  

  $select=mysql_query("select parlimen from kigsb_parlimen group by parlimen");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['parlimen']."</option>";
  }
 ?>
 </select>

 <select id="new_select">
	 <?php
	  $parlimen = $_POST['get_option'];
 $find=mysql_query("select dun from kigsb_parlimen where parlimen='$parlimen'");
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['dun']."</option>";
 }
	 
	 ?>
 </select>
	  
</div>     
</center>
</body>
</html>