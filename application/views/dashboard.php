<html>

<head>
	<title>
		<?php echo $title; ?>
	</title>
</head>

<body>

<div class='container jumbotron'>
	<div class="row">

		<!-- Icon Cards-->
		<div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-1">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
						<img height="70"  src="<?= base_url()."static/img/students.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">Students</h4>
						<h2 id="student_number" class="text-center"><?= $data['students']; ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-1">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
						<img height="70"  src="<?= base_url()."static/img/reservation.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">Reservation</h4>
						<h2 id="reservation_number" class="text-center"><?= $data['reservation']; ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-1">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
						<img height="70" src="<?= base_url()."static/img/declaration.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">Declaration</h4>
						<h2 class="text-center"><?= $data['declaration']['all']; ?></h2>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="col-lg-10 col-lg-offset-1 alert alert-info text-center text-capitalize">
			Declaration approved,rejected and in review
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-1">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
						<img height="70" src="<?= base_url()."static/img/pending.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">In Review</h4>
						<h2 class="text-center"><?= $data['declaration']['inreview']; ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-1">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
						<img height="70" src="<?= base_url()."static/img/approved.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">Approved</h4>
						<h2 class="text-center"><?= $data['declaration']['approved']; ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-2 mt-4 col-lg-offset-0">
			<div class="inforide">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
						<img height="70" src="<?= base_url()."static/img/rejected.jpeg"; ?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
						<h4 class="text-center">Rejected</h4>
						<h2 class="text-center"><?= $data['declaration']['rejected']; ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script>
	loadUsers('setContent');
</script>

</html>
