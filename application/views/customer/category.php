
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
    <?php $this->load->view("customer/navbar.php") ?>
    <!-- Header part end-->
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- <?php var_dump($product) ?>  -->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <!-- <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Frozen Fish</a>
                                        <span>(250)</span>
                                    </li>
                                    <li>
                                        <a href="#">Dried Fish</a>
                                        <span>(250)</span>
                                    </li> 
                                </ul>
                            </div>
                        </aside> -->

                        <!-- <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Product filters</h3>
                            </div>
                            <div class="widgets_inner"> 
                                <ul class="list"> 
                                    <li class="active">
                                        <a href="#">Gionee</a>
                                    </li>
                                    <li>
                                        <a href="#">Micromax</a>
                                    </li>
                                    <li>
                                        <a href="#">Samsung</a>
                                    </li>
                                </ul>
                            </div>
                        </aside> -->

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Color Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets price_rangs_aside">
                            <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <!-- <div id="slider-range"></div> -->
                                    <input type="text" class="js-range-slider" value="" />
                                    <div class="d-flex">
                                        <div class="price_text">
                                            <p>Price :</p>
                                        </div>
                                        <div class="price_value d-flex justify-content-center">
                                            <input type="text" class="js-input-from" id="amount" readonly />
                                            <span>to</span>
                                            <input type="text" class="js-input-to" id="amount" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- TOPP  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span id="tot_prod">100 </span> Product Found</p>
                                </div> 
                                <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TOP CENTER -->
                    <div class="row align-items-center latest_product_inner" id="alldata_prod">

                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

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

            // All Product Home
            function listProductHome() {
               $.ajax({ 
                    type  : 'GET',
                    url : "<?php echo site_url();?>Category/ccid/<?php echo $this->uri->segment(3) ?>", 
                    dataType : 'JSON', 
                    success : function(dat){
                        console.log(dat) ;   
                        var html = ''; 
                        dat.product.forEach( function(itm) { 
                            html +=
                                '<div class="col-lg-4 col-sm-6">'+
                                    '<div class="single_product_item">'+
                                        '<img src="<?php echo base_url() ?>assets/images/'+itm.source+'" alt="">'+
                                        '<div class="single_product_text" data-id_toko="'+itm.nama_barang+'" >'+  
                                            '<h4 class="aa" data-id="'+itm.kd_barang+'">'+itm.nama_barang+'</h4>'+
                                            '<span class="name-shop" data-id_toko="'+itm.id_toko+'"><i class="fas fa-certificates"></i> ✅'+itm.shop_name+'</span>'+
                                            '<span class="name-kota" data-id_toko="'+itm.id_toko+'" style="display: none;"><i class="fas fa-bullseye"></i> '+itm.kota+'</span>'+
                                            '<h3>'+convertToRupiah(itm.harga)+'</h3>'+
                                            // '<a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>'+
                                        '</div>'+

                                    '</div>'+
                                '</div>';  
                        });

                        $('#tot_prod').html( dat.product.length );

                        if (dat.product.length == 0) { 
                            html +=
                                '<div class="jumbotron row col-md-12 "> <h3>Product Kosong</h3> </div>';
                        }

                        $('#alldata_prod').html(html);
                    }
                }); 
            }
            
            // All Func
            // Click Product
                $('#alldata_prod').on('click','.aa',function(){
                    var id = $(this).data('id'); 
                    setTimeout(' window.location.href = "<?php echo site_url(); ?>products/p/'+id+'"');
                });
            // Hover Nama
                $('#alldata_prod')
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
