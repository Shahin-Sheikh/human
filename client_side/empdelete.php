<?php 

        require_once("../client_side/connection.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " DELETE from emp where id = '".$id."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:../client_side/employeeinfo.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:../client_side/employeeinfo.php");
        }

?>