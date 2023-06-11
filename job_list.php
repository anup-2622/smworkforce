<?php
$secret_key = "83LhpPHnYD6NUbwSyj5qktQV0fFiaTgMJmolzEXseW2KG71OIx";
$ins_id = "CM1221004";

// Fetch Department
$departmentUrl = "https://www.dmystifi.com/api/v1/job_department_list.php?secret_key=$secret_key&institute_id=$ins_id";
$curl_departmentUrl            = curl_init($departmentUrl);
curl_setopt($curl_departmentUrl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_departmentUrl, CURLOPT_SSL_VERIFYPEER, false);
$json_response_department   = curl_exec($curl_departmentUrl);
curl_close($curl_departmentUrl);
$jobDepartments = json_decode($json_response_department,true);

// Fetch Job List From API
$department = $_GET['dept'];
$url = "https://www.dmystifi.com/api/v1/job_list.php?secret_key=$secret_key&institute_id=$ins_id&department=$department";
$curl            = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$json_response   = curl_exec($curl);
curl_close($curl);
$joblistings = json_decode($json_response,true);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- css file -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Title -->
	<title>SM Workforce</title>
	<!-- Favicon -->
	<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
	<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
	<style>
		.space {
			padding-top: 20px;
		}

		.back {
			background: tan;
		}

		#clients {
			padding: 60px 0
		}

		#clients .clients-wrap {
			border-top: 1px solid #d6eaff;
			border-left: 1px solid #d6eaff;
			margin-bottom: 30px
		}

		#clients .client-logo {
			padding: 64px;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			border-right: 1px solid #d6eaff;
			border-bottom: 1px solid #d6eaff;
			overflow: hidden;
			background: #fff;
			height: 160px
		}

		#clients img {
			transition: all 0.4s ease-in-out
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/career.css">
</head>

