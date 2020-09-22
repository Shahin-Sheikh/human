<?php 

    require_once("../client_side/connection.php");
    require_once("../client_side/Dashborad.php");
    $id = $_GET['GetID'];
    $query = " select * from dept where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
                           $id = $row['id'];
                           $deptnum = $row['dept_num'];
                           $deptname = $row['dept_name'];
                           $deptleader = $row['dept_leader'];
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

                            <form action="update.php?ID=<?php echo $id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Number " name="dept_num" value="<?php echo $deptnum ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Name " name="dept_name" value="<?php echo $deptname ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Depertment Leader " name="dept_leader" value="<?php echo $deptleader ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>