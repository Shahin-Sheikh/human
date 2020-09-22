<?php 

    require_once("../client_side/connection.php");
    require_once("../client_side/employeeinfo.php");
    $id = $_GET['GetID'];
    $query = " select * from emp where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
                           $id = $row['id'];
                           $empid = $row['empid'];
                           $empname = $row['empname'];
                           $emprole = $row['emprole'];
                           $empdept = $row['empdept'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form</h3>
                        </div>
                        <div class="card-body">

                            <form action="empupdate.php?ID=<?php echo $id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Number " name="empid" value="<?php echo $empid ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Number " name="empname" value="<?php echo $empname ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Name " name="emprole" value="<?php echo $emprole ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Leader " name="empdept" value="<?php echo $empdept ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>