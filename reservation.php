<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <!-- site metas -->
  <title>Spicyo</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- owl css -->
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- responsive-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- awesome fontfamily -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="./css/toastr.css" rel="stylesheet" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
  <link rel="stylesheet" href="./css/login.css">

</head>
<!-- body -->

<body class="main-layout blog_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="" /></div>
  </div>

  <div class="wrapper">
    <!-- end loader -->

    <div class="sidebar">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div id="dismiss">
          <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="about.php">About</a>
          </li>
          <li>
            <a href="recipe.php">Recipe</a>
          </li>
          <li class="active">
            <a href="reservation.php">Reservation</a>
          </li>
          <li>
            <a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>

    <div id="content">
      <!-- header -->
      <header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="full">
                <a class="logo" href="index.php"><img src="images/logo.png" alt="#" /></a>
              </div>
            </div>
            <div class="col-md-9">
              <div class="full">
                <div class="right_header_info">
                  <ul>
                    <li class="dinone">
                      Contact Us :
                      <img style="margin-right: 15px; margin-left: 15px" src="images/phone_icon.png" alt="#" /><a href="tel:062458002">062-458-002</a>
                    </li>
                    <li class="dinone">
                      <img style="margin-right: 15px" src="images/mail_icon.png" alt="#" /><a href="mailto:grbo@gmail.com">grbo@gmail.com</a>
                    </li>
                    <li class="dinone">
                      <img style="
                            margin-right: 15px;
                            height: 21px;
                            position: relative;
                            top: -2px;
                          " src="images/location_icon.png" alt="#" /><a href="#">Francuske Revolucije bb</a>
                    </li>
                    <li class="button_user">
                      <?php
                      if (isset($_SESSION['email'])) {
                        echo '<a href="logout.php">Logout</a>';
                      } else {
                        echo '<button type="button" class="button active" data-toggle="modal" data-target="#loginModal">Login</button>
                      <button type="button" class="button" data-toggle="modal" data-target="#registerModal">Register</button>';
                      }

                      ?>
                    </li>
                    <li>
                      <button type="button" id="sidebarCollapse">
                        <img src="images/menu_icon.png" alt="#" />
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Login Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-12 mx-auto">
                    <form class="form">
                      <div class="form-group">
                        <label for="email" class="text-white">EMAIL </label>
                        <input type="email" class="form-control" id="emailLog" aria-describedby="emailHelp" placeholder=" EMAIL" />
                      </div>
                      <div class="form-group">
                        <label for="password" class="text-white">Password</label>
                        <input type="password" class="form-control" id="passwordLog" placeholder="*****" />
                      </div>

                      <button type="button" class="btn btn-warning text-white btn-block my-3 btn-login" onclick="login()">
                        LOGIN
                      </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Register Modal -->
      <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Register</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-12 mx-auto">
                    <form class="form">
                      <div class="form-group">
                        <label for="nameReg" class="text-white">Name </label>
                        <input type="email" class="form-control" id="nameReg" aria-describedby="emailHelp" placeholder=" Name" />
                      </div>

                      <div class="form-group">
                        <label for="emailReg" class="text-white">EMAIL </label>
                        <input type="email" class="form-control" id="emailReg" aria-describedby="emailHelp" placeholder=" Email" />
                      </div>
                      <div class="form-group">
                        <label for="passwordReg" class="text-white">Password</label>
                        <input type="password" class="form-control" id="passwordReg" placeholder="*****" />
                      </div>

                      <button type="button" class="btn btn-warning text-white btn-block my-3 btn-login" onclick="register()">
                        REGISTER
                      </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header -->
      <div class="yellow_bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title">
                <h2>RESERVATION</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- blog -->
      <div class="blog">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title">
                <i><img src="images/title.png" alt="#" /></i>

                <span>when looking at its layout. The point of using Lorem</span>
              </div>
            </div>
          </div>
          <div class="row">
            <?php
            if (isset($_SESSION['email'])) {
              echo '<input type="hidden" name="user" id="user" value="' . $_SESSION['email'] . '">';
            }
            ?>
            <div class="col-12">
              <label>Foods</label>
              <select name="food" id="food" class="custom-select custom-select-lg mb-3">
                <option value="" disabled>Select food</option>
                <option value="hamburger">hamburger</option>
                <option value="pizza">pizza</option>
                <option value="pasta">pasta</option>
                <option value="pita">Pita</option>
                <option value="cevapi">cevapi</option>
              </select>
              <input type="number" class="form-control" id="foodQuantity" placeholder="Food Quantity...">
            </div>
            <div class="col-12">
              <label>Drinks</label>
              <select name="drink" id="drink" class="custom-select custom-select-lg mb-3">
                <option value="" disabled>Select drink</option>
                <option value="cola">Cola</option>
                <option value="pepsi">Pepsi</option>
                <option value="water">Water</option>
                <option value="sprite">Sprite</option>
                <option value="jogurt">Jogurt</option>
              </select>
              <input type="number" class="form-control" id="drinkQuantity" placeholder="Drink Quantity..." onchange="calculate()">

            </div>
            <div class="col-12">
              <label>Options:</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="delivery" value="delivery">
                <label class="form-check-label" for="delivery">Delivery</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="pickup" value="pickup">
                <label class="form-check-label" for="pickup">Pickup</label>
              </div>
            </div>
            <div class="col-12 mt-5">
              <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total Price" readonly>
              <button type="button" class="btn btn-primary" onclick="calculate()">Reserve</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end blog -->

      <!-- footer -->
      <fooetr>
        <div class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2>Request A<strong class="white"> Call Back</strong></h2>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form class="main_form">
                  <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <input class="form-control" placeholder="Name" type="text" name="Name" id="name" />
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <input class="form-control" placeholder="Email" type="text" name="Email" id="email" />
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <input class="form-control" placeholder="Phone" type="text" name="Phone" id="phone" />
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <textarea class="textarea" placeholder="Message" type="text" name="Message" id="message"></textarea>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <button type="button" class="send" onclick="contact()">Send</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="img-box">
                  <figure><img src="images/img.jpg" alt="img" /></figure>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="footer_logo">
                  <a href="index.php"><img src="images/logo1.jpg" alt="logo" /></a>
                </div>
              </div>
              <div class="col-md-12">
                <ul class="lik">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="recipe.php">Recipe</a></li>
                  <li class="active">
                    <a href="reservation.php">Reservation</a>
                  </li>
                  <li><a href="contact.php">Contact us</a></li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="new">
                  <h3>Newsletter</h3>
                  <form class="newtetter">
                    <input class="tetter" placeholder="Your email" type="text" name="Your email" id="userEmail" />
                    <button type="button" class="submit" id="newsBtn">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="container">
              <p>© 2022 All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </fooetr>
      <!-- end footer -->
    </div>
  </div>
  <div class="overlay"></div>
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="./js/newsletter.js"></script>

  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="./js/toastr.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal",
      });

      $("#dismiss, .overlay").on("click", function() {
        $("#sidebar").removeClass("active");
        $(".overlay").removeClass("active");
      });

      $("#sidebarCollapse").on("click", function() {
        $("#sidebar").addClass("active");
        $(".overlay").addClass("active");
        $(".collapse.in").toggleClass("in");
        $("a[aria-expanded=true]").attr("aria-expanded", "false");
      });
    });
  </script>

  <script src="./js/login.js"></script>
  <script src="./js/register.js"></script>

  <script src="./js/contact.js"></script>
  <script src="./js/reservation.js"></script>

</body>

</html>