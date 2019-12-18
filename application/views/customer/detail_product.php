
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
        .ashop{
          cursor: pointer;
        }  
    </style>

  </head>
  <body>

    <!--::header part start::-->
    <?php $this->load->view("customer/navbar.php") ?>
    <!-- Header part end-->
     
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg" style="margin-top: -80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item" style="padding-top: 100px">
                            <h2><?php echo $product->shop_name; ?></h2>
                            <p><?php echo $product->kota; ?> <span>-</span> <?php echo $product->keterangan; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
  <!-- <?php var_dump($foto) ?>  -->
   <!-- <?php var_dump($product) ?>   -->

    <!--================Single Product Area =================-->
      <div class="product_image_area section_padding">
        <div class="container">
          <div class="row s_product_inner justify-content-between">
            <div class="col-lg-7 col-xl-7">
              <div class="product_slider_img">
                <div id="vertical">
                  <div data-thumb="img/product/single-product/product_1.png">
                    <?php if ($foto != false) { ?>
                      <img src="<?php echo base_url() ?>assets/images/<?php echo $foto->source ?>" />
                    <?php 
                    }else{ ?>
                      <img src="<?php echo base_url() ?>assets/images/products/notfound.png" />
                    <?php }?>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="s_product_text">
                <!-- <h5>previous <span>|</span> next</h5> -->
                <h3 ><?php echo $product->nama_barang; ?></h3>
                <h2 id="harga-pid"></h2>
                <ul class="list">
                  <li>
                    <a class="active" href="#">
                      <span>Category</span> : <?php echo $product->keterangan; ?></a>
                  </li>
                  <li>
                    <a href="#"> <span>Availibility</span> : In Stock</a>
                  </li>
                  <li>
                    <a href="#"> <span>Lokasi</span> : <?php echo $product->kota; ?></a>
                  </li>
                </ul>
                <p>
                  Deskripsi :<br>
                  <?php echo $product->deskripsi; ?>
                </p>
                <div class="card_area d-flex justify-content-between align-items-center">
                  <div class="product_count">
                    <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" id="jumlahqty" value="1" min="1" max="10">
                    <span class="number-increment"> <i class="ti-plus"></i></span>
                  </div>
                  <a href="#" class="btn_3" data-idprod="<?php echo $product->kd_barang ?>" id="addcart">add to cart</a> 
                  <div id="favloc"></div> 
                </div>
                <div class="card_area d-flex justify-content-between align-items-center">
                  <a href="#" class="btn_3" id="btnHubKami"><i class="fas fa-phone"></i> Hubungi penjual</a> 
                </div>
            </div>
          </div>
        </div>
      </div>
      <!--================End Single Product Area =================-->

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
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://google.com" target="_blank">3n0ob</a>
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


    <div class="modal fade" id="modalhubungi">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hubungi Kami</h4> 
          </div>
          <div class="modal-body">
            <div class="row  container"> 
                <img height="40px" src="<?php echo base_url() ?>assets/images/defaults/phone1.png" alt="logo">
                <h4>   <?php echo $product->nohp; ?> </h4>
            </div>
            <br>
            <div class="row  container">
                <img height="40px" src="<?php echo base_url() ?>assets/images/defaults/wa1.png" alt="logo">
                <h4>   <?php echo $product->nowa; ?> </h4>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
          </div>
        </div>
      </div>
    </div>

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
            
            // AUTO LOAD
              var harga = '<?php echo $product->harga ?>';
              var namap = '<?php echo $product->nama_barang ?>';
                document.getElementById('harga-pid').innerHTML = convertToRupiah(harga);
              favControl();


            $('#btnHubKami').on('click', function(){
                $('#modalhubungi').modal('show');
            });
            $('#favloc').on('click', '.btnfav', function(){ 
                var mode = $('.btnfav').data('mode'); 
                // === > JIka FAVOIRTe
                if (mode == 'isfav') {
                  var id = $('.btnfav').data('id'); 
                  var prod = $('.btnfav').data('prod'); 

                  Swal.fire({
                        title: 'Hapus dari Favorit ?', 
                        icon: 'question',
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-trash"></i> Hapus'
                    }).then((result)=>{
                        if (result.value) { 
                            var idf = $('.btnfav').data('idf');  

                            $.ajax({ 
                                type : "POST",
                                url:'<?php echo site_url('products/removefav') ?>',
                                dataType: "JSON",
                                data: {
                                    idf: idf
                                },
                                success: function(data){ 
                                    console.log('removed');
                                    if (!data.error) {
                                        Swal.fire(
                                          'Deleted!',
                                          'Berhasil dihapus dari list.',
                                          'success'
                                        ).then(function(){
                                          favControl();
                                        });
                                    }else{
                                      Swal.fire(
                                          'Gagal!',
                                          'Gagal ditambahkan.',
                                          'error'
                                        )
                                    }
                                }
                              }); 
                        }
                    });
                }// === > JIka TIdak FAVOIRTe
                else if (mode == 'nofav') {
                  var id = $('.btnfav').data('id'); 
                  var prod = $('.btnfav').data('prod'); 

                  Swal.fire({
                        title: 'Tambahkan Ke Favorit ?', 
                        icon: 'question',
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-heart"></i> tambahkan'
                    }).then((result)=>{
                        if (result.value) {  
                            $.ajax({ 
                                type : "POST",
                                url:'<?php echo site_url('products/addfav') ?>',
                                dataType: "JSON",
                                data: {
                                    usr: id,
                                    prod: prod
                                },
                                success: function(data){ 
                                    console.log('tambahkan');
                                    if (!data.error) {
                                        Swal.fire(
                                          'Berhasil!',
                                          'Berhasil ditambahkan.',
                                          'success'
                                        ).then(function(){
                                          favControl();
                                        });
                                    }else{
                                      Swal.fire(
                                          'Gagal!',
                                          'Gagal ditambahkan.',
                                          'error'
                                        )
                                    }
                                }
                              }); 
                        }
                    });
                }else{
                  Swal.fire({
                        title: 'Anda harus masuk terlebih dahulu, untuk menambahkan ke Favorit ?', 
                        icon: 'question',
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fas fa-sign-in-alt"></i> Masuk'
                    }).then((result)=>{
                        if (result.value) {  
                             setTimeout(' window.location.href = "<?php echo site_url('Account/login'); ?>" ');
                        }
                    });
                } 
            });

            // FUnc
            $('#addcart').on('click', function(){
                var id = $(this).data('idprod');
                var qty = $('#jumlahqty').val(); 

                $.ajax({ 
                  type : "POST",
                  url:'<?php echo site_url('Cart/add_to_cart') ?>',
                  dataType: "JSON",
                  data: {
                      produk_id: id,
                      produk_nama: namap,
                      produk_harga: harga,
                      quantity:qty
                  },
                  success: function(data){ 
                      console.log(data); 
                  }
                }); 
            });

            function favControl() {
              var prod = '<?php echo $product->kd_barang ?>';
              console.log('fav prod:'+prod);  

              $.ajax({ 
                type : "POST",
                url:'<?php echo site_url('FavoriteControl/ckFavProduct') ?>',
                dataType: "JSON",
                data: { 
                    prod: prod
                },
                success: function(data){ 
                  console.log(data);

                  if (data.sesion == true) {
                    if (data.is_fav == true) {
                      $('#favloc').html('<a href="#" data-idf="'+data.id_f+'" data-mode="isfav" class="btnfav like_us" style="color: #ff3368"> <i class="fas fa-heart fa-lg"></i> </a>');
                    }else{
                      $('#favloc').html('<a href="#" data-prod="'+prod+'" data-id="'+data.id_user+'" data-mode="nofav" class="btnfav like_us"> <i class="far fa-heart fa-lg"></i> </a>');
                    } 
                  }else{
                    $('#favloc').html('<a href="#" data-mode="noses" class="btnfav like_us"> <i class="far fa-heart fa-lg"></i> </a>');
                  } 
                }
              }); 
            }
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
