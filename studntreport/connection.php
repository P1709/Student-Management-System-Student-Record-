<?php

$username="root";
$password="1234";
$server='localhost';
$db = 'model';

$con = mysqli_connect($server,$username,$password,$db);

if($con){



  ?>
  <script>
      alert=('connection Successful');
      </script>

      <?php

}
else{
    die("no connection ". mysqli_connect_error());

}
?>