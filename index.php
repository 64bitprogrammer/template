<!-- Landing page for the website (home) -->
<?php
	$pageTitle = "Template101";
	require_once 'include/header.php';
?>

 <!-- MAIN container to hold the page content -->
<div class='container-fluid zero-padding' style='height:600px;'>

	<!-- Upper HEADER contianer  -->
	<div class="container-fluid grey-bg">

		<div class='row'>

		</div>

	</div>

	<!-- the body of CONTENT container  -->
	<div class="container-fluid">
		<div class='row'>
			<div class="col-2 col-sm-4 col-md-4 col-lg-4 col-xl-5">
				<h4>Left-Column </h4>
			</div>
			<div class="col-8 col-sm-4 col-md-4 col-lg-4 col-xl-2">
				<h4> Centre Column </h4>
			</div>
			<div class="col-2 col-sm-4 col-md-4 col-lg-4 col-xl-5">
				<h4>Right-Column </h4>
			</div>
		</div>
	</div> <!-- End of body content container -->

	<!-- container for FOOTER  -->
	<div class="container-fluid grey-bg">
		<div class='row'>

		</div>
	</div>

</div> <!-- End of main page container -->

<!-- Javascript code for the page  -->
<script>

</script>

<?php
	require_once 'include/footer.php';
?>
