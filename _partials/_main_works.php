<!-- main works section -->
<div class="container padding" id="work">
    <h1 class="text-primary text-center heading wow fadeInUp">Recent Projects</h1>
    <div class="row">
        <?php
            @include('./_partials/_db_connect.php');
            $sql = "SELECT * FROM (
                    SELECT * FROM myWorks ORDER BY id DESC LIMIT 3
                ) sub
                ORDER BY id ASC";
            
            $numberOfRows = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM myWorks'));
            $i = 1;

            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo '<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="card" style="min-width: 18rem;">
                  <img class="card-img-top" src="img/projects-src-'.$numberOfRows.'.png" alt="Web-mapping">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['title'].'</h5>
                    <p class="card-text">'.$row['discription'].'</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target=#myModal'. $numberOfRows.'>Get More</a>
                  </div>
                </div>
              </div>';


              echo '<!-- The Modal -->
              <div class="modal fade" id=myModal'. $numberOfRows.'>
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">'.$row['title'].'</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        
                    <!-- Modal body -->
                    <div class="modal-body">
                      <p>'.$row['discription'].'</p>
                      <img src="img/projects-src-'.$numberOfRows.'.png">
                    </div>
                    <a href="'.$row['githubLink'].'" target="_blank" class="btn btn-info mt-2">View git repo</a>
                    <a href="'.$row['liveAt'].'" target="_blank" class="btn btn-success mt-2">Visit Site</a>
        
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
        
                  </div>
                </div>
              </div>';
              
            $i++;
            $numberOfRows--;
            }
            
      ?>

     

      </div>
    </div>
  </div>