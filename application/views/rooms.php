<html>

<head>
  <title>
    <?php echo $title;?>
  </title>
</head>

<body>

  <div class='container'>
    <div class="row">
      <div class="col-md-9">
        <h3>Registered Rooms</h3>
        <table class="table table-bordered">
          <thead>
            <th>#Count</th>
            <th>Names</th>
            <th>Description</th>
            <th>Gender</th>
            <th>Host</th>
            <th>Reg. Date</th>
            <th>Manage</th>
          </thead>
          <tbody id="registeredRoom">
            <?php
            foreach($data as $key => $dt){?>
          
            <tr onclick="setRowSelection(this,'#registeredRoom')">
              <td><?= $key+1 ?></td>
              <td><?= $dt['names'] ?></td>
              <td><?=$dt['description'] ?></td>
              <td><?=$dt['gender'] ?></td>
              <td><?= $dt['host'] ?></td>
              <td><?= $dt['regdate'] ?></td>
              <td>&nbsp;&nbsp;
                <button onclick="setEditRoomFormData(this)" data-id="<?= $dt['id']?>" data-name="<?=$dt['names'] ?>" data-description="<?= $dt['description'] ?>" data-host="<?= $dt['host'] ?>"  data-gender="<?= $dt['gender'] ?>"  class="btn btn-warning">Edit</button>&nbsp;&nbsp;
                <a href="../rooms/delete/<?= $dt['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-3">
        <div id="divRegRoom">
          <form id="formRoom" action="../rooms/register" method="POST">
            <h3>Register room</h3>
            <span id="regRoomResponse"> </span><br>

            <label>Name</label>
            <input type='text' name="names" id="names" class='form-control'><br>
            <label>Description</label>
            <textarea name="description" id="description" class='form-control'></textarea><br>
            <label>Gender</label>
            <input type='radio' name="gender" id="male" value='Male' checked>&nbsp; Male&nbsp;&nbsp;
            <input type='radio' name="gender" id="female" value='Female'>&nbsp;Female<br><br>
            <label>Host</label>
            <input type='number' name="host" id="host" class='form-control'><br>
            <input type='submit' name="register" id="btnRegRoom" value='Register' class='btn btn-primary'>
            <input type='reset' name="reset" id="btnResetRoomForm" value='Reset'
              class='btn btn-default pull-right'><br>
          </form>
        </div>
        <hr>
      </div>
    </div>
  </div>
</body>
<script>
  loadUsers('setContent');
</script>

</html>