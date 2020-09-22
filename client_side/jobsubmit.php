<?php
  include('../includes/getdata.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>job Application</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme file (generally does not need to be introduced) -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest Bootstrap core JavaScript file -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 </head>
<body>
 
      <table class="table table-bordered table-hover" id="emp_table">
                      <thead>
                          <th>Application Number</th>
                          <th>Applicant Name</th>
                          <th>Applicant Email</th>
                          <th>Applicant Password</th>
                          <th>Applicant Street Address</th>
                          <th>Applicant City</th>
                          <th>Applicant Zip</th>
                          <th>Why he deserve this job?</th>
                          <th>Applicant recent project</th>
                          
                      </thead>
                      <tbody ><?php
                        if (mysqli_num_rows($ses_sql) > 0){
                          while($row=mysqli_fetch_assoc($ses_sql)){
                           echo "<tr>";
                      
                           echo " <td>" .$row["id"]."</td>";
                           echo " <td>" .$row["full_name"]."</td>";
                           echo " <td>" .$row["email"]."</td>";
                           echo " <td>" .$row["password"]."</td>";
                           echo " <td>" .$row["street_address"]."</td>";
                           echo " <td>" .$row["city"]."</td>";
                           echo " <td>" .$row["zip"]."</td>";
                           echo " <td>" .$row["deserve"]."</td>";
                           echo " <td>" .$row["recent_project"]."</td>";
                            
                        echo "</tr> "  ;
                          }
                        }
                      ?>
                    
                      </tbody>
                  </table>
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
    
</body>
 </html>
