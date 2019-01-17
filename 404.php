<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('include/header.php'); ?>
</head>
<body>
	<div id="wrapper">
		<header>
			<?php include('include/navigation.php'); ?>
		</header>
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li><a href="#"></a><i class="icon-angle-right"></i></li>
							<li class="active">404 Notfound</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center">
							<h2 class="error">404<br><small>Page not found</small></h2>
							<p class="lead">The requested URL was not found on this server</p>
							<a href="index.php" class="btn btn-theme btn-md marginbot50"><i class="fa fa-home"></i> Go to Home Page</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
<?php include('include/footer.php'); ?>
</html>
