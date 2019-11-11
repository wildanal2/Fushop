
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
                  <!-- <div data-thumb="img/product/single-product/product_1.png">
                    <img src="<?php echo base_url() ?>assets/customers-template/img/product/single-product/product_1.png" />
                  </div>
                  <div data-thumb="img/product/single-product/product_1.png">
                    <img src="<?php echo base_url() ?>assets/customers-template/img/product/single-product/product_1.png" />
                  </div>
                  <div data-thumb="img/product/single-product/product_1.png">
                    <img src="<?php echo base_url() ?>assets/customers-template/img/product/single-product/product_1.png" />
                  </div> -->
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
                  <!-- <div class="product_count">
                    <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="number-increment"> <i class="ti-plus"></i></span>
                  </div> -->
                  <a href="#" class="btn_3" id="btnHubKami">Hubungi penjual</a>
                  <!-- <a href="#" class="like_us"> <i class="ti-heart"></i> </a> -->
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--================End Single Product Area =================-->

      <!--================Product Description Area =================-->
      <!-- <section class="product_description_area">
        <div class="container">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Specification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Comments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                aria-selected="false">Reviews</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
              <p>
                Beryl Cook is one of Britain’s most talented and amusing artists
                .Beryl’s pictures feature women of all shapes and sizes enjoying
                themselves .Born between the two world wars, Beryl Cook eventually
                left Kendrick School in Reading at the age of 15, where she went
                to secretarial school and then into an insurance office. After
                moving to London and then Hampton, she eventually married her next
                door neighbour from Reading, John Cook. He was an officer in the
                Merchant Navy and after he left the sea in 1956, they bought a pub
                for a year before John took a job in Southern Rhodesia with a
                motor company. Beryl bought their young son a box of watercolours,
                and when showing him how to use it, she decided that she herself
                quite enjoyed painting. John subsequently bought her a child’s
                painting set for her birthday and it was with this that she
                produced her first significant work, a half-length portrait of a
                dark-skinned lady with a vacant expression and large drooping
                breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
              </p>
              <p>
                It is often frustrating to attempt to plan meals that are designed
                for one. Despite this fact, we are seeing more and more recipe
                books and Internet websites that are dedicated to the act of
                cooking for one. Divorce and the death of spouses or grown
                children leaving for college are all reasons that someone
                accustomed to cooking for more than one would suddenly need to
                learn how to adjust all the cooking practices utilized before into
                a streamlined plan of cooking that is more efficient for one
                person creating less
              </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Width</h5>
                      </td>
                      <td>
                        <h5>128mm</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Height</h5>
                      </td>
                      <td>
                        <h5>508mm</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Depth</h5>
                      </td>
                      <td>
                        <h5>85mm</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Weight</h5>
                      </td>
                      <td>
                        <h5>52gm</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Quality checking</h5>
                      </td>
                      <td>
                        <h5>yes</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Freshness Duration</h5>
                      </td>
                      <td>
                        <h5>03days</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>When packeting</h5>
                      </td>
                      <td>
                        <h5>Without touch of hand</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Each Box contains</h5>
                      </td>
                      <td>
                        <h5>60pcs</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="comment_list">
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-1.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item reply">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-2.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-3.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="review_box">
                    <h4>Post a comment</h4>
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                      novalidate="novalidate">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" id="message" rows="1"
                            placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn_3">
                          Submit Now
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="row total_rate">
                    <div class="col-6">
                      <div class="box_total">
                        <h5>Overall</h5>
                        <h4>4.0</h4>
                        <h6>(03 Reviews)</h6>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="rating_list">
                        <h3>Based on 3 Reviews</h3>
                        <ul class="list">
                          <li>
                            <a href="#">5 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                          </li>
                          <li>
                            <a href="#">4 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                          </li>
                          <li>
                            <a href="#">3 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                          </li>
                          <li>
                            <a href="#">2 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                          </li>
                          <li>
                            <a href="#">1 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="review_list">
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-1.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-2.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="img/product/single-product/review-3.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="review_box">
                    <h4>Add a Review</h4>
                    <p>Your Rating:</p>
                    <ul class="list">
                      <li>
                        <a href="#">
                          <i class="fa fa-star"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-star"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-star"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-star"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-star"></i>
                        </a>
                      </li>
                    </ul>
                    <p>Outstanding</p>
                    <form class="row contact_form" action="contact_process.php" method="post" novalidate="novalidate">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Your Full name" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="number" placeholder="Phone Number" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="1" placeholder="Review"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn_3">
                          Submit Now
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!--================End Product Description Area =================-->
  


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
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/custom.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            
            var harga = <?php echo $product->harga ?>;
            document.getElementById('harga-pid').innerHTML = convertToRupiah(harga);
            
            $('.aa').on('click',function(){
                setTimeout(' window.location.href = "<?php echo site_url('DetailProductCustomer'); ?>" ');
            });

            $('#btnHubKami').on('click', function(){
                $('#modalhubungi').modal('show');

            });

            // FUnc
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
