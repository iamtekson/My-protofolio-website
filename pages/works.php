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

    <!-- youtube section -->
    <section class="youtube container-fluid bg-dark text-light" id="youtube">
        <div class="row">
            <div class="youtube-content col-lg-6">
                <h1 class="text-primary text-center heading wow fadeInUp padding">Hey ! I have Youtube Channel</h1>
                <p class="">Welcome to my channel. In my channel I will upload some project based concepts which are
                    related to GIS and Remote Sensing. I am student of Geomatics Engineering and currently working in
                    various location based projects. This channel will help you to grow your knowledge in spatial
                    techniques as well as GIS and remote sensing. Do subscribe this channel and turn on notification for
                    my latest upload.</p>
                <div class="youtube-course">
                    <a href="https://www.youtube.com/channel/UCCV3Wo1EDp--JZTwf0TcFpg" class="btn btn-success">Subscribe
                        my channel</a>
                </div>
            </div>
            <div class="youtube-video col-lg-6 col-md-12 heading">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-V-54wGjebs" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>



    <!-- Other works section -->
    <section id="other-works">
        <div class="container padding">
            <h1 class="text-primary text-center heading wow fadeInUp">Other Works</h1>
            <div class="row">
                
                <?php
            @include('./_partials/_db_connect.php');
            $sql = "SELECT * FROM myWorks";
            
            $numberOfRows = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM myWorks'));
            $i = 1;

            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo '<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="card" style="min-width: 18rem;">
                  <img class="card-img-top" src="img/projects-src-'.$i.'.png" alt="Web-mapping">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['title'].'</h5>
                    <p class="card-text">'.$row['discription'].'</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target=#myModal'. $i.'>Get More</a>
                  </div>
                </div>
              </div>';


              echo '<!-- The Modal -->
              <div class="modal fade" id=myModal'. $i.'>
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
                      <img src="img/projects-src-'.$i.'.png">
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
    </section>



    <!-- udemy section -->
    <section class="udemy container-fluid bg-dark text-light" id="udemy-course">
        <div class="row padding">
            <div class="udemy-video col-lg-6 col-md-12 heading">
                <iframe width="560" height="315" src="https://www.udemy.com/embed/101d4cBEEfdFhWQXQ=/" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="udemy-content col-lg-6">
                <h1 class="text-primary heading wow fadeInUp">Free Udemy Course</h1>
                <p class="">I just uploaded the course on <code>Application of Remote Sensing Techniques. </code> 
                    This course is for Remote sensing beginner students. Student must be energetic about spatial learning. After completing this course, you will be able to understand the solid idea about the remote sensing. The student having knowledge about the basic interface of ArcGIS is eligible to learn this course, however other also may learn.</p>
                <div class="udemy-course">
                    <a href="https://www.udemy.com/share/101d4cBEEfdFhWQXQ=/" class="btn btn-success">Free access my
                        course</a>
                </div>
            </div>
        </div>
    </section>



    <section class="poster" id="poster-presentation">
        <div class="container padding">
            <h1 class="text-primary text-center heading wow fadeInUp">Poster Presentation</h1>
            <div class="row">
                <div class="col-md-4">
                    <iframe class="scribd_iframe_embed" title="Temporal Diversity in Kaski: 2003-2018"
                        src="https://www.scribd.com/embeds/412377572/content?start_page=1&view_mode=scroll&access_key=key-X9kUH9DOl4ngsBo8ZoTK&show_recommendations=true"
                        id="doc_83967" width='100%' height="300" frameborder="0"></iframe>
                    <h5 class="text-primary">Temporal Diversity in Kaski: 2003-2018</h5>
                </div>

                <div class="col-md-4">
                    <iframe class="scribd_iframe_embed"
                        title="Watershed and Drainage Delineation System: A Case Study of Pokhara"
                        src="https://www.scribd.com/embeds/412380573/content?start_page=1&view_mode=scroll&access_key=key-q8H1ZAg0i3FsS5GVMj3H&show_recommendations=true"
                        id="doc_15404" width="100%" height="300" frameborder="0"></iframe>
                    <h5 class="text-primary">Watershed and Drainage Delineation System: A Case Study of Pokhara</h5>
                </div>

                <div class="col-md-4">
                    <iframe class="scribd_iframe_embed"
                        title="ANALYSIS OF 2072 EARTHQUAKE; DISTRICT-WISE DAMAGE SUMMARY "
                        src="https://www.scribd.com/embeds/412380982/content?start_page=1&view_mode=scroll&access_key=key-RvXU06MjGlC8Fc8UyYXL&show_recommendations=true"
                        id="doc_38268" width="100%" height="300" frameborder="0"></iframe>
                    <h5 class="text-primary">Analysis of 2072 Earthquake; District-wise Damage Summary</h5>
                </div>
            </div>
        </div>
    </section>