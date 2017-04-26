<?php define('DB_HOST', '127.0.0.1'); 
define('DB_NAME', 'test');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 $Sname = $_POST['name'];
$Susn = $_POST['usn'];
$Sdept = $_POST['dept'];
$Sevent = $_POST['event'];
$Sphone = $_POST['phone'];
$Scollege = $_POST['college'];
if($name != ''||$email !='')
 {}
 	$query = "insert into messages values('$Sname', '$Susn', '$Sdept', '$Sevent', '$Sphone', '$Scollege')',$connection);
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
 	$res = mysql_query($query);
}
 ?>