<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lorem Ipsunal- binary options">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/png" href="favicon.ico">
    <title>Lorem Ipsunal- binary options</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
<!--    <link rel="stylesheet/less" type="text/css" href="css/style.less" />-->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	    <script type="text/javascript" src="js/sliding.form.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<script src="js/modernizr.js"></script> <!-- Modernizr -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
//echo '22';
include_once 'monolog.php';
// echo '33';

echo $email;
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="content">
            <div id="wrapper">
	           <div id="thank">
		           <h2>Thank You</h2>
				   <h4>Our specialists will contact with you!</h4>
				   <i class="fa fa-paper-plane-o" aria-hidden="true"></i>

	           </div>
                <div id="steps">
                    <form id="formElem" name="formElem" action="mailer.php" method="post">
                        <fieldset class="step">
                            <legend>First and Last Name</legend>
                            <p>
                                <label for="Fname">First name</label>
                                <input id="fname" name="fname" type="text" />
                            </p>
                            <p>
                                <label for="lname">Last name</label>
                                <input id="lname" name="lname" type="text" />
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Phone and Email</legend>
                            <p>
                                <label for="email"> Email</label>
                                <input id="email" name="email" type="email" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>City and Country</legend>
                           <p>
                                <label for="country">City</label>
                                <input id="city" name="city" type="text" AUTOCOMPLETE=OFF />
                            </p>
                             <p>
                                <label for="country">Country</label>
                                <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                            </p>
                             <p class="submit">
                                <button id="registerButton" type="submit" >Submit</button>
                            </p>
                        </fieldset>
                      </form>
                      <script>
					  	document.getElementById('formElem').addEventListener('submit', function(evt){
					  		var http = new XMLHttpRequest(), f = this;
					  		evt.preventDefault();
					  		http.open("POST", "mailer.php", true);
					  		http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					  		http.send("fname=" + f.fname.value + "&lname=" + f.lname.value + "&email=" + f.email.value + "&phone=" + f.phone.value + "&city=" + f.city.value + "&country=" + f.country.value);
					  		http.onreadystatechange = function() {
					  		if (http.readyState == 4 && http.status == 200) {
					  		document.getElementById('formElem').style.display= 'none';
					  		document.getElementById('navigation').style.display= 'none';
					  		document.getElementById('thank').style.display= 'block';

					  		}
  							}
  							http.onerror = function() {
  							alert('Sorry something was wrong');
  							}
						}, false);
					</script>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">First and Last name</a>
                        </li>
                        <li>
                            <a href="#">Email and Phone</a>
                        </li>
                        <li>
                            <a href="#">City and Country</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Header -->
    <div class="intro-header"  >
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
	                <div class="container">
		                <div class="row">
			                <div class="col-md-6">
                    <div class="intro-message">
	                    <img class="logo" src="img/Logo-Sample.png"/>
                      <!--  <h1>Stay with Lorem Ipsumal</h1>-->
                        <h3>Your future in your hands</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#about" class="btn btn-default btn-lg"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="network-name"> About us</span></a>
                            </li>
                            <li>
                                <a href="#how_it" class="btn btn-default btn-lg"><i class="fa fa-key" aria-hidden="true"></i><span class="network-name"> How it works</span></a>
                            </li>
                            <li>
                                <a  class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"> <span class="network-name"> <i class="fa fa-pencil" aria-hidden="true"></i> Contact us</span></a>
                            </li>
                        </ul>
                    </div>
                    </div>
                      <div class="col-md-6">
	                    <div class="intro-message right">
		                    <ul class="move">
			                  		<li>- No Experience Required</li>
									<li>- Create Big Profits from Small Market Movements</li>
									<li>- No Hidden Fees or Commissions</li>
									<li>- Free Binary Option <a href="#book">eBook</a></li>
					  		</ul>
					  </div>
					  </div>

                    </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->


    <div class="content-section-a" id="how_it">
                <div class="col-lg-12">
	                <h3 class="how">How it works</h3>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
			<section id="cd-timeline" class="cd-container">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-location">
						<img src="img/light.png"/>
