<?php
if (!isset($_SESSION['userid'])) {
	header("location:".base_url()."index.php/v");
} else {
	if ($_SESSION['category'] !== 'Student') {
		header("location:".base_url()."index.php/v");
	}
}

?>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Student Accomodation MIS</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="../v/stdreservation">Reservation</a></li>
			<li><a href="../v/stddeclaration">Declaration</a></li>
			<li><a class="btn btn-default" href="../helper/logout">Logout (<?= $_SESSION['names']; ?>)</a></li>
		</ul>
	</div>
</nav>
