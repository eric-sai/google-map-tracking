
<?php
//get the values from the event form;
echo 'Thanks for submitting member form.<br>';
$name=$_POST['firstname'] . '' . $_POST['lastname'];
$time=$_POST['time'];
$location=$_POST['location'];
$howmany=$_POST['howmany'];
$Description=$_POST['Description'];
$what=$_POST['what'];
$email=$_POST['email'];
$to ='540102751@qq.com';
//$db = new Database('localhost','root','','mydb')

//connect to the database and get information into the event table
$dbc=mysql_connect('localhost', 'root',null) 
//cannot connect to datbase server
or die('Error connecting to MySQL sever.');

mysql_select_db("mydb", $dbc)
or die('Error selection');
$data1 = mysql_query("insert into event (name, time, location,howmany, Description, what, email) VALUES('$name', '$time','$location', '$howmany','$Description','$what','$email')")
or die(mysql_error());
mysql_close($dbc);
//send client a email information about the event.
/*
$subject='Thanks for submitting member form of NearU';
$msg="Dear $name, \n" .
     "Thank you to  create an event. Your event will be held in  $location at $time. \n " .
     "You recommanded $howmany join your event" . 
     "Here is your description of your party: $Description \n". 
     "And here is the things that you hope your friend to bring: $what \n";
mail($to,$subject, $msg,'From:'. $email);
//cannot sent submitted information by mail.
*/

//report the information to the webpage.
echo 'Time:' .  $time . '<br/>';
echo 'Location:' .  $location . '<br/>';
echo 'How many people you want to invite:' .  $howmany . '<br/>';
echo 'Description your party:' .  $Description . '<br/>';
echo 'What thing you want friend to bring:' .  $what . '<br/>';
echo 'Your email address:' .  $email . '<br/>';



?>