<!--						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>-->
					</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h2> Choose an assets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-movie">
						<img src="img/question.png"/>
						<!--<i class="fa fa-question" aria-hidden="true"></i>-->
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Choose direction</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
				</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/like.png"/>
				<!--<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>-->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Set Amount</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<!--<i class="fa fa-credit-card" aria-hidden="true"></i>-->
				<img src="img/money_new.png"/>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>And earn up to $175</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->


	</section> <!-- cd-timeline -->
		</div>
		</div>
	</div>

        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <!-- /.content-section-b -->
<!-- take a book -->
    <div class="banner" id="book">

        <div class="container">

            <div class="row">
	           <div class="col-lg-12">
		       	  <h2>Free eBook for binary:</h2>
		       	    <ul class="list-inline banner-social-buttons">
                        <li>
                        <a  class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" aria-hidden="true"></i>
 <span class="network-name">Contact us</span></a>
                        </li>
                    </ul>
			   </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
<!-- take a book -->

    <div class="content-section-a" id="about">
					<div class="col-lg-12">
		                <h3 class="how">About us</h3>
					</div>

        <div class="container">

            <div class="row">
                	<div class="cd-slider-wrapper">
		<ul class="cd-slider">
			<li class="is-visible">
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content">
					<div>
						<h2>Our team</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugit ullam voluptatum tenetur ab, non beatae.
						</p>
					</div>
				</div>
			</li> <!-- .cd-half-block.content -->

			<li>
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content light-bg">
					<div>
						<h2>Our history</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugit ullam voluptatum tenetur ab, non beatae, impedit dolorem itaque voluptates facilis necessitatibus suscipit dolor rerum dolores dignissimos alias facere sunt aliquid.
						</p>
					</div>
				</div> <!-- .cd-half-block.content -->
			</li>

			<li>
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content">
					<div>
						<h2>Our days</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugit ullam voluptatum tenetur ab, non beatae, impedit dolorem itaque voluptates facilis necessitatibus suscipit dolor rerum dolores dignissimos alias facere sunt aliquid.
						</p>
					</div>
				</div> <!-- .cd-half-block.content -->
			</li>

			<li>
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content">
					<div>
						<h2>Our life</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugit ullam voluptatum tenetur ab, non beatae, impedit dolorem itaque voluptates facilis necessitatibus suscipit dolor rerum dolores dignissimos alias facere sunt aliquid.
						</p>
					<a  class="btn" data-toggle="modal" data-target="#myModal">Work with us</a>
					</div>
				</div> <!-- .cd-half-block.content -->
			</li>
		</ul> <!-- .cd-slider -->
	</div> <!-- .cd-slider-wrapper -->
                </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
	                <video autoplay="" loop="" class="fillWidth fadeIn animated" poster="img/new-bg-2.jpg" id="video-background">
    <source src="img/Typer.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
</video>
                    <h2>Stay connect with us:</h2>
                </div>
                <div class="col-lg-6">
	                <div id="thankyou"><h2>You are subscribed!</h2></div>
                   <form id="subscribe" name="subscribe" action="subscribe.php" method="post">
	                   <ul class="sub_be">
	                    <li>
                        <input class="sub_mail" id="emails" name="emails" type="email" placeholder="Your Email"/>
                        </li>
                       <li>
                        <p class="submit">
                         <button id="submitSubscribe" type="submit" >Subscribe</button>
                        </p>
                        </li>
                        </ul>
                   </form>
                   <script>
				   document.getElementById('subscribe').addEventListener('submit', function(evt){
				   var http = new XMLHttpRequest(), f = this;
				   evt.preventDefault();
				   http.open("POST", "subscribe.php", true);
				   http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				   http.send("emails=" + f.emails.value);
				   http.onreadystatechange = function() {
				   if (http.readyState == 4 && http.status == 200) {
					   document.getElementById('subscribe').style.display= 'none';
					   document.getElementById('thankyou').style.display= 'block';

    			     }
  				   }
  				   	http.onerror = function() {
  				   		alert('Sorry something was wrong');
  						}
					}, false);
				 </script>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
	                                   <p class="copyright text-muted small">Copyright &copy; Rushmore 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
	<!--<script src="js/less.js" type="text/javascript"></script>-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-2.1.4.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/main.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
