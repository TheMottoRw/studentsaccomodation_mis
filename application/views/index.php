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
                <form action="<?= base_url().'index.php/helper/login';?>" method="POST">
                    <h3>Student Accomodation - Login to continue </h3>
                    <span id="regUserResponse"> <?= $this->session->flashdata("response"); ?> </span><br>
                    <label>Phone</label>
                    <input type='text' name="phone" class='form-control'><br>
                    <label>Password</label>
                    <input type='password' name="password" class='form-control'><br>
                    <input type='submit' name="register" id="btnLogin" value='Login' class='btn btn-success'>
					<a href="signup">Not registered? Register now</a>
					<br>

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
