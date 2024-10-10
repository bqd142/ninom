<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body class="sub_page">
<?php
    include("head.php");
?>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <?php
    include("nav.php");
  ?>

  <!-- end nav section -->

  <?php
    include("../model/control_user.php");
    $model = new data_account();
    $infor = $model->sl_username($_SESSION['user_name']);
    $infor = $infor->fetch_assoc(); 
  ?>
    <div class="container" style="margin-bottom: 100px;">
        <div class="row mt-5">
            <div class="offset-1 col-4">
                <h4>HÌNH ĐẠI DIỆN</h4>
                <img class="rounded" width="165px" height="165px" src="../upload/<?php echo$infor['avatar'];?>">
            </div>
            <div class="col-7 lh-lg">
                <h4>THÔNG TIN CÁ NHÂN</h4>
                    USERNAME: 
                    <input type="text" class="form-control mb-3" name="txtname" value="<?php echo$infor['username'];?>" disabled> 
                    EMAIL:
                    <input type="text" class="form-control mb-3" name="txtemail" value="<?php echo$infor['email'];?>" disabled> 
                    ADDRESS:
                    <input type="textarea" class="form-control mb-3" name="txtaddress" value="<?php echo$infor['address'];?>" disabled> 
                    GENDER:
                    <select class="form-select mb-3" name="txtgender" disabled>
                      <?php $gender = $infor['gender'] ?>
                        <option <?php if ($gender == 'Male') echo 'selected'; ?>>Male</option>
                        <option <?php if ($gender == 'Female') echo 'selected'; ?> >Female</option>
                        <option <?php if ($gender == 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                    HOBBY:
                    <textarea class="form-control" disabled><?php echo$infor['hobby'];?></textarea>
            </div>
            <div class="row d-flex justify-content-center mt-5">
            <a href="change_inf.php" type="button" style="width: 100px;" class="btn btn-dark">Chỉnh Sửa</a>
        </div>
        </div>
    </div>



  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <?php
    include("footer.php");
  ?>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <?php
    include("script.php");
  ?>

</body>

</html>