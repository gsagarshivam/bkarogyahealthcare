<?php 
require_once("dbcn.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Abaclor">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content=" ">
	<meta name="keywords" content="  " />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Plan | <?php echo COMPANY;?></title>
    <?php include("inc/common_head.php")?> 
</head>

<body>

	<!-- header Start -->
	<?php include("inc/header.php")?>
	<!-- header End -->
	<!-- Page Title Start -->
	<section class="pdt-120 pdb-150 section-white-typo" data-background="images/about-banner.png" data-overlay-dark="1">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2 class="text-uppercase text-white mrb-10">Plan</h2>
					<ul class="mb-0 justify-content-center">
						<li class="breadcrumb-item"><a href="<?php echo FULLURL ?>" class="text-white">Home</a></li>
						<li class="breadcrumb-item text-primary-color">Plan</li>
					</ul>
				</div>
			</div>
		</div>
	</section> 
	<!-- Page Title End -->
    			<!-- Pricing Plan -->
		<section class="pricing section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Business</span><b>Plan</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>Have a look on our Fastest growing MLM Business Plan</p>
                                    <a href="plan.pdf" download class="cs-btn-one btn-circle btn-gradient-color">Download Pdf</a>
								</div>
							</div>
						</div>  
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Single pricing -->
					
						<center>
                            <embed src="https://drive.google.com/viewerng/viewer?embedded=true&url=<?php echo $basePath;?>/plan.pdf" width="100%" style="height: 800px;"  />
						</center>
						<!--/ End Single pricing -->
					</div> 	
				</div>
			</div>
		</section>	
		<!--/ End Pricing Plan -->	
	<!-- Footer Area Start -->
	<?php include("inc/footer.php")?>
	<!-- Footer Area End -->

</body>
</html>