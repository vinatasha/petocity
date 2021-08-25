<!DOCTYPE html>
<html>

 <head>
    <title>Ganti Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- NAVBAR -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- FOOTER -->
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
 </head>

 <style>
     body {
    background: #FFF2B3;
    background-repeat: no-repeat;
}


#card {
    background: #9CB4BC;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 450px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
}

#card-regist {
    background: #9CB4BC;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 550px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
}

#card-lupa {
    background: #9CB4BC;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 400px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
}

#card-content {
    padding: 12px 44px;
}
#card-title {
    font-family: "Open sans", sans-serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}

a {
    text-decoration: none;
}
label {
    font-family: "Open Sans", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: black;
    font-family: "Open Sans", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: left;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-content {
    background: whitesmoke;
    border-radius: 5px;
    outline: none;
    padding-top: 10px;
}
#submit-btn {
    background: #124C5F;
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px rgb(112, 112, 112);
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 250px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px rgb(53, 53, 53);
}

#misi {
    margin:0 8px 4px 0px;
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

 <body>
     <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img src="../../images/Logo.png" alt="" width="150" height="43" style="margin-right: 650px; margin-bottom: 10px; margin-top: 5px;">
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
                <a class="nav-link" href="aboutus.html">ABOUT US</a>
              </li>
            </ul>
            <form action="<?php echo base_url('Control/create_process'); ?>" method ="post" class="d-flex">
              <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;">Log in</button>
              <button type="button" class="btn btn-outline-dark">Register</button>
            </form>
          </div>
        </div>
      </nav>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- pembatas navbar -->

    <div id="card-lupa">
        <div id="card-content">
            <div id="card-title">
            <h2>Ganti password</h2>
            </div>
            
            <form action="<?php echo base_url('controller/update_processlogin'); ?>" method="post" class="form">
      <br>
                <label for="user-email" style="padding-top:3px">&nbsp;</label>
                <input
                    id="user-email"
                    class="form-content"
                    type="email"
                    name="email"
                    autocomplete="on"
                    placeholder = "Email"
                    />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:5px">&nbsp;</label>
                <input
                    id="user-password"
                    class="form-content"
                    type="password"
                    name="kataSandi"
                    placeholder = "Kata Sandi Baru"/>
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="SUBMIT"/></a>
                
            </form>
    </div>
    </div>

    <!-- FOOTER -->
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
 </body>
</html>