<body>
	<div class="wrapper">
		<div id="preloader" class="preloader">
			<div id="pre" class="preloader_container">
				<div class="preloader_disabler btn btn-default">Disable Preloader</div>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="social-linked ulockd-mrgn1215">
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<div class="welcm-ht text-cente ulockd-mrgn1215">
							<p class="text-right">Welcome To <strong class="text-thm2">The SM WORKFORCE</strong> Pvt Ltd</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Header Middle -->
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-lg-5">
						<div class="welcm-ht">
							<a href="index.php" class="ulockd-main-logo"><img src="images/smg-logo.png" alt="smg-logo.png" style='width:120px;height:75px'></a>
						</div>
					</div>

					<div class="col-md-10 col-lg-7 ulockd-pad390">
						<ul class="list-inline tac-smd ulockd-mrgn60 pt-5 ">
							<li class='space'>
								<div class="ulockd-ohour-info tac-smd mb30-xxsd">
									<div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-clock-o"></span></div>
									<div class="ulockd-info">
										<p class="ulockd-addrss"><strong>Official Schedule</strong> <br> 24 Hours Open</p>
									</div>
								</div>
							</li>
							<li>
								<div class="ulockd-ohour-info tac-smd mb30-xxsd">
									<div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-envelope"></span></div>
									<div class="ulockd-info">
										<p class="ulockd-addrss"><strong>Mail Us</strong> <br> info@smworkforce.com</p>
									</div>
								</div>
							</li>
							<li>
								<div class="ulockd-ohour-info tac-smd mb30-xxsd">
									<div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-phone"></span></div>
									<div class="ulockd-info">
										<p class="ulockd-addrss"><strong>Call Us For Details</strong> <br> +91-9116103491</p>
									</div>
								</div>
							</li>
							<li>
								<div class="ulockd-ohour-info tac-smd mb30-xxsd">
									<div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-map-signs"></span></div>
									<div class="ulockd-info">
										<p class="ulockd-addrss"><strong>Delhi Office</strong> <br> Sector 13 Dwarka New Delhi 110075</p>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Styles -->
		<header class="header-nav">
			<div class="main-header-nav navbar-scrolltofixed">
				<div class="container">
					<!-- Start Navigation -->
					<nav class="navbar navbar-default bootsnav menu-style1 navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

						<!-- Start Top Search -->
						<div class="top-search">
							<div class="container">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
								</div>
							</div>
						</div>
						<!-- End Top Search -->

						<div class="container">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
									<i class="fa fa-bars"></i>
								</button>
							</div>
							<!-- End Header Navigation -->

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-menu">
								<ul class="nav navbar-nav navbar-left" data-in="fadeIn">
									<li class="active scroll"><a href="#home">Home</a></li>
									<li class="scroll"><a href="#about">About Us</a></li>
									<li class="scroll"><a href="#ourservices">Our Services</a></li>
									<li class="scroll"><a href="#gallery">Gallery</a></li>
									<li class="scroll"><a href="#contact">Contact</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>

						<!-- Start Side Menu -->

						<!-- End Side Menu -->
					</nav>
					<!-- End Navigation -->
				</div>
			</div>
		</header>
		
   		<section class="container">
	    	<div class="row row-eq-height">
                  <?php 
                  if(!empty($joblistings['response'])){
                     foreach ($joblistings['response'] as $joblisting):
                     ?>
                     <div class="col-lg-4 col-md-6 mt-4">
                        <div class="job-list job-grid" style="height: 100%;">
                           <div class="job-list-details" style="padding-bottom: 15px;">
                              <div class="job-list-info">
                                 <div class="job-list-title">
                                    <h4><a href="javascript:void(0);"><?= $joblisting['job_title'] ?></a></h4>
                                 </div>
                                 <div class="experience">
                                    <?php 
                                    if (!empty($joblisting['work_exp_min']) || !empty($joblisting['work_exp_max'])) {
                                      
                                     ?>
                                     <p><strong>Experience: </strong> <?= $joblisting['work_exp_min'] ?> - <?= $joblisting['work_exp_max'] ?></p>
                                     <?php 
                                    }
                                    ?>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="job-list-option">
                                   <ul class="list-unstyled">
                                       <li><!-- <i class="fa fa-map-marker" aria-hidden="true"></i> --> 
                                          <?php
                                          if (!empty($joblisting['job_description'])) {
                                             echo substr($joblisting['job_description'],0,250). '..';
                                          }
                                          ?>
                                       </li>
                                     
                                   </ul>
                                 </div>
                              </div>
                           </div>
                           <?php 
                           if(!empty($joblisting['job_code'])):
                           ?>
                           <div class="job-list-favourite-time">
                              <!-- <a class="job-list-favourite order-2" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                              <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span> -->
                              <input type="hidden" id="job_title_<?= $joblisting['job_id'] ?>" value="<?= $joblisting['job_title'] ?>">
                              <input type="hidden" id="jb_description_<?= $joblisting['job_id'] ?>" value="<?= $joblisting['job_description'] ?>">
                              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#exampleModal" onclick="jobDescription(<?= $joblisting['job_id'] ?>)">
                                Details
                              </button>
                              <a href="job_apply.php?job_code=<?= $joblisting['job_code'] ?>" target="_blank" class="btn btn-primary btn-sm float-right">Apply</a>
                              <div class="clearfix"></div>
                           </div>
                           <?php 
                              endif;
                           ?>
                        </div>
                     </div>
                     <?php 
                     endforeach;
                  }
                  else{
                     echo "<div class='col-md-12 text-center'><h4>No job posted!</h4></div>'";
                  }
                  ?>
               </div>  
	   	</section>
		<!-- Our Footer -->
		<section class="ulockd-footer2 ulockd-pdng0 ulockd_bgp3">
			<div class="container footer-padding">
				<div class="row">
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-4">
						<div class="footer-fst-col">
							<div class="footer-logo ulockd-mrgn620 ulockd-mrgn1215"><img class="ulockd-footer-log img-responsive" src="images/smg-logo.png" alt="header-logo2.png" style='width:160px;height:90px'></div>
							<p>We look forward for the opportunity to
								Service your needs and become a valued
								Partner in maintaining and improving the
								Aesthetics of your premises.</p>

						</div>
					</div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-2">
						<div class="footer-qlink mb35-smd">
							<h3 class="text-uppercase"><span class="color-black33">NAVIGATION</span></h3>
							<ul class="list-unstyled">

								<li><a href="#home">Home</a></li>
								<li><a href="#about">About Us</a></li>
								<li><a href="#ourservices">Our Services</a></li>
								<li class="scroll"><a href="#gallery">Gallery</a></li>

							</ul>
						</div>
					</div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-contact">
							<h2 class="text-uppercase"><span class="color-black33">CONTACT US</span></h2>
							<p>SM Workforce pvt ltd <br>
								<b>Bhiwadi office-</b> <br>
								TB- 212 capital Galleriya near capital mall
								Ricco industrial area Bhiwadi Alwar Rajasthan 301019
								<span>Phone </span>91-9116103491
								<br>
								<b>Delhi office </b><br>
								Plot no 44, 3rd floor, pocket B-10 sector 13 Dwarka New Delhi 110075<br>
								<span>Phone </span>91-9116103492
							</p>

						</div>
					</div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-twitter">
							<h3 class="text-uppercase"><span class="color-black33">Follow Us </span></h3>
							<ul class="list-inline footer-font-icon style2 ulockd-mrgn1215">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-feed"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="ulockd-copy-right" style='background:#00b3ff'>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="color-white">SM Workforce © Pvt Ltd 2020. All right reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
	</div>
	<!-- Wrapper End -->
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootsnav.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/scrollto.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
	<script type="text/javascript" src="js/jquery.counterup.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>
	<script type="text/javascript" src="js/video-player.js"></script>
	<script type="text/javascript" src="js/jquery.barfiller.js"></script>
	<script type="text/javascript" src="js/timepicker.js"></script>
	<script type="text/javascript" src="js/tweetie.js"></script>
	<!-- Custom script for all pages -->
	<script type="text/javascript" src="js/color-switcher.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script>
		let iframe = document.querySelector("#target");

	   window.addEventListener('message', function(e) {
	      // message that was passed from iframe page
	      let message = e.data;

	      iframe.style.height = message.height + 'px';
	      iframe.style.width = message.width + 'px';
	   } , false);
	</script>
</body>

</html>