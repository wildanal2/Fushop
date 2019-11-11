
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fusho: Toko Furniture Online No.1 di Indonesia</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/customers-template/img/favicon.png">
 

    <?php $this->load->view("partial/header_script.php") ?>

    <style type="text/css">
        .aa,.name-shop{
            cursor: pointer;
        } 
        .name-kota{
            display: none;
        } 
    </style>

  </head>
  <body>

    <!--::header part start::-->
    <?php $this->load->view("customer/navbar.php") ?>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">Lihat semua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="<?php echo base_url() ?>assets/customers-template/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Table & Chair</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">Lihat semua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="<?php echo base_url() ?>assets/customers-template/img/banner_table.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Matterss & Bed</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">Lihat semua</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="<?php echo base_url() ?>assets/customers-template/img/banner_img1.png" alt="">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    
    <!-- KATEGORI feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Matterss & Bed</h3>
                        <a href="<?php echo site_url() ?>Category/cc/4" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="<?php echo base_url() ?>assets/images/category/bed.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Kursi Kantor</h3>
                        <a href="<?php echo site_url() ?>Category/cc/2" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="<?php echo base_url() ?>assets/images/category/feature_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="<?php echo site_url() ?>Category/cc/2" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="<?php echo base_url() ?>assets/images/category/feature_3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>wood & cloth sofa</h3>
                        <a href="<?php echo site_url() ?>Category/cc/1" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="<?php echo base_url() ?>assets/images/category/feature_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  KATEGORI part END-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Product <!-- <span>shop</span> --></h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="row align-items-center justify-content-between" id="secAllproductHome1">

                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->


    <!-- subscribe News part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Bergabung DI Sini</h5>
                        <h2>Subscribe dan Dapatkan update produk terbaru</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe part end::-->
 
    <!-- Brand Support _area part start  -->
    <section class="client_logo padding_top">
        <div class="container">
            <center><h3>Brand Support</h3></center>
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/olympicfurniture.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/ikea.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/livien.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/jysk.jpg" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/chitose.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/logo_melody_putih.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/informa.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo base_url() ?>assets/customers-template/img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::Brand Support part end::-->

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
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/custom.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){

            listProductHome();

            $('.add_cart').click(function(){
                var produk_id    = $(this).data("produkid");
                var produk_nama  = $(this).data("produknama");
                var produk_harga = $(this).data("produkharga");
                var quantity     = 1;
                
                $.ajax({
                    url : "<?php echo base_url();?>index.php/HomeCustomer/add_to_cart",
                    method : "POST",
                    data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                    success: function(data){
                        setTimeout(' window.location.href = "<?php echo site_url('HomeCustomer/cart'); ?>" ');
                    }
                });
            });
            

            // All Product Home
            function listProductHome() {
               $.ajax({ 
                    type  : 'GET',
                    url : "<?php echo site_url();?>/HomeCustomer/getListProductHome", 
                    dataType : 'JSON', 
                    success : function(dat){
                        console.log(dat) ;  
                        var html = '';

                        dat.forEach( function(itm) { 
                            html +=
                                '<div class="col-lg-3 col-sm-6">'+
                                    '<div class="single_product_item">'+
                                        '<img src="<?php echo base_url() ?>assets/images/'+itm.source+'" alt="">'+
                                        '<div class="single_product_text" data-id_toko="'+itm.nama_barang+'" >'+  
                                            '<h4 class="aa" data-id="'+itm.kd_barang+'">'+itm.nama_barang+'</h4>'+
                                            '<span class="name-shop" data-id_toko="'+itm.id_toko+'"><i class="fas fa-certificates"></i> ✅'+itm.shop_name+'</span>'+
                                            '<span class="name-kota" data-id_toko="'+itm.id_toko+'"><i class="fas fa-bullseye"></i> '+itm.kota+'</span>'+
                                            '<h3>'+convertToRupiah(itm.harga)+'</h3>'+
                                            // '<a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>'+
                                        '</div>'+

                                    '</div>'+
                                '</div>';  
                        });

                        $('#secAllproductHome1').html(html);
                    }
                }); 
            }

            // Click Product
            $('#secAllproductHome1').on('click','.aa',function(){
                var id = $(this).data('id');
                // console.log('clicked : '+id); 
                setTimeout(' window.location.href = "<?php echo site_url(); ?>products/p/'+id+'"');
            });
            // Hover Nama
            $('#secAllproductHome1')
                .on('mouseenter','.single_product_item',function(event){
                    // e.stopPropagation(); 
                    $(this).find(".name-shop").hide();
                    $(this).find(".name-kota").show();
                })
                .on('mouseleave','.single_product_item',function(event){
                    // e.stopPropagation(); 
                    $(this).find(".name-kota").hide();
                    $(this).find(".name-shop").show();
                });  

            
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
