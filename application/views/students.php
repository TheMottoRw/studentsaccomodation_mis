<html>

<head>
    <title>
        <?php $title;?>
    </title>
</head>

<body>
    <div class='container'>
        <div class="row">
            <div class="col-md-9">
                <h3>Registered Student</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>#Count</th>
                        <th>Names</th>
                        <th>Regno</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Reg. Date</th>
                        <th>Manage</th>
                    </thead>
                    <tbody id="registeredStudents">
                    <?php
            foreach($data as $key => $dt){?>
          
            <tr onclick="setRowSelection(this,'#registeredStudents')">
              <td><?= $key+1 ?></td>
              <td><?= $dt['names'] ?></td>
              <td><?=$dt['regno'] ?></td>
              <td><?= $dt['phone'] ?></td>
              <td><?= $dt['gender'] ?></td>
              <td><?= $dt['department'] ?></td>
              <td><?= $dt['regdate'] ?></td>
              <td>&nbsp;&nbsp;
                <button onclick="setEditStudentFormData(this)" data-id="<?= $dt['id']?>" data-name="<?=$dt['names'] ?>" data-regno="<?=$dt['regno'] ?>" data-phone="<?=$dt['phone'] ?>" data-nid="<?=$dt['nid'] ?>"  data-department="<?= $dt['department'] ?>" data-gender="<?= $dt['gender'] ?>" class="btn btn-warning">Edit</button>&nbsp;&nbsp;
                <a href="../students/delete/<?= $dt['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <form id='formStudents' action="../students/register" method="POST">
                    <h3>Register Student</h3>
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
                        class='btn btn-default pull-right'><br>
                </form>
                <hr>
            </div>
        </div>
    </div>
</body>
<script>
    loadUsers('setContent');
</script>

</html>