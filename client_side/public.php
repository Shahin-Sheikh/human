<?php
  include('../includes/session.php');
  include('../includes/getjobinfo.php');
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
    <title>PUBLIC DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme file (generally does not need to be introduced) -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest Bootstrap core JavaScript file -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <!-- Font Awesome -->
       <script src="https://use.fontawesome.com/b8fef9f667.js"></script>
	  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>


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
                      <a class="navbar-brand" href="../client_side/public.php"><i class="fa fa-amazon" aria-hidden="true"></i> a<span style="color: #F7DC6F">maz</span>on</a>
                    </div>

                    <div class="collapse navbar-collapse" id="hrms-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active">
                            <a href="#"> Company Profile <span class="sr-only">(current)</span>  </a>
                          </li>
                          <li><a href="../php_action/job.php" target="_blank">Apply to a job</a></li>
                          
                        </ul>

                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Site Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search For</button>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account management <span class="caret"></span></a>
                                <ul class="dropdown-menu nav nav-pills nav-stacked">
                                      <li class="active"><a href="../php_action/modify.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modify information</a></li>
                                      <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <i><?php echo $login_session; ?></i> </a></li>
                                      <li class="hrms_logout"><a href="../php_action/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Account logout</a></li>
                                </ul>
                            </li>
                        </ul><!-- /.nav navbar-nav navbar-right -->
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>  


            <table class="table table-bordered table-hover" id="emp_table">
                      <thead>
                          <th>Job Number</th>
                          <th>Job Title</th>
                          <th>Managing Director</th>
                          <th>Median Base Salary</th>
                          
                      </thead>
                      <tbody>
                      <?php
                      
                      if (mysqli_num_rows($ses_sql) > 0){
                        while($row=mysqli_fetch_assoc($ses_sql)){
                         echo "<tr>";
                    
                         echo " <td>" .$row["jobnum"]."</td>";
                         echo " <td>" .$row["jobdes"]."</td>";
                         echo " <td>" .$row["md"]."</td>";
                         echo " <td>" .$row["salary"]."</td>";
                          
                      echo "</tr> "  ;
                        }
                      }
                    ?>
                      </tbody>
                  </table>
    </div><!-- /.hrms_brand_nav -->
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
