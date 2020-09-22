<?php 

require_once("../client_side/connection.php");

    if(isset($_POST['update']))
    {

        $id = $_POST['id'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $query = " UPDATE login SET password = '".$password."' where id='".$id."' and usertype='".$usertype."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
        
            header("location:../php_action/login.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:../php_action/forgotpass.php");
    }


?>
