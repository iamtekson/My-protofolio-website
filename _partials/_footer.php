<!--Footer-->
<footer class="text-white">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-md-4 wow fadeInUp">
          <h2>Tekson</h2>
          <hr class="light">
          <p>(+977) 98091-05085</p>
          <p>teksondada@gmail.com</p>
          <p>lamachour 16 pokhara, 37400</p>
          <p>Wrc hostel</p>
        </div>
        <div class="col-md-4 m-footer wow fadeInUp">
          <hr class="light">
          <h5>Recent Projects</h5>
          <hr class="light">

          <?php
            @include('./_partials/_db_connect.php');
            $sql = "SELECT * FROM (
                    SELECT * FROM myWorks ORDER BY id DESC LIMIT 3
                ) sub
                ORDER BY id ASC";
            
            $numberOfRows = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM myWorks'));
            
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo '<p><a href="#" data-toggle="modal" data-target=#myModal'. $numberOfRows.'>'.$row['title'].'</a></p>';
            $numberOfRows--;
            }
            ?>
        </div>
        <div class="col-md-4 wow fadeInUp">
          <hr class="light">
          <h5>My Interest</h5>
          <hr class="light">
          <p>Coding</p>
          <p>Travelling</p>
          <p>Music</p>
          <p>Photography</p>
        </div>
        <div class="col-12 wow fadeInUp">
          <hr class="light-1">
          <h5> All rights are reserved by &copy; Tekson</h5>
        </div>
      </div>
    </div>
  </footer>
