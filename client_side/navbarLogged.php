<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--============================ CDN START ============================-->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
        </script>

        <!-- Popper Js -->
        <script 
        src="https://cdn.bootcss.com/popper.js/1.9.3/umd/popper.min.js" integrity="sha384-knhBOwpf8/28D6ygAjJeb0STNDZqfPbKaWQ8wIz/xgSc0xXwKsKhNype8fmfMka2" crossorigin="anonymous">
        </script>

        <!-- Bootstrap Javascript -->
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
        </script>

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/b8fef9f667.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">

        <!-- Nice Scroll JS -->
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>

        <!-- My JS -->
        <script type="text/javascript" src="js/script.js"></script>

        <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <!--============================ CDN END   ============================-->

    </head>
    <body>
        <!--============================== Navigation Bar Starts ===================================-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="mainindex.php"><i class="fa fa-tripadvisor" aria-hidden="true"></i> t<span style="color: red">OUR</span>me</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="mainnavbar">
                    <ul class="navbar-nav ml-auto Knavbarcontent">
                      <li class="nav-item">
                          <div class="nav-link Knavbarcontent" style="color:white;">Welcome <?php echo $_SESSION["username"] ?> </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link Knavbarcontent" href="mainindex.php">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link Knavbarcontent" href="logOut.php">Log Out</a>
                      </li>
                      <li class="nav-item">
                          <a <?php echo'href="Profile.php?id='.$_SESSION['id'].'"'; ?>  class="nav-link Knavbarcontent">Profile</a>
                      </li>
                      
                      
                      <!-- If not customer.. -->
                      <?php 
                        if($_SESSION["priv"]!=0)
                            echo '
                            <li class="nav-item">
                                <a href="Grades.php" class="nav-link Knavbarcontent">Grades</a>
                            </li>
                            <li class="nav-item">
                                <a href="Questions.php" class="nav-link Knavbarcontent">Questions</a>
                            </li>
                        ';
                        
                        if($_SESSION["priv"]==0)
                            echo '
                            <li class="nav-item">
                                <a href="Intreview_Exam.php" class="nav-link Knavbarcontent">Take Your Quiz Now</a>
                            </li>
                        ';
                      ?>

                    </ul>
                   
                  </div>
            </div>
        </nav>
    <!--============================== Navigation Bar End ===================================-->
    </body>
</html>
