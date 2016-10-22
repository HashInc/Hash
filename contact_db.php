<?php
$dbcon1=@mysql_connect("localhost","root","", true);
mysql_select_db('hashinc',$dbcon1);

if(!empty($_POST))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = mysql_query("INSERT INTO queries('name', 'phone', 'email', 'subect', 'message') values('$name', '$phone', '$email', '$subject', '$message'");
    header("Location:contact.php?name=$name#success");
}
    ?>