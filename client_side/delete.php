<?php 

        require_once("../client_side/connection.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " DELETE from dept where id = '".$id."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:../client_side/Dashborad.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:../client_side/Dashborad.php");
        }

?>