<?php 

require_once("../client_side/connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $deptnum = $_POST['dept_num'];
        $deptname = $_POST['dept_name'];
        $deptleader = $_POST['dept_leader'];

        $query = " UPDATE dept SET dept_num = '".$deptnum."', dept_name='".$deptname."',dept_leader='".$deptleader."' where id='".$id."'";
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
