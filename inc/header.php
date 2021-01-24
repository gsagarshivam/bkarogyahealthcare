<style>
	/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>



<header class="header-style-two"> 
		<div class="header-wrapper">
			<div class="header-top-area bg-gradient-color d-none d-lg-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 header-top-left">
							<span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> <?php echo ADDRESS?></span>
						<!--	<span class="phone"><i class="webexflaticon flaticon-send"></i> <?php echo EMAIL?></span> -->
						</div>
						<div class="col-lg-4 header-top-right-part text-right">
							<ul class="social-links">
								<li><a href="https://www.facebook.com/bkhealthcarepvt" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/ArogyamMission" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/missionarogyam/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCrFVKk45x1_boNZxrv3uM7g/videos" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle">
				<div class="container">
					<div class="row">
						<div class="col-md-12 d-flex align-items-center justify-content-between">
							<a class="navbar-brand logo" href="<?php echo FULLURL ?>">
								<img id="logo-image" class="img-center" src="images/bklogo.png" style="height:110px ;" alt=""  />
							</a>
							<div class="topbar-info-area d-none d-sm-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center mr-3">
									<i class="webexflaticon flaticon-mail-1 text-primary-color"></i>
									<div>
										<h6>Email Us</h6>
										<a class="text-gray" href="#"><?php echo EMAIL ?></a>
									</div> 
								</div>
								<div class="d-none d-md-flex align-items-center"> 
									<i class="webexflaticon flaticon-phone-1 text-primary-color"></i>
									<div>
										<h6>Call Us</h6>
										<a class="text-gray" href="#"><?php echo CONTACT?></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-navigation-area three-layers-header">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="header-searchbox-style-two">
								<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
									<span class="bar1"></span>
									<span class="bar2"></span>
									<span class="bar3"></span>
								</div>
								<div class="show-searchbox">
									<a href="#"><i class="webex-icon-Search"></i></a>
								</div>
							
							</div>
							<div class="main-menu">
								<nav id="mobile-menu">
									<ul>
                                    <li><a href="index.php">Home</a></li>
                                    <div class="dropdown">
									  <li><a href="about.php">About</a></li>
									  <div class="dropdown-content">
									    <a href="management.php">Management</a>
									  </div>
									</div>
                                    <li><a href="plan.php">Plan</a></li>
                                    <li><a href="legal.php">Legal</a></li>
									<div class="dropdown">
									  <li><a href="#">Brands</a></li>
									  <div class="dropdown-content">
									    <a href="arogyaveda.php">Arogyaveda</a>
									    <a href="rupam.php">Rupam</a>
									    <a href="nutriveda.php">Nutriveda</a>
									    <a href="muscleveda.php">Muscleveda</a>
									  </div>
									</div>    
									<div class="dropdown">
									  <li><a href="#">Service</a></li>
									  <div class="dropdown-content">
									    <a href="kidneycare.php">Bk Kidney Care</a>
									    <a href="heartcare.php">Bk Heart Care</a>
									    <a href="cancercare.php">Bk Cancer Care</a>
									    <a href="diabetescare.php">Bk Diabetes Care</a>
										<a href="kayasuddhi.php">Kaya Shuddhi</a>
									    <a href="immunitybooster.php">Bk Immunity Booster</a>
									  </div>
									</div>                                    
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="clog/index.php">Login</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="plan.pdf" download class=" btn-gradient-color">Download</a></li>
                                    	
									</ul>
								</nav>
							</div>
							<div class="side-panel-content">
								<div class="close-icon"> 
									<button><i class="webex-icon-cross"></i></button>
								</div>
								<div class="side-panel-logo mrb-30">
									<a href="<?php echo FULLURL ?>">
										<img src="<?php echo COMPANYLOGO?>" alt="" />
									</a>
								</div>
								<div class="side-info mrb-30">
									<div class="side-panel-element mrb-25">
										<h4 class="mrb-10">Office Address</h4>
										<ul class="list-items">
											<li><span class="fa fa-globe mrr-10 text-primary-color"></span><?php echo ADDRESS?></li>
											<li><span class="fa fa-envelope-o mrr-10 text-primary-color"></span><?php echo EMAIL?></li>
											<li><span class="fa fa-phone mrr-10 text-primary-color"></span><?php echo CONTACT?></li>
										</ul>
									</div>
									<div class="side-panel-element mrb-30">
										<h4 class="mrb-15">Pinterest</h4>
										<ul class="pintarest-list">
											<li><a href="#"><img class="img-full" src="images/side-panel/1.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/2.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/3.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/4.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/5.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/6.jpg" alt=""></a></li>
										</ul>
									</div>
								</div>
								<h4 class="mrb-15">Social List</h4>
								<ul class="social-list">
									<li><a href="https://www.facebook.com/bkhealthcarepvt" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/ArogyamMission" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/missionarogyam/" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCrFVKk45x1_boNZxrv3uM7g/videos" target="_blank"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
							<div class="mobile-menu"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>