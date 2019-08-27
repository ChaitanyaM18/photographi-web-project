<?php
$con = mysqli_connect('localhost','root','','fotografi');
$email="";
$headers="From: FotoGrafi.com";
if(!$con)
{
    echo 'not connected to the server';
}
if(isset($_POST['sub']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subj = $_POST['subj'];
    $msgj = $_POST['msgj'];
    $sql = "INSERT INTO `contact` (`name`, `email`, `subd`, `msgd`) VALUES ('$name', '$email', '$subj', '$msgj')";
    if(!mysqli_query($con,$sql))
    {
        echo 'not inserted';
    }
}

mail($email, "Contacting", "Thank you for Contacting Us", $headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>