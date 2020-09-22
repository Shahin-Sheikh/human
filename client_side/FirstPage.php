 
 <?php
include('../client_side/navbarNOtlogged.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Welcome</title>

        <!--============================ CDN START ============================-->
	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- jQuery -->
		<script
		  	src="https://code.jquery.com/jquery-3.2.1.js"
		  	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  	crossorigin="anonymous">
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
		<script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
		<!-- My JS -->
		<script type="text/javascript" src="../js/script.js"></script>
		<!-- My CSS -->
		<link rel="stylesheet" type="text/css" href="../css/app.css">
        <!--============================ CDN END   ============================-->

    	<style>
			body, html {
			    height: 100%;
			    margin: 0;
			}
		</style>

		<script type="text/javascript">
        	$(document).ready(function(){
        		$('#welcomeText').delay(500).fadeIn(2000);
        	});
        </script>

    </head>
    <body>

    	<!-- Go Top Button -->
    	<button id="buttonTop" class="btn btn-default btn-lg" onclick="goTop();"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>


    	<!-- Parallex Intro Start --> 
		<div id="parallaxMainIntro">
			<div id="welcomeText">
				Your Journey<br> Begins Here
			</div>
		</div>
		<!-- Parallex Intro End -->

                
		<!-- 1st Section Start -->
		<div style="background-color:#F6F6F6; padding:1%;">
			<div class="container">
				<div class="row">
					<!--=========Introduction Start=========-->
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<h2>
							<b><span style="color:orange;font-size:50px;">W</span>elcome</b>
						</h2>
						<hr id="borderhrintro">
						<p style="text-align: justify;">We have waited so long to have you among us. At last, the time has come. We are most delightfully welcoming you to join us today!

You are a wonderful person with a wonderful view of life. Your companionship is always an opportunity to learn. A warm welcome to you to join us!

Life seldom gives a chance to know someone who can influence us so deeply. I’m lucky to have the opportunity to meet you! Welcome into my life!

I’m so glad to welcome you to my [new] house. Your presence in our [new] home is nothing less than a blessing to us!
</p>
					</div>
					<!--=========Introduction End=========-->

					<!-- News Start -->
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<!-- Header Row -->
						<ul id="clothing-nav" class="nav nav-tabs" role="tablist">
							<!-- First Tab -->
							<li class="nav-item">
							<a class="nav-link active" href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">News</a>
							</li>
							<!-- Second Tab -->
							<li class="nav-item">
							<a class="nav-link" href="#hats" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats">Events</a>
							</li>
							<!-- Third Dropdown Tab -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								Alerts
								</a>
								<div class="dropdown-menu">
								<a class="dropdown-item" href="#dropdown-shoes" role="tab" id="dropdown-shoes-tab" data-toggle="tab" aria-controls="dropdownShoes">New Pages</a>
								<a class="dropdown-item" href="#dropdown-boots" role="tab" id="dropdown-boots-tab" data-toggle="tab" aria-controls="dropdownBoots">Notices</a>
								</div>
							</li>
						</ul>

						<!-- Content Panels Row -->
						<div id="clothing-nav-content" class="tab-content">
							<!-- First Panel -->
							<div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
								<!--FirstNews-->
								<div class="media">
			                      <div class="media-left">
			                        <a class="news_img" href="#">
			                          <img class="media-object" src="../img/profile.png" alt="img">
			                        </a>
			                      </div>
			                      <div class="media-body">
			                       <a href="#" class="newsTitleTab">Notice text</a>
			                       <p class="text-muted"><em>09.09.20</em></p>
			                      </div>
			                    </div> 
			                    <!--SecondNews-->
			                    <div class="media">
			                      <div class="media-left">
			                        <a class="news_img" href="#">
			                          <img class="media-object" src="../img/profile.png" alt="img">
			                        </a>
			                      </div>
			                      <div class="media-body">
			                       <a href="#" class="newsTitleTab">Notice text</a>
			                       <p class="text-muted"><em>09.09.20</em></p>
			                      </div>
			                    </div> 
			                    <!--ThirdNews-->
			                    <div class="media">
			                      <div class="media-left">
			                        <a class="news_img" href="#">
			                          <img class="media-object" src="../img/profile.png" alt="img">
			                        </a>
			                      </div>
			                      <div class="media-body">
			                       <a href="#" class="newsTitleTab">Notice text</a>
			                       <p class="text-muted"><em>09.09.20</em></p>
			                      </div>
			                    </div> 
							</div>
							<!-- Second Panel -->
							<div role="tabpanel" class="tab-pane fade" id="hats" aria-labelledby="hats-tab">
								<p>We have waited so long to have you among us. At last, the time has come. We are most delightfully welcoming you to join us today!

You are a wonderful person with a wonderful view of life. Your companionship is always an opportunity to learn. A warm welcome to you to join us!

Life seldom gives a chance to know someone who can influence us so deeply. I’m lucky to have the opportunity to meet you! Welcome into my life!

I’m so glad to welcome you to my [new] house. Your presence in our [new] home is nothing less than a blessing to us!
</p>
							</div>
							<!-- Third Panel -->
							<div role="tabpanel" class="tab-pane fade" id="dropdown-shoes" aria-labelledby="dropdown-shoes-tab">
								
							</div>
							<!-- Fourth Panel -->
							<div role="tabpanel" class="tab-pane fade" id="dropdown-boots" aria-labelledby="dropdown-boots-tab">
								
							</div>
						</div>
					</div>
					<!-- News End -->
				</div>
			</div>
		</div>
		<!-- 1st Section End -->

		<!-- 2nd parrallax -->
		<div class="mainParallax2"></div>


		<!--============================== Footer Section Starts ===================================-->
		<div class="footerinfo">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<h4>About Us</h4>
						<br>
						<p id="footerinfoaboutus">We have waited so long to have you among us. At last, the time has come. We are most delightfully welcoming you to join us today!

You are a wonderful person with a wonderful view of life. Your companionship is always an opportunity to learn. A warm welcome to you to join us!</p>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<h4>Community</h4>
						<br>
						<p><a href="#" class="footerlink">Team</a></p>
						<p><a href="#" class="footerlink">Forum</a></p>
						<p><a href="#" class="footerlink">News and Media</a></p>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<h4>Others</h4>
						<br>
						<p><a href="#" class="footerlink">Privacy Policy</a></p>
						<p><a href="#" class="footerlink">Terms and Conditions</a></p>
						<p><a href="#" class="footerlink">Frequently Asked Questions</a></p>

					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<h4>Follow Us @</h4>
						<br>
						<a href="https://www.facebook.com/shahinheikh" title="Facebook" target="_blank" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://twitter.com/Muhamma26971341" title="Twitter"  target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCUwhQT_FeaaRZwj33mK5RhQ" title="Youtube" target="_blank" ><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/shahinsheikh885/" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--============================== Footer Section Ends ===================================-->

		<!-- Footer Starts-->
		<div class="copyrightt">
		  <div class="container">
		  	<div class="row">
			    <div class="col-md-6">
			      <p>Copyright © 2020 - All Rights Reserved to Shahin Sheikh</p>
			    </div>
			</div>
		  </div>
		</div>
		<!-- Footer Ends -->

    </body>
</html>