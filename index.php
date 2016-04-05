<!-- no need to add the <html> or <body> they are included in the header which is inserted below this comment -->
<?php include 'header.php'; ?>
<div class="mdl-grid panel2">
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<?php include 'bookings/viewBookings.php';?>
	</div>
	<div class="mdl-cell mdl-cell--2-col"></div>
</div>

<!-- Start panel 1-->

<div class="features panel panel-alt box-right mdl-shadow--2dp">

	<div class="container">
		<!-- row start -->
		<div class="mdl-grid">
			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col">
				<div class="inner">

					<h3>Manage Bookings</h3>
					<p>Create and manage your own customisable booking for your favourite room(s)!</p>

					<a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Manage bookings</a>
					<!-- Light button -->
					<!-- <a href="features.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"><span aria-hidden="true" class="arrow_carrot-right_alt2" ></span> Learn More</a>-->
					<!-- Primary-colored flat button -->
					<!--<a href="booking.php" class="mdl-button mdl-js-button mdl-button--primary"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span>Learn More</a>-->

					<div class="clearfix"></div>

				</div>
			</div>
			<!-- ./column end -->
			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col sm-show">
				<div class="inner">

					<a href="booking.php">
						<!-- <img src="images/book.png" alt="Manage Bookings" style="width:100%;height:100%;"> -->
					</a>

					<div class="clearfix"></div>

				</div>
			</div>
			<!-- ./column end -->

		</div>

	</div>
	<!-- ./row end-->

	<div class="image-box img sm-hidden"></div>

	<div class="clearfix"></div>

</div>
<!-- ./ container end -->

<!-- ./ End panel 1-->

<!-- Start panel 2-->

<div class="features panel panel-alt box-left mdl-shadow--2dp">

	<div class="container">
		<!-- row start -->
		<div class="mdl-grid">
			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col">
				<div class="inner">
					<!--<a href="booking.php">
						<img src="images/floor.png" alt="Manage Bookings" style="width:100%;height:100%;">
					</a> -->
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- ./column end -->

			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col">
				<div class="inner">

					<h3>Campus Map</h3>
					<p>Don't know your way around? View a map of the campus!</p>

					<div class="clearfix"></div>

					<a href="map.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> View Campus</a>
					<!--<a href="features.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"><span aria-hidden="true" class="arrow_carrot-right_alt2" ></span> Learn More</a>-->

					<div class="clearfix"></div>

				</div>
			</div>
			<!-- ./column end -->

		</div>

	</div>
	<!-- ./row end-->

	<div class="image-box img2 sm-hidden">
	</div>

	<div class="clearfix"></div>

</div>
<!-- ./ container end -->

<!-- ./ End panel 2-->

<!-- Start panel 3-->

<div class="features panel panel-alt box-right mdl-shadow--2dp">

	<div class="container">
		<!-- row start -->
		<div class="mdl-grid">
			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col">
				<div class="inner">

					<h3>View Room Availability</h3>
					<p>Check what rooms are available at a particular date & time!</p>
					<a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Check Availablity</a>
					<!--<a href="features.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"><span aria-hidden="true" class="arrow_carrot-right_alt2" ></span> Learn More</a>-->

					<div class="clearfix"></div>

				</div>
			</div>
			<!-- ./column end -->
			<!-- column start -->
			<div class="mdl-cell mdl-cell--6-col">
				<div class="inner">
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- ./column end -->

		</div>

	</div>
	<!-- ./row end-->

	<div class="image-box img3 sm-hidden">

	</div>

	<div class="clearfix"></div>

</div>
<!-- ./ container end -->

<!-- ./ End panel 3-->

</div>
<div class="clearfix"></div>

<!-- Start panel 4-->

<div class="panel2 promo mdl-shadow--2dp">

	<div class="container">

		<div class="inner intro">
			<h3>Productivity starts here</h3>
			<p>Click the 'get started' button to create an account and begin booking rooms!</p>
			<a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2"></span> Get Started</a>

		</div>

	</div>
	<!-- ./container end -->

</div>
<!-- ./promo panel end-->

<!-- End panel 4-->


<?php include 'footer.php'?>
