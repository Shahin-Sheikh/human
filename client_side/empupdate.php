<?php 

require_once("../client_side/connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $empid= $_POST['empid'];
        $empname= $_POST['empname'];
        $emprole = $_POST['emprole'];
        $empdept = $_POST['empdept'];

        $query = " UPDATE emp SET empid = '".$empid."', empname = '".$empname."', emprole='".$emprole."',empdept='".$empdept."' where id='".$id."'";
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
