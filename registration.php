 
<?php
 // connect to the database
 include('sql_connect.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $firstname = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $lastname = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 $endemail = mysql_real_escape_string(htmlspecialchars($_POST['endemail']));
     
 
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 }
 else
 {
     $error = 'it worked';
 mysql_query("INSERT hermeslogin SET name='$firstname', password='$lastname', endemail='$endemail'")
 or die(mysql_error("cannot insert values")); 
 
 // once saved, redirect back to the view page
 header("Location: index.html"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 }
?>