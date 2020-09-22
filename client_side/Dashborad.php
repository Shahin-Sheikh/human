
<?php
  include('../includes/session.php');
  include('../includes/deptdata.php');
  //include('../includes/backend-search.php');
  if(!isset($_SESSION['login_user'])){
  header("location: ../php_action/login.php"); // Redirecting To Home Page
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme file (generally does not need to be introduced) -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/b8fef9f667.js"></script>
	  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest Bootstrap core JavaScript file -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


 </head>
<body>
<div class="hrms_container">
    <!-- Navigation bar -->
    <div class="hrms_brand_nav">
           <nav class="navbar navbar-inverse navbar-static-top">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hrms-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="../client_side/Dashborad.php"><i class="fa fa-amazon" aria-hidden="true"></i> a<span style="color: #F7DC6F">maz</span>on</a>
                    </div>

                    <div class="collapse navbar-collapse" id="hrms-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active">
                            <a href="#"> Company Profile <span class="sr-only">(current)</span>  </a>
                          </li>
                          <li><a href="humanresourc.php">Human Resources Department</a></li>
                          <li><a href="../client_side/leavesubmit.php" target="_blank">Leave Application</a></li>
                          <li><a href="../client_side/jobsubmit.php" target="_blank">Job Application</a></li>
                          <li><a href="#">Attendance Records</a></li>
                          <li><a href="../client_side/insertjob.php" target="_blank">New Job</a></li>
                        </ul>

                        <form class="navbar-form navbar-left">
                       
                            <div class="search-box">
                            <input type="text" autocomplete="off" placeholder="Search with id"/>
                            <div class="result"></div>
                            </div>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account management <span class="caret"></span></a>
                                <ul class="dropdown-menu nav nav-pills nav-stacked">
                                      <li class="active"><a href="../php_action/modify.php" target="_blank"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modify information</a></li>
                                      <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <i><?php echo $login_session; ?></i> </a></li>
                                      <li class="hrms_logout"><a href="../php_action/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Account logout</a></li>
                                </ul>
                            </li>
                        </ul><!-- /.nav navbar-nav navbar-right -->
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>  
    </div><!-- /.hrms_brand_nav -->

    <!-- The middle part (including the left column and the employee/department form display part) -->
    <div class="hrms_body" style="position:relative; top:-15px;">

        <!-- Left sidebar -->
        <div class="panel-group col-sm-2" id="hrms_sidebar_left" role="tablist" aria-multiselectable="true">
             <ul class="nav nav-pills nav-stacked emp_sidebar">
                <li role="presentation" class="active">
                    <a href="#" data-toggle="collapse" data-target="#collapse_emp">
                        <span class="glyphicon glyphicon-user" aria-hidden="true">Employee Management</span>
                    </a>
                    <ul class="nav nav-pills nav-stacked" id="collapse_emp">
                      <li role="presentation"><a href="../client_side/employeeinfo.php" target="_blank">Employee Information</a></li>
                      <li role="presentation"><a href="../php_action/newemp.php" target="_blank">New Staff</a></li>
                      <li role="presentation"><a href="#">Employee Reset</a></li>
                    </ul> 
                </li>
            </ul>
            <ul class="nav nav-pills nav-stacked dept_sidebar">
                <li role="presentation" class="active">
                    <a href="#"  data-toggle="collapse" data-target="#collapse_dept">
                        <span class="glyphicon glyphicon-cloud" aria-hidden="true">Department Management</span>
                    </a>
                    <ul class="nav nav-pills nav-stacked" id="collapse_dept">
                      <li role="presentation"><a href="../client_side/Dashborad.php">Department Information</a></li>
                      <li role="presentation"><a href="../php_action/newdept.php" target="_blank">New Department</a></li>
                      <li role="presentation"><a href="#">Department Reset</a></li>
                    </ul> 
                </li>
            </ul>

        </div><!-- /.panel-group，#hrms_sidebar_left -->
     <!-- Intermediate employee table information display content -->
<div class="emp_info col-sm-10">
              
   <div class="panel panel-success">
       <!-- Path navigation -->
        <div class="panel-heading">
           <ol class="breadcrumb">
               <li><a href="#">Department Management</a></li>
                 <li class="active">Department Information</li>
                </ol>
              </div>



        <!-- Editable table -->
<div class="card">
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <th class="text-center">Id</th>
            <th class="text-center">Depertment Number</th>
            <th class="text-center">Depertment Name</th>
            <th class="text-center">Depertment Leader</th>
            <th class="text-center">Operating</th>
          
        </thead>
        <tbody >
        <?php
                      
                        
                          while($row=mysqli_fetch_assoc($ses_sql)){
                           $id = $row['id'];
                           $deptnum = $row['dept_num'];
                           $deptname = $row['dept_name'];
                           $deptleader = $row['dept_leader'];
                        
                      ?>
                      <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $deptnum ?></td>
                                <td><?php echo $deptname ?></td>
                                <td><?php echo $deptleader ?></td>
                                <td>
                               
                                    <a href="edit.php?GetID=<?php echo $id ?>" role="button" class="btn btn-primary">Edit</a>
                                    <a href="delete.php?Del=<?php echo $id ?>" role="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                               }
                            ?>
                                
                     
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
</div>
                  <div class="panel-body">
                      <div class="table_items">
                          Current<span class="badge">1</span> Page，In Total<span class="badge">10</span> Page，Total<span class="badge">100</span>Article.
                      </div>
                      <nav aria-label="Page navigation" class="pull-right">
                        <ul class="pagination">
                          <li><a href="#">Home</a></li>
                          <li class="disabled">
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="page2.php">2</a></li>
                          <li><a href="page3.php">3</a></li>
                          <li><a href="page4.php">4</a></li>
                          <li><a href="page5.php">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                          <li><a href="#">Tail</a></li>
                        </ul>
                      </nav>
                  </div>
              </div><!-- /.panel panel-success -->
         </div><!-- /.emp_info -->



    </div><!-- /.hrms_body -->

</div><!-- /.container -->
    
</body>
 </html>
 