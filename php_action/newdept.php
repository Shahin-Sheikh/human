<?php
  
?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
        <title>Inser Dept</title>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional Bootstrap theme file (generally does not need to be introduced) -->
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../css/insertjob.css">
    <script src="../js/deptvalidator.js"></script>
        <!-- Latest Bootstrap core JavaScript file -->
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
        <body>
        <div class="emp_info col-sm-10">
              
              <div class="panel panel-success">
                  <!-- Path navigation -->
                  <div class="panel-heading">
                    <ol class="breadcrumb">
                      <li><a href="Dashborad.php">Department Management</a></li>
                      <li class="active">New Department</li>
                    </ol>
                  </div>


               
                  <form name="contactForm" onsubmit="return validateForm()" action="../php_action/deptconfirm.php" method="post">
    <h2>New Dept</h2>
    <div class="row">
        <label>Depertment Number</label>
        <input type="text" name="dept_num">
        <div class="error" id="deptnumErr"></div>
    </div>
    <div class="row">
        <label>Depertment Name</label>
        <input type="text" name="dept_name">
        <div class="error" id="deptnameErr"></div>
    </div>
    <div class="row">
        <label>Depertment Leader</label>
        <input type="text" name="dept_leader" maxlength="10">
        <div class="error" id="deptleaderErr"></div>
	</div>       
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
            

                    <div class="panel-body">
                        <div class="table_items">
                            Current<span class="badge">1</span> Page，In Total<span class="badge">10</span> Page，Total<span class="badge">100</span>Article.
                        </div>
                        <nav aria-label="Page navigation" class="pull-right">
                          <ul class="pagination">
                            <li><a href="Dashborad.php">Home</a></li>
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
           </div>
        </body>
</html>