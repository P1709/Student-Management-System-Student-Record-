<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '1234';
$db_database	= 'model'; 

/* End config */

$db = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
if($db){



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