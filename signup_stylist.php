<?php
$connect = mysql_connect(“localhost”, “kmcin”, “GlossyApp2”); 
if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“glossy”, $connect);

 $user_info = “INSERT INTO hairStylist (hairStylist_firstName, hairStylist_lastName, hairStylist_email, hairStylist_password, hairStylist_confirmpass) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]', '$_POST[confirmPassword]')”;  

if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); };

echo “Your information was added to the database.”;
mysql_close($connect); 
?>  