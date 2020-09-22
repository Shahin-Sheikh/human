<?php
require_once('../includes/config4.php');
     $noticenewcount = $_POST['noticenewcount'];
     if (mysqli_num_rows($ses_sql) > 0){
        while($row=mysqli_fetch_assoc($ses_sql)){
          echo"<p>";
          echo $row['author'];
          echo "<br>";
          echo $row['notice'];
          echo"</p>";
    }
  }