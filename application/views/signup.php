<html>

<head>
	<title>
		Student accomodation MIS - <?php echo $title;?>
	</title>
</head>

<body>
<div class='container'>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 jumbotron">
			<form id='formStudents' action="../students/register" method="POST">
				<h3>Create a student account</h3>
				<span id="regUserResponse"></span>
				<input type="hidden" id="studentId">
				<label>Name</label>

				<input type='text' name="names" id="names" class='form-control'><br>
				<label>Reg no</label>
				<input type='text' id='regno' name="regno" class='form-control'><br>
				<label>National ID</label>
				<input type='text' name="nid" id='nid' class='form-control'><br>
				<label>Phone</label>
				<input type='text' name="phone" id='phone' class='form-control'><br>
				<label>Gender</label>
				<input type='radio' name="gender" id="male" value='Male' checked>&nbsp; Male&nbsp;&nbsp;
				<input type='radio' name="gender" id="female" value='Female'>&nbsp;Female<br><br>
				<label>Department</label><br>
				<select name="department" id='department'>
					<option value='default'>Select department</option>
					<option  value='IT'>Information Technology</option>
					<option  value='RE'>Renewable Energy </option>
					<option  value='ET'>Electronics and Telecommunication</option>
				</select><br><br>
				<label>Password</label>
				<input type='password' name="password" class='form-control'><br>
				<input type='submit' name="register" id="btnRegStudents" value='Register' class='btn btn-primary'>
				<input type='reset' name="reset" id="btnResetStudentForm" value='Reset'
					   class='btn btn-default pull-right'>
				<br>
				<a href=".">Already have an account? Back to login</a>

			</form>
			<hr>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
<script>
	// loadUsers('setContent');
</script>
<script src="<?php echo base_url('static/main.js');?>"></script>

</html>
