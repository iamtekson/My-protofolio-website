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

      case "home":
      @include("./pages/home.php");
      break;

      default:
          @include("./pages/home.php");
    }

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