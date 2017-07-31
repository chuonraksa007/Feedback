<?php
$EMAIL = $_POST['email'];
$PASS = $_POST['pass'];

mysql_connect('host', 'root', '');
mysql_select_db('stock_management');
$results = mysql_query(sprintf("SELECT USERNAME, PASSWORD FROM `users`
WHERE PASSWORD=PASSWORD('$PASS')", 
mysql_real_escape_string($EMAIL))) or die(mysql_error()); 
while($row = mysql_fetch_assoc($results))
{$rows[1] = $row;} 
if(!($_COOKIE['pass'] == $rows[1][PASS])) 
//cookie is set while registering user , which is the decrypted(original) value of password.
{ die("Error occured"); } 
else { echo "Password entered is correct"; }

 ////.....my further code here.
  ?> 