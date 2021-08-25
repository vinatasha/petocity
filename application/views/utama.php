<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Rubik&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="../../images/Logo.png" alt="" width="150" height="43" style="margin-right: 750px; margin-bottom: 10px; margin-top: 5px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICE</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Controller/aboutus/'); ?>">ABOUT US</a>
        </li>
      </ul>
      <div>
          <table>
            <tr>
              <td><img src="../images/avatar-female.png" style="height: 43px;"></td>
              <td><p style="margin: 0;">Hello !</p></td>
            </tr>
          </table>
      </div>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <!-- hero -->
    
    <section id="hero">
      <div class="container-fluid" style="padding: 0;">
        <img src="../images/hero-img.png" style="width: inherit;">
      </div>
    </section>
    
    <!-- menu -->
    
    <div id="menu" class="container">
      <div class="row">
        <div class="col-6">
          <div class="service-main position-relative">
            <img src="" alt="">
            <h3>Services</h3>
            <h3>Category</h3>
            <hr><br>
            <p class="service-desc">Silakan pilih layanan kami sesuai kebutuhan Anda. Di sini kami menyediakan layanan konsultasi, melihat jadwal dokter, pemesanan obat, serta antar-jemput.</p>
          </div>
        </div>
        <div class="col-6">
          <div class="service-options">
            <div class="row">
              <div class="col-6">
                <div class="service-top" style="background-color: #9CB4BC;">
                  <img src="../images/chat.svg" alt="" class="logo" style="filter: invert(99%) sepia(54%) saturate(195%) hue-rotate(85deg) brightness(98%) contrast(94%);"><br>
                  <a class="btn btn-primary" href="<?php echo base_url('Controller/konsul/'); ?>" role="button">Consult Now</a>
                </div>
              </div>

              <div class="col-6">
                <div class="service-top" style="background-color: #E0F2EE;">
                  <img src="../images/calendar.svg" alt="" class="logo" style="filter: invert(71%) sepia(16%) saturate(295%) hue-rotate(149deg) brightness(96%) contrast(90%);"><br>
                  <a class="btn btn-primary" href="<?php echo base_url('Controller/jadwal/'); ?>" role="button">Schedule</a>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="service-bottom" style="background-color: #5BD19A;">
                  <img src="../images/medicine.svg" alt="" class="logo" style="filter: invert(85%) sepia(30%) saturate(364%) hue-rotate(96deg) brightness(94%) contrast(91%);"><br>
                  <a class="btn btn-primary" href="<?php echo base_url('Controller/obat/'); ?>" role="button">Order Medicine</a>
                </div>
              </div>

              <div class="col-6">
                <div class="service-bottom" style="background-color: #97E2BF;">
                  <img src="../images/delivery-man.svg" alt="" class="logo" style="filter: invert(75%) sepia(36%) saturate(568%) hue-rotate(98deg) brightness(92%) contrast(85%);"><br>
                  <a class="btn btn-primary" href="<?php echo base_url('Controller/pickup/'); ?>" role="button">Pickup</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- footer -->
    <img src="../../images/YouDeserve.png" width="50%" height="auto" class="center" style="margin-bottom: -150px; ">
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad" >
          <img src="../../images/LogoPutih.png" alt="" width="180" height="50" >
          <ul class="list-unstyled">
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                unknown printer took a galley of type and scrambled it to make a type specimen </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column2-->
        <div class="footer-pad" style="margin-left: 170px; width: 400px;" >
            <h4>Hubungi Kami</h4>
            <ul class="list-unstyled" style="margin-top: 20px;">
                <li>Gedung Petociity , Jl. Malang</a></li>
                <li>Phone : </li>
                <li>012-3456-789</li>
                <li>Email : </li>
                <li>help@petocity.com</li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
        </div>
      </div>
    	<div class="col-md-3" style="text-align: right; margin-left: 200px; margin-top: 50px;">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2021 - PETOCITY.  Kelompok 8</p>
		</div>
	</div>


  </div>
  </div>
</footer>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
  <style>
  body {
    background-color: #FFFDF2;
}

h2 {
    font-family: 'Rubik', sans-serif;
    font-weight: bolder;
    font-size: 3.5rem;
}

h3 {
    font-family: 'Pangolin', cursive;
    font-size: 3.5rem;
}

h4 {
    font-family: 'Rubik', sans-serif;
    font-weight: bold;
    font-size: 2rem;
}

/* index.html */

.hero-img {
    position: relative;
    height: 1100px;
    top: -100px;
}

#menu {
    margin-top: 40px;
    margin-bottom: 40px;
}

.service-main {
    background-color: #EBA8BF;
    height: 500px;
    margin-right: 16px;
    padding: 30px 30px 15px 15px;
}

.service-main img {
    position: absolute;
    bottom: 0;
    left: 102px;
}

.service-desc {
    font-family: 'Rubik', sans-serif;
    font-size: 1.3rem;
}

.service-options {
    height: 500px;
}

.service-top{
    height: 225px;
    margin-bottom: 25px;
    padding: 20px 0 10px;
    text-align: center;
}

.service-bottom{
    height: 225px;
    margin-top: 25px;
    padding: 20px 0 10px;
    text-align: center;
}

.logo {
    height: 130px;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #124C5F; 
    border-color: #124C5F;
}

/*FOOTER*/
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

footer {
    background: #124C5F;
    margin-top:100px;
  }
  
  footer a {
    color: #fff;
    font-size: 14px;
    transition-duration: 0.2s;
  }
  
  .copy {
    font-size: 12px;
    padding: 10px;
    border-top: 1px solid #FFFFFF;
  }
  
  .footer-middle {
    padding-top: 2em;
    color: white;
  }
  
  
  /*SOCİAL İCONS*/
  
  /* footer social icons */
  
  ul.social-network {
    list-style: none;
    display: inline;
    margin-left:  !important;
    padding: 0;
  }
  
  ul.social-network li {
    display: inline;
    margin: 0 5px;
  }
  
  
  /* footer social icons */
  
  .social-network a.icoFacebook:hover {
    background-color: #3B5998;
  }
  
  .social-network a.icoLinkedin:hover {
    background-color: #007bb7;
  }
  
  .social-network a.icoFacebook:hover i,
  .social-network a.icoLinkedin:hover i {
    color: #fff;
  }
  
  .social-network a.socialIcon:hover,
  .socialHoverClass {
    color: #44BCDD;
  }
  
  .social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
  
  .social-circle li i {
    margin: 0;
    line-height: 30px;
    text-align: center;
  }
  
  .social-circle li a:hover i,
  .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
  }
  
  .social-circle i {
    color: #595959;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
  }
  
  .social-network a {
    background-color: #F9F9F9;
  }

  @media only screen and (max-width: 500px) {
    
    body {
        grid-template-areas: 
            "header"
            "footer"
            "body";
    }

}
  </style>
</html>
