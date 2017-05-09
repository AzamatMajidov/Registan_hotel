<?php
/**
 * Created by PhpStorm.
 * User: by_dingo
 * Date: 09.05.2017
 * Time: 13:12
 */

require_once "../Controllers/Login.php"

?>

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registan Plaza</title>
  <link rel="icon" href="../../assets/imgs/logo.jpg">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="../assets/css/flexslider.css" rel="stylesheet">
  <link href="../assets/css/fixPicture.css" rel="stylesheet">
  <link href="../assets/css/loginStyle.css" rel="stylesheet">
  <link href="../assets/css/main-style.css" rel="stylesheet">
  <!-- <link href="css/Style.css" rel="stylesheet">
    -->




  </head>
  <body class="gray-bg">
  	<nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-4 col-md-4 col-sm-2 siteNameContainer"><a href="index.php">
  					<img src="../assets/imgs/logo.jpg" height="12%" width="7%" style="padding-bottom: 10px; margin-right: 3px" >
  					<span class="siteName">Registan Plaza</span>
  				</a>
  				</div>
	  			<div class="col-lg-8 col-md-8 col-sm-9">
	  				<div class="menu_header">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="navBar">
						<ul>
							<li><a href="index.php" class="active">Home</a></li>
							<li> <a href="#rooms_4">Room</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login </a>
							<ul id="login-dp" class="dropdown-menu right" >
								<li>
									 <div class="row">
										<div class="col-md-12">

											<img src="../assets/imgs/admin1.png"  class="img-circle" id="admin"> <br> <br>

										 <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
											 <input type="text" class="form-control" placeholder="Username" name="username" required>
											</div>
											<div class="form-group">
												 <label class="sr-only" for="inputPassword">Password</label>
												 <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>

											</div>
										<div class="form-group">
											 <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
										</div>

								 		 </form>
										</div>

					 				</div>
								</li>
							</ul>
							</li>

						</ul>

					 </nav>
				   </div>
	  			</div>
  			</div>
  		</div>
       </nav>

    <?php
        if (isset($_POST["login"]))
            Login::render();
    ?>

	<!-- Banner -->
	<section class="banner" >
		<!-- Flexslider -->

		<div class="flexslider flexslider-banner" >
		  <ul class="slides">
		    <li>
			    <div class="banner-inner">
					<h1 class="banner-title">Hotel Registan Plaza</h1>

					<a href="#more" class="banner-link">Learn more</a>
				</div>
				<div >
				<img src="../assets/imgs/plaza1.jpg" alt="Banner 3" style="background-attachment: fixed;"/>
				</div>
		    </li>
		  </ul>
		</div>

	</section>

	<!-- gray bg -->
	<section class="container home-section-1" id="more">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-6">
				<!-- Nav tabs -->
				<div class="home-box-1" style="margin-left: 80%: right;">                                  <!-- Start -->
					<ul class="nav nav-tabs white-bg" role="tablist"  id="hotelCarTabs">    <!--    -->
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Registan Plaza Hotel</a>
					    </li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active white-bg" id="hotel">
					    	<div class="search-box effect2">
								<form action="check.php" method="post" class="hotel-search-form">
									<div class="form-inner" id="checker">

							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker1'>
							                    <input name="inDate" type='text' class="form-control" placeholder="Check-in Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker2'>
							                    <input name="outDate" type='text' class="form-control" placeholder="Check-out Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							            <div class="form-group margin-bottom-0">
							                <select class="form-control">
							            	 	<option value="">-- Guests -- </option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5p">5+</option>
											</select>
							            </div>
									</div>
						            <div class="form-group yellow-gradient-bg text-center">
						            	<button type="submit" name="check" class="yellow-btn">Check Now</button>
						            </div>


								</form>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<section id="rooms_4" name = "room_4">
		<a href="rooms_4"></a>
		<div class="section-margin-top">
			<div class="row">
				<div class="section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="section-title">Rooms</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				</div>
			</div>
			<div class="row">
				<a data-target = "#LuxeRoom" data-toggle="modal">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="home-box-2">
						<img src="../assets/imgs/luxe.jpg" alt="image" class="img-responsive">
						<h3>Luxe Rooms</h3>
						<p class="date1">Registan Plaza</p>

					</div>
				</div>
				</a>

				<a data-target = "#SemiLuxeRoom" data-toggle="modal">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="home-box-2">
					    <img src="../assets/imgs/semiluxe.jpg" alt="image" class="img-responsive">
						<h3>Semi Luxe Rooms</h3>
						<p class="date1">Registan Plaza</p>

					</div>
				</div> </a>

				<a data-target = "#StandartRoom" data-toggle="modal">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="home-box-2">
					    <img src="../assets/imgs/standart.jpg" alt="image" class="img-responsive">
						<h3>Standard Rooms</h3>
						<p class="date1">Registan Plaza</p>

					</div>
				</div> </a>

				<a data-target = "#Budget" data-toggle="modal">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="home-box-2 tm-home-box-2-right">
					    <img src="../assets/imgs/b.jpg" alt="image" class="img-responsive">
						<h3>Budget Rooms</h3>
						<p class="date1">Registan Plaza</p>

					</div>
				</div> </a>
			</div>



		</div>
		</section>
	</section>

<!-- ================================================================================================== -->
											<!-- Free Rooms -->

		<div class="modal fade" id="freeRooms" role="dialog">
   			 <div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
         			    <h4 class="modal-title">FREE ROOMS</h4>
        			</div>
       			    <div class="modal-body">



          			</div>
        			<div class="modal-footer">
         				 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
      			</div>
    		 </div>
  		</div>




