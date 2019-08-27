<?php
$con = mysqli_connect('localhost','root','','fotografi');
$email="";
$headers="From: FotoGrafi.com";
if(!$con)
{
    echo 'not connected to the server';
}
if(isset($_POST['foot']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feed = $_POST['feed'];

    $sql = "INSERT INTO `feedback` (`name`, `email`, `feed`) VALUES ('$name', '$email', '$feed')";
    if(!mysqli_query($con,$sql))
    {
        echo 'not inserted';
    }
}

mail($email, "Feedback", "Thank you for your feedback", $headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>