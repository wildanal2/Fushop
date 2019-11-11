
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fusho: Toko Furniture Online No.1 di Indonesia</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/customers-template/img/favicon.png">


    <?php $this->load->view("partial/header_script.php") ?>

    <style type="text/css">
        .aa{
          cursor: pointer;
        }  
    </style>

  </head>
  <body>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/images/fusho.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="category.html"> shop category</a>
                                        <a class="dropdown-item" href="single-product.html">product details</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Rooms
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html"> login</a>
                                        <a class="dropdown-item" href="tracking.html">tracking</a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href=""><i class="ti-heart"></i></a>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>  
                            </div>
                            <a href="<?php echo site_url() ?>/Account/login"><i class="ti-user"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->  

    <!-- breadcrumb start-->
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                 <br><br><br>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part padding_top ">
        <div class="container">
            <div class="row align-items-center">
                <!-- Login Info -->
                <div class="col-lg-6 col-md-6" id="infologin"> 
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="#" id="createaccount" class="btn_3">Create an Account</a>
                        </div>
                    </div> 
                </div>
                <!-- Signup info -->
                <div class="col-lg-6 col-md-6" id="infosignup" style="display: none;"> 
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Sudah punya akun ?</h2>
                            <p>Masuk dan temukan barang pilihan dari para Profesional Creator</p>
                            <a href="#" id="loginaccount" class="btn_3">Login</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Login -->
                    <div class="login_part_form" id="fomlogin">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>

                            <form class="row contact_form" id="form_login" >
                                <div class="col-md-12 form-group p_star">
                                    <input type="Email" class="form-control" id="logname" name="logname" value=""
                                        placeholder="Email" required="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="logpassword" name="logpassword" value=""
                                        placeholder="Password" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <input class="btn_3" type="submit" name="jsjsj">
                                    <!-- <button type="submit" value="submit" class="btn_3">log in</button> -->
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>

                        </div>
                    </div>
                    
                    <!-- New Account -->
                    <div class="login_part_form" id="fomsignup" style="display: none;">
                        <div class="login_part_form_iner">
                            <h3>Bergabung Sekarang ! <br>
                                Jutaan pilihan profesional</h3> 
                            <form class="row contact_form" id="form_signup">
                                <div class="row" style="margin-left: 3px">
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="upfirstname" name="upfirstname"
                                            placeholder="Nama depan" required="">
                                    </div>
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="uplastname" name="uplastname"
                                            placeholder="Nama belakang" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="upmail" name="upmail"
                                        placeholder="Email@mail.com" required="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="uppassword" name="uppassword"
                                        placeholder="Password" required="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="uprepass" name="uprepass" 
                                        placeholder="Re-Password" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="if-option" name="selector" checked="">
                                        <label for="f-option">Dengan ini Saya menyetujui <a href="">Kebijakan Privasi Fusho.</a> </label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">Sign up</button>
                                    <!-- <a class="lost_pass" href="#">butuh bantuan?</a> -->
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->







    <!--::footer_part start::-->
    <footer class="footer_part"> 
        <div class="container"> 
          <hr>
            <center><h3>Quick Links</h3></center>
            <br> 
            <div class="row justify-content-around ">  
                <p href="">Store Information</p>
                <p>Catalogue & brochures</p>
                <p href="">Brand assets</p>
                <p href="">Guides</p>
                <p href="">agencies</p>
                <p href="">Investor Relations</p>
                <p href="">Terms of Service</p>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://google.com" target="_blank">Google</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 


    <!-- SCRIPT -->
      <!-- jquery plugins here-->
      <!-- jquery -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery-1.12.1.min.js"></script>
      <!-- popper js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/bootstrap.min.js"></script>
      <!-- easing js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.magnific-popup.js"></script>
      <!-- swiper js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/swiper.min.js"></script>
      <!-- swiper js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/masonry.pkgd.js"></script>
      <!-- particles js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.nice-select.min.js"></script>
      <!-- slick js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/slick.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/waypoints.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/contact.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.form.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/jquery.validate.min.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/mail-script.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/stellar.js"></script>
      <script src="<?php echo base_url() ?>assets/customers-template/js/price_rangs.js"></script>
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/custom.js"></script>
      <script src="<?php echo base_url() ?>assets/src/plugins/dist_sweetalert2/sweetalert2.min.js"></script>  

    <script type="text/javascript">
        $(document).ready(function(){
            
            // new account
            $('#createaccount').click(function(){
                // kanan 
                document.getElementById("fomlogin").style.display = 'none';
                document.getElementById("fomsignup").style.display = 'block'; 
                // kiri  
                document.getElementById("infologin").style.display = 'none'; 
                document.getElementById("infosignup").style.display = 'inline-block'; 
            });
            // LOGIN aAcc page
            $('#loginaccount').click(function(){
                // kanan 
                document.getElementById("fomsignup").style.display = 'none';
                document.getElementById("fomlogin").style.display = 'block'; 
                // kiri  
                document.getElementById("infosignup").style.display = 'none'; 
                document.getElementById("infologin").style.display = 'inline-block'; 
            });
            

            // Form Login 
            $("#form_login").on("submit", function (e) {
                e.preventDefault();
                var un = $('#logname').val();
                var pass = $('#logpassword').val();
                
                Swal.fire({
                  position: 'center',
                  title: 'Mohon Tunggu..',
                  type: 'info',
                  text: 'Permintaan sedang di Proses...',  
                  showConfirmButton: false,
                  allowOutsideClick: false
                });
                $.ajax({
                    async: false,
                    type : "POST",
                    url:'<?php echo site_url('Account/ceklogin') ?>',
                    dataType: "JSON",
                    data: {
                        username: un,
                        password: pass, 
                    },
                    success: function(data){ 
                        // console.log(data); 
                        if (!data.error) {
                            Swal.close();
                            Swal.fire({
                              position: 'center',
                              title: 'Login',
                              type: 'info',
                              text: data.message,
                              showConfirmButton: false,
                              allowOutsideClick: false
                            });
                            setTimeout(function(){ 
                                setTimeout(' window.location.href = "<?php echo site_url(''); ?>" ');
                            },2000);
                        }else{
                            Swal.close();
                            Swal.fire({
                              title: 'Gagal masuk!',
                              text: data.message,
                              type: 'error',
                              confirmButtonText: 'Ok',
                              allowOutsideClick: false
                            }).then(function(){
                                // hidden contenr
                                
                            }); 
                        }
                    }
                });
            });

            // Form Signup 
            $("#form_signup").on("submit", function (e) {
                e.preventDefault();
                var first = $('#upfirstname').val();
                var last = $('#uplastname').val();
                var mail = $('#upmail').val();
                var pass = $('#uppassword').val();
                var repass = $('#uprepass').val();

                if (pass != repass) {  
                    return;
                }
                // console.log('Submitteddd name: '+first+' | '+last+' mail:'+mail+'| p:'+pass);
                Swal.fire({
                  position: 'center',
                  title: 'Mohon Tunggu..',
                  type: 'info',
                  text: 'Permintaan sedang di Proses...',  
                  showConfirmButton: false,
                  allowOutsideClick: false
                });

                $.ajax({
                    async: false,
                    type : "POST",
                    url:'<?php echo site_url('Account/createAccount') ?>',
                    dataType: "JSON",
                    data: {
                        first: first,
                        last: last,
                        mail: mail,
                        pass: pass
                    },
                    success: function(data){ 
                        // console.log(data); 
                        if (!data.error) {
                            Swal.close();
                            Swal.fire({
                              position: 'center',
                              title: 'Berhasil Mendaftar',
                              type: 'info',
                              text: data.message 
                            }).then(function(){
                                // hidden contenr
                                setTimeout(' window.location.href = "<?php echo site_url('Account/login'); ?>" ');
                            });   
                        }else{
                            Swal.close();
                            Swal.fire({
                              title: 'Ada yang Salah!',
                              text: data.message,
                              type: 'error',
                              confirmButtonText: 'Ok',
                              allowOutsideClick: false
                            }).then(function(){
                                // hidden contenr
                                
                            }); 
                        }
                    }
                });
            });

        });
    </script>
</body>
</html>
