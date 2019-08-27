<!DOCTYPE html>
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
          table,td,th{
              border: 1px solid black;
              width:33%;
              text-align: center;
              border-collapse: collapse;
              background-color:#04091e;
              border-color:wheat;
          }
          body{
              background-color:#04091e;
              color:wheat;
          }
          .btn{
                font-size:80%;
                background-color:wheat;
                color:#04091e;
          }
      </style>
    
    </head>
<body>
    <?php
        $con = mysqli_connect('localhost','root','','fotografi');
        $email="";
        $sql="";
        $headers="From: FotoGrafi.com";
        if(!$con)
        {
            echo 'not connected to the server';
        }
        $sql = "SELECT * FROM form";  
        $result = mysqli_query($con, $sql);  
        echo '<br>';
        echo "<center>BOOKINGS</center>";    
        echo "<center><table border='2'>";
        echo "<tr>";
        echo "<th>Name</th><th>E-Mail</th><th>Phone</th><th>Permanent Address</th><th>Event Address</th><th>Service</th><th>Price</th><th>Event Date</th></tr>";
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
                 {
                        echo "<tr>";
                        echo "<td>".$row["name"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["phone"]."</td>";
                        echo "<td>".$row["padd"]."</td>";
                        echo "<td>".$row["eadd"]."</td>";
                        echo "<td>".$row["services"]."</td>";
                        echo "<td>".$row["price"]."</td>";
                        echo "<td>".$row["dt"]."</td>";
                 }
        }
        else{
            echo "Table is Empty";
        }
        echo "</table></center>";
    ?>
    <br><br>
    <center><a href="../index.html"><div class="but"><input type="submit" name="sub" value="Done" class="btn btn-primary"></div></center></a>
  
</body>
</html>