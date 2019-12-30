<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

  <!--Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Animation CSS-->
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700|Lato" rel="stylesheet">


  <!--Font-awesome link-->
  <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



  <!--Title of the Website-->
  <title>Tek Bahadur Kshetri, Protofolio</title>

</head>
<!--End of head Section-->

<body>
  <?php
    @include('./_partials/_navbar.php');

    // switch case to change the page through navbar
    $page = $_GET['page'] ?? " ";
    switch($page)
    {
      case "contact":
      @include("./pages/contact.php");
      break;

      case "EAR":
      @include("./templates/pages/EAR.php");
      break;

      default:
          @include("./templates/pages/home.php");
    }
    
    @include('./_partials/_top-design.php');
    @include('./_partials/_intro.php');
    @include('./_partials/_skills.php');
  ?>

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


  <!--My Interests-->
  <div class="container-fluid bg-dark my-interests padding" id="interest">
    <h1 class="text-primary text-center heading wow fadeInUp">Interests</h1>

    <div class="row">
      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fas fa-code text-success padding"></i>
        <p class="my-interests-1 text-white">CODING</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fa fa-camera text-success padding" aria-hidden="true"></i>
        <p class="my-interests-1 text-white">PHOTOGRAPHY</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fa fa-plane text-success padding" aria-hidden="true"></i>
        <p class="my-interests-1 text-white">TRAVELLING</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fa fa-book text-success padding" aria-hidden="true"></i>
        <p class="my-interests-1 text-white">READING</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fa fa-gamepad text-success padding" aria-hidden="true"></i>
        <p class="my-interests-1 text-white">GAMING</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center wow fadeInUp" data-wow-delay=".5s">
        <i class="fa fa-music text-success padding" aria-hidden="true"></i>
        <p class="my-interests-1 text-white">MUSIC</p>
      </div>

    </div>

  </div>

  </div>


  <!--Contact Me-->
  <section id="contact">
    <div class="container padding">
      <div class="well well-sm">
        <h1 class="text-primary text-center heading wow fadeInUp">Contact Me</h1>
      </div>

      <div class="row">
        <div class="col-md-7 wow slideInLeft">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3514.215414847917!2d83.96974236467051!3d28.261484282565632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937fcb0643d1%3A0x1b63bf7043241499!2sLamachaur%2C+Pokhara+33700!5e0!3m2!1sen!2snp!4v1530104874316"
            width="100%" height="315" frameborder="0" style="border:0"></iframe>
        </div>

        <div class="col-md-5 wow slideInRight">
          <h3 class="text-primary wow fadeInUp">Get in Touch</h3>
          <form id="contact-form" method="post" action="/form.php">
            <div class="form-group">
              <input name="name" type="text" class="form-control" name="" value="" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input name="email" type="email" class="form-control" value="" placeholder="Your E-mail" required>
            </div>
            <div class="form-group">
              <input name="" type="tel" class="form-control" value="" placeholder="Phone">
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control" type="text" name="" rows="3"
                placeholder="Message"></textarea>
            </div>
            <input type="submit" class="btn btn-outline-primary submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </section>
  <hr class="my-4">


  <!--Conntect-->
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="text-primary animated fadeInUp">Connect</h2>
      </div>
      <div class="col-12 social">
        <a href="https://facebook.com/iamtekson" target="_blank"><i class="fab fa-facebook wow rotateIn"></i></a>
        <a href="https://twitter.com/iamtekson" target="_blank"><i class="fab fa-twitter wow rotateIn"></i></a>
        <a href="https://plus.google.com/u/0/105225708150638237163" target="_blank"><i
            class="fab fa-google-plus-g wow rotateIn"></i></a>
        <a href="https://www.instagram.com/iamtekson/"><i class="fab fa-instagram wow rotateIn" target="_blank"></i></a>
        <a href="https://www.youtube.com/channel/UCCV3Wo1EDp--JZTwf0TcFpg?view_as=subscriber" target="_blank"><i
            class="fab fa-youtube wow rotateIn"></i></a>
        <a href="https://github.com/iamtekson"><i class="fab fa-github wow rotateIn" target="_blank"></i></a>
      </div>
    </div>
  </div>

  <?php
    @include('./_partials/_footer.php');
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>