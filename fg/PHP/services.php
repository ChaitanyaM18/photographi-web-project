<?php
$con = mysqli_connect('localhost','root','','fotografi');
$email="";
$sql="";
$headers="From: FotoGrafi.com";
if(!$con)
{
    echo 'not connected to the server';
}

if(isset($_POST['sub']))
{
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['phone'];
    $padd = $_POST['padd'];
    $eadd = $_POST['eadd'];
    $ser = $_POST['sel1'];
    $price  = $_POST['sel2'];
    $dt  = $_POST['dt'];
    $sql1 = "SELECT dt FROM form";
    $result = mysqli_query($con, $sql1);
    $row = array();
    $i = 0;
if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
               if($row['dt'] == $dt)
               {
                   echo "<script>
                        alert('Sorry we are booked on that day try using our chat service');
                       window.location.href='../services.html';
                           </script>";
               }

    }
} 
else {
//    echo "0 results";
}
    if(preg_match("/^[0-9]{10}$/", $ph)){
        $sql = "INSERT INTO `form`(`name`, `email`, `phone`, `padd`, `eadd`, `services`, `price`, `dt`) VALUES ('$name','$email','$ph','$padd','$eadd','$ser','$price','$dt')";
        if(!mysqli_query($con,$sql))
        {
            echo '!  Error this data did not reach our Server'.'<br>'.'<br>';
        }
        else{
            echo 'Booking with following data is in progress'.'<br>'.'<br>';
        }
    } 
    else{
        echo "<script>
        alert('Invalid Phone number');
        window.location.href='../services.html';
        </script>";
    }
       
}

// mail($email, "Order Placed", "We have received your request!!! we will get back to you soon", $headers);
?>
  
  <html lang="en">
  <head>
  <title>FotoGrafi</title>
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="IMAGES/icon2.png" type="image/gif">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="all.css">
      <style>
          body{
              background-color:#04091e;
              color:wheat;
          }
          p{
              font-size:100%;
              font-variant:small-caps;
          }
          .btn{
                font-size:80%;
                background-color:wheat;
                color:#04091e;
          }
      </style>
  </head>
  <body>
    NAME :<p><?php echo $name; ?></p><br><br>
    E-Mail :<p><?php echo $email; ?></p><br><br>
    PHONE :<p><?php echo $ph; ?></p><br><br>
    PERMANENT ADDRESS :<p><?php echo $padd; ?></p><br><br>
    EVENT ADDRESS :<p><?php echo $eadd; ?></p><br><br>
    SERVICE REQUESTED :<p><?php echo $ser; ?></p><br><br>
    PRICE :<p><?php echo $price; ?></p><br><br>
    EVENT DATE :<p><?php echo $dt; ?></p><br><br>
    <center><a href="../services.html"><div class="but"><input type="submit" name="sub" value="Done" class="btn btn-primary"></div></center></a>

  </body>
  </html>