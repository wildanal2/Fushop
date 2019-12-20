
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fusho: Toko Furniture Online No.1 di Indonesia</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/customers-template/img/favicon.png">
    <?php $this->load->view("partial/header_script.php") ?>
    
</head>
<body>
    <!--::header part start::-->
    <?php $this->load->view("customer/navbar.php") ?>
    <!-- Header part end-->
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg" style="margin-top: -35px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Cart Products</h2>
                            <!-- <p>Home <span>-</span> Shop Category</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start--> 

    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top">
      <div class="container">

        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Detail Penerima</h3>
              <form class="row contact_form" action="#">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" id="name_dpn" name="name_dpn" placeholder="Nama Depan" /> 
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" id="name_blkg" name="name_blkg" placeholder="Nama terahir" /> 
                </div> 
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="number" placeholder="Nomor Hp" /> 
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" /> 
                </div> 
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1" placeholder="Alamat lengkap" />
                  <!-- <span class="placeholder" data-placeholder="Alamat lengkap"></span> -->
                </div> 
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city" placeholder="Kota" />
                  <!-- <span class="placeholder" data-placeholder="Kota"></span> -->
                </div> 
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="KodePos" />
                </div> 
                <div class="col-md-12 form-group">
                  <h3>Catatan Pengiriman</h3> 
                  <textarea class="form-control" name="message" id="message" rows="1"
                    placeholder="Order Notes (warna, ukuran, tipe)"></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Order Detail</h2>
                <ul class="list" id="product_loc"> 
 
                </ul>
                <ul class="list list_2" id="product_loc2">
                  
                </ul> 
                <br>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Transfer Bank</label>
                    <img src="<?php echo base_url() ?>assets/customers-template/img/product/single-product/card.jpg" alt="" />
                    <div class="check"></div>
                  </div>
                  <p>
                    Cek kembali detail penerima, seperti alamat, kodepos, nama penerima.
                  </p>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                <a class="btn_3" href="#" id="bayar_checkout">Bayar</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


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
    <!--::footer_part end::--> 


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

      <script src="<?php echo base_url() ?>assets/src/plugins/dist_sweetalert2/sweetalert2.min.js"></script>
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/custom.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){ 
            showcart();

            function showcart() {
                $.ajax({ 
                  type : "GET",
                  url:'<?php echo site_url('Cart/showcart') ?>',
                  dataType: "JSON", 
                  success: function(data){ 
                    console.log(data); 
                    var total = 0;
                    var html = 
                              '<li>'+
                                '<a href="#">Product'+
                                  '<span>Total</span>'+
                                '</a>'+
                              '</li>';

                    data.forEach(function(dt){
                      html +=
                        '<li>'+
                          '<a href="#">'+dt.p.nama_barang+
                            '<span class="middle">x '+dt.qty+'</span>'+
                            '<span class="last">'+ convertToRupiah(dt.qty*dt.p.harga) +'</span>'+
                          '</a>'+
                        '</li>';

                      total += dt.qty*dt.p.harga;
                    });

                    var html2 = 
                            '<li>'+
                              '<a href="#">Subtotal'+
                                '<span>'+convertToRupiah(total)+'</span>'+
                              '</a>'+
                            '</li>'+
                            '<li>'+
                              '<a href="#">Pengiriman'+
                                '<span>Flat rate: - </span>'+
                              '</a>'+
                            '</li>'+
                            '<li>'+
                              '<a href="#">Total Harus Dibayar'+
                                '<span>'+convertToRupiah(total)+'</span>'+
                              '</a>'+
                            '</li>';
                    if (total == 0) {
                      setTimeout(' window.location.href = "<?php echo site_url(''); ?>" ');
                    }
                    $('#product_loc').html(html);
                    $('#product_loc2').html(html2);
                  }
                });
            }

            $('#bayar_checkout').click(function(){
                var nm_depan = $('#name_dpn').val();
                var nm_belakang = $('#name_blkg').val();
                var nmr_hp = $('#number').val();
                var mail = $('#email').val();
                var alamat = $('#add1').val();
                var pos = $('#zip').val();
                var note = $('#message').val();
                var kota = $('#city').val();

                Swal.fire({
                        title: 'Sweet!',
                        text: 'Modal with a custom image.',
                        imageUrl: 'https://unsplash.it/400/200',
                        imageWidth: 800,
                        imageHeight: 400,
                        imageAlt: 'Custom image',
                      }); 
                return;
                $.ajax({ 
                  type : "POST",
                  url:'<?php echo site_url('Checkout/checkout') ?>',
                  dataType: "JSON",
                  data: {
                    n_dpn: nm_depan,
                    n_blkg: nm_belakang,
                    hp: nmr_hp,
                    mail: mail,
                    alamat: alamat,
                    pos: pos,
                    kota: kota,
                    note: note
                  },
                  success: function(data){  
                      console.log(data);
                      console.log('completed..'); 
                      Swal.fire({
                        title: 'Sweet!',
                        text: 'Modal with a custom image.',
                        imageUrl: 'https://unsplash.it/400/200',
                        imageWidth: 800,
                        imageHeight: 400,
                        imageAlt: 'Custom image',
                      }); 
                  }
                });  
            });

            // All Func 
            function convertToRupiah(angka) {
                var rupiah = '';        
                var angkarev = angka.toString().split('').reverse().join('');
                for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
                return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
            }
        });
    </script>
</body>
</html>
