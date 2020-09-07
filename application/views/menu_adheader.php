    <?php 
    if(!isset($_SESSION['userid'])){
        header("location:/index.php/v");
    }
    ?>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Student Accomodation MIS</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="../v/students">Students</a></li>
                <li><a href="../v/rooms">Rooms</a></li>
                <!-- <li><a href="/v/prescription">Prescription</a></li> -->
                <li><a href="../v/reservation">Reservation</a></li>
                <li><a href="../v/declaration">Declaration</a></li>
                <li><a class="btn btn-default" href="../helper/logout">Logout (<?= $_SESSION['category'];?>)</a></li>
            </ul>
        </div>
    </nav>