<!-- =================================================================================================== -->
<!-- Modal for LuxeRoom -->

	<div id="LuxeRoom" class="modal fade" role="dialog">
       <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Luxe Room</h4>
           </div>
            <div class="modal-body">

            <img src="../assets/imgs/luxe.jpg" class = "img-rounded" height="50%" width="50%" id="pic">
            	<p>The elite luxe room offers truly breathtaking accommodation at the Hotel. Tastefully decorated, it provides ultimate comfort and luxury and combines features of superb suite and luxury accommodation.
Bed rooms have king size bed, LCD television with the satellite channels, mini fridge, hair dryer, round the clock hot and cold water, direct phone line with speaker phone, writing desk, 2 bottles of mineral water with compliments, well designed and comfortable furniture to match the quality, well designed bathrooms with cubical shower having amenities like dental kit, shaving kit, take your care.
				</p>


            <div class="row" style="margin: 3px">


						<br>
					<a data-toggle="tooltip" title="Wi-Fi" >		<img src="../assets/icons\wifi_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Air conditioner"><img src="../assets/icons\ac_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Bar" >			<img src="../assets/icons\bar_ic.png"  class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Bath" >			<img src="../assets/icons\bath_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Phone" >		<img src="../assets/icons\phone_ic.png" class="service"  height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Safe" >			<img src="../assets/icons\safe_ic.png"  class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Shower" >		<img src="../assets/icons\shower_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="TV" class="service"><img src="../assets/icons\tv_ic.png" class="service" height="5%" width="5%"></a>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>

     </div>
    </div>
</div>
<!-- Modal for SemiLuxeRoom -->
    <div id="SemiLuxeRoom" class="modal fade" role="dialog">
       <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Semi Luxe Room</h4>
           </div>
            <div class="modal-body">
            <img src="../assets/imgs/semiluxe.jpg" class = "img-rounded" height="50%" width="50%" id="pic2">
            <p>The best choice of accomodation in Samarkand for business travelers - comfortable suite at the hotel "Registan Plaza". Suite room includes a cozy bedroom, the large living area has a choice of beautifully upholstered armchairs and a dark wood coffee table, making it the perfect space for working, entertaining or relaxing. Express check in and check out for our guest is guaranteed.</p>
            <div class="row" style="margin: 3px">


						<br>
					<a data-toggle="tooltip" title="Wi-Fi" >		<img src="../assets/icons\wifi_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Air conditioner"><img src="../assets/icons\ac_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Bath" >			<img src="../assets/icons\bath_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Phone" >		<img src="../assets/icons\phone_ic.png" class="service"  height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Shower" >		<img src="../assets/icons\shower_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="TV" class="service"><img src="../assets/icons\tv_ic.png" class="service" height="5%" width="5%"></a>

            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>

     </div>
    </div>
    <!-- +++++++++++++++++++++++++++++++++++ -->
    <!-- Modal for Standart -->
    <div id="StandartRoom" class="modal fade" role="dialog">
       <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Standard Room</h4>
           </div>
            <div class="modal-body">
            <img src="../assets/imgs/standart.jpg" class = "img-rounded" height="50%" width="50%" id="pic3">
            <p>Well equipped 54 Single rooms with all modern facilities for the business as well as leisure travelers. The room well furnished with the color television, and satellite channels, 24 hrs running hot and cold water, speaker phone with the zero dialing, to meet the expectations.</p>
           <div class="row" style="margin: 3px">


						<br>
					<a data-toggle="tooltip" title="Wi-Fi" >		<img src="../assets/icons\wifi_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Air conditioner"><img src="../assets/icons\ac_ic.png" class="service" height="5%" width="5%"></a>
					<a data-toggle="tooltip" title="Bath" >			<img src="../assets/icons\bath_ic.png" class="service" height="5%" width="5%"></a>

					<a data-toggle="tooltip" title="Shower" >		<img src="../assets/icons\shower_ic.png" class="service" height="5%" width="5%"></a>


            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>

     </div>
    </div>
 <!-- +++++++++++++++++++++++++++++++++++ -->
    <!-- Modal for Budget -->
    <div id="Budget" class="modal fade" role="dialog">
       <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Budget Room</h4>
           </div>
            <div class="modal-body">
            <img src="../assets/imgs/b.jpg" class = "img-rounded" height="50%" width="50%">
            <div class="row" style="margin: 3px">


						<br>
					<a data-toggle="tooltip" title="Wi-Fi" >		<img src="../assets/icons\wifi_ic.png" class="service" height="5%" width="5%"></a>

					<a data-toggle="tooltip" title="Bath" >			<img src="../assets/icons\bath_ic.png" class="service" height="5%" width="5%"></a>

					<a data-toggle="tooltip" title="Shower" >		<img src="../assets/icons\shower_ic.png" class="service" height="5%" width="5%"></a>

            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>

     </div>
    </div>

<!-- ================================================================================================== -->




	<footer class="black-bg">
		<div class="container">
			<div class="row">
				<p class="addressFooter"> 53, Shokhrukh Str., Samarkand city, Uzbekistan</p>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>
  	<script type="text/javascript" src="../assets/js/moment.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="../assets/js/navbarShrink.js"></script>
   	<script type="text/javascript" src="../assets/js/main-script.js"></script>

 </body>
 </html>
