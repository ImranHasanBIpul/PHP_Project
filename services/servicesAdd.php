<!DOCTYPE html>
<html lang="en">
<?php 
	if (basename(__DIR__) != 'project') {
		$baseUrl = '../';
		$isInternal = true;
	} else {
		$baseUrl = '';
		$isInternal = false;
	}

include "../includes/head.php";
?>



<body>

<?php include "../includes/navber.php";?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<?php include '../includes/navigation.php'; ?>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
			

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="bannar.php"> <i class="icon-home2 position-left"></i> Service</a></li>
							<li class="active">Add</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Service Add</h5>
							<div class="heading-elements">
								<ul class="icons-list">
								<li style="margin-right: 10px;" class=""><a class="btn btn-primary text-light add-new">Add New</a></li>
			                		<!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
			                	</ul>
		                	</div>
						</div>
<hr>
						<div class="panel-body">
						<form class="form-horizontal" action="../controller/bannerController.php" method="post">
								<fieldset class="content-group">

								<?php
								if (isset($_GET["msg"])) {
								?>
									<div class="alert alert-success no-border">
											<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
											<span class="text-semibold">Success</span> <?php echo $_GET["msg"];?> 
										</div>
										<?php } ?>

									<div class="form-group">
										<label class="control-label col-lg-2" for="service_name">Service Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="service_name" name="service_name" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="icon_name">Icon Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="icon_name" name="icon_name" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="service_details">Service Details</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" class="form-control" id="service_details" placeholder="Default textarea" name="service_details" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="image">Image</label>
										<div class="col-lg-10">
											<input type="file" class="form-control" id="image" name="image">
										</div>
									</div>
								</fieldset>
								<div class="text-right">
									<a href="services.php" class="btn btn-primary">Back To List</a>

									<button type="submit" class="btn btn-primary" name="save_service">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
		
						</div>

						
					</div>
					<!-- /basic datatable -->


				

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<?php include "../includes/footer.php";?>
</body>
</html>
