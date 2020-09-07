<html>

<head>
    <title>
        <?= $title;?>
    </title>
</head>

<body>
    
    <div class='container'>
        <div class="row">
            <div class="col-md-9">
                <h3>Reserve your accomodation room space</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>#Count</th>
                        <th>Names</th>
                        <th>Phone</th>
                        <th>Room No</th>
                        <th>Ac. Year</th>
                        <th>Class</th>
                        <th>Reg. Date</th>
                        <th>Manage</th>
                    </thead>
                    <tbody id="registeredReservations">
                        <?php foreach($data as $key=>$dt){ ?>
                        <tr onclick="setRowSelection(this,'#registeredReservations')">
                            <td><?= $key+1;?></td>
                            <td><?= $dt['student'];?></td>
                            <td><?= $dt['phone'];?></td>
                            <td><?= $dt['room'];?></td>
                            <td><?= $dt['academic_year'];?></td>
                            <td><?= $dt['level_class'];?></td>
                            <td><?= substr($dt['regdate'],0,10);?></td>
                            <td><button onclick='setEditReservationFormData(this)' data-id="<?= $dt['id']?>" data-name="<?=$dt['student'] ?>" data-regno="<?=$dt['regno'] ?>" data-phone="<?=$dt['phone'] ?>"  data-class="<?=$dt['level_class'] ?>"  data-acyear="<?=$dt['academic_year'] ?>" data-room="<?=$dt['room_id'] ?>" class="btn btn-warning">Edit</button>&nbsp;&nbsp;
                                <a href="../incollege/delete/<?= $dt['id'];?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
                <form id='formReservation' action="../incollege/register" method="POST">
                    <h3 style='margin-left:15%'>Reserve accomodation</h3>
                    <span id="regUserResponse"></span>
            <div class="col-md-3">
                    <input type="hidden" id="reservationId">
                    <label>Reg no</label>
                    <input type='text' name="regno" id="regno" class='form-control'><br>
                    <label>Name</label>
                    <input type='text' name="names" id="names" class='form-control' readonly><br>
                    <label>Level class</label>
                    <input type='text' name="level_class" id="level_class" class='form-control' placeholder='2 B'><br>
                    <label>Academic year</label>
                    <input type='text' name="academic_year" id="academic_year" class='form-control' placeholder='2019-2020'><br>
                    <label>Room</label>
                    <select name="room_id"  id='room_id' class='form-control'><br>
                        <option value='default'>Select room</option>
                        </select><br>
                    <input type='submit' name="register" style='width:50%;font-size:18px; margin-left:20%' id="btnRegStudents" value='Reserve' class='btn btn-primary'></center>
                </form>
                <hr>
            </div>
        </div>
    </div>
</body>
<script>
    // loadUsers('setContent');
</script>

</html>