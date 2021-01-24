<html>

<head>
    <title>
        <?= $title;?>
    </title>
</head>

<body>
    
    <div class='container'>
        <div class="row">
            <div class="col-md-12" >
                <h3>Declared home <button class='btn btn-primary btn-lg pull-right' data-toggle='modal' data-target='#homeDeclaration'> Make declaration </button></h3>

				<?= $this->session->flashdata("response"); ?>
                <table class="table table-bordered">
                    <thead>
                        <th>#Count</th>
                        <th>Names</th>
                        <th>Phone</th>
                        <th>Landlord</th>
                        <th>House</th>
                        <th>Ac. Year</th>
                        <th>Class</th>
                        <th>Reg. Date</th>
                        <th>Manage</th>
                    </thead>
                    <tbody id="registeredStudents">
                        <?php foreach($data as $key=>$dt){ ?>
                        <tr>
                            <td><?= $key+1;?></td>
                            <td><?= $dt['names'];?></td>
                            <td><?= $dt['phone'];?></td>
                            <td><?= $dt['landlord_name']."<br>(".$dt['landlord_phone'].")";?></td>
                            <td><?= $dt['house_no'];?></td>
                            <td><?= $dt['academic_year'];?></td>
                            <td><?= $dt['level_class'];?></td>
                            <td><?= substr($dt['regdate'],0,10);?></td>
                            <td>
                                <a href="../outside/delete/<?= $dt['id'];?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
                <hr>
                <div class='modal' id='homeDeclaration'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                    <h3 style='margin-left:20%'>Declare accomodation <span class='pull-right btn btn-danger' data-dismiss='modal' style='font-size:20px; font-weight:bold'>&times;</span></h3>
                    </div>
                    <div class='modal-body'>
                <form action="../outside/register" method="POST">
                    <span id="regUserResponse"></span>
                    <div class='col-md-2'></div>
            <div class="col-md-4">
                    <input type="hidden" id="studentId">
                    <label>Reg no</label>
                    <input type='text' name="regno" id="regno" class='form-control'><br>
                    <label>Level class</label>
                    <input type='text' name="level_class" id="level_class" class='form-control' placeholder='2 B'><br>
                    <label>Landlord names</label>
                    <input type='text' name="landname" id='landname' class='form-control'><br>
                    <label>Landlord national ID</label>
                    <input type='text' name="landnid" id='landnid' class='form-control'><br>
                    <label>District</label>
                    <input type='text' name="district" id='district' class='form-control'><br>
                    <label>Sector</label>
                    <input type='text' name="sector"  id='sector' class='form-control'><br>
                        </div>
                        <div class='col-md-4'>
                    <label>Name</label>

                    <input type='text' id='names' name="names" class='form-control' readonly><br>
                    <label>Academic year</label>
                    <input type='text' name="academic_year" id="academic_year" class='form-control' placeholder='2019-2020'><br>
                    <label>Landlord phone</label>
                    <input type='text' name="landphone" id='landphone' class='form-control'><br>
                    <label>House No</label>
                    <input type='text' name="house_no" id="house_no" class='form-control'><br>
                    <label>Cell</label>
                    <input type='text' name="cell"  id='cell' class='form-control'><br>
                    <label>Village</label>
                    <input type='text' name="village"  id='village' class='form-control'><br>
                        </div>
                    <input type='submit' name="register" style='height:40px;width:50%;font-size:20px; margin-left:25%' id="btnRegStudents" value='Register' class='btn btn-primary'></center>
                </form>
                        </center>
                    </div>
                        <div class='modal-footer'>
                            <button class='btn btn-danger' data-dismiss='modal'>Close</button>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // loadUsers('setContent');
</script>

</html>
