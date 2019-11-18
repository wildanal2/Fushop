
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fusho: Toko Furniture Online No.1 di Indonesia</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/customers-template/img/favicon.png">
 

    <?php $this->load->view("partial/header_script.php") ?>

    <!-- <style type="text/css">
        .aa,.name-shop{
          cursor: pointer;
        }    
    </style> -->

  </head>
  <body style="background-color: #F8F8F8">

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
                        <div class="breadcrumb_iner_item"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    
    <?php  
        if ($this->session->userdata('sik_logged')){  
           $s_data = $this->session->userdata('sik_logged');
        }
    ?>

    <section class="cat_product_area section_padding" style="margin-top: -250px; z-index: 1000; position: relative; ">
        <div class="container" style="background-color: white;" >
            <div class="row vdivide">
                <div class="col-lg-3 " style="margin-top: 50px;">
                    <div class="left_sidebar_area" >
                        <aside class="left_widgets p_filter_widgets"> 
                            <div class="l_w_title row">
                                <div class="col-sm-12">
                                    <img src="<?php echo base_url() ?>assets/images/defaults/default_v3-usrnophoto1.png" alt="logo">
                                </div>  
                                <div class="col-sm-12 text-center">
                                    <br>
                                    <h4><?php echo $s_data['first']." ".$s_data['last'] ?></h4>  
                                </div> 
                            </div>
                            <div class="widgets_inner ">
                                <hr> 
                                <ul class="list ">
                                    <li>  
                                        <a class="active" href="#"><i class="fas fa-list"></i>&nbsp Daftar Transaksi</a> 
                                    </li>
                                    <li> 
                                        <a href="#"><i class="fas fa-heart"></i>&nbsp Whitelist</a> 
                                    </li>
                                    <li> 
                                        <a href="#"><i class="fas fa-star"></i>&nbsp Toko Favorit</a> 
                                    </li>
                                    <li> 
                                        <a href="#"><i class="fas fa-cogs"></i>&nbsp Pengaturan</a> 
                                    </li> 
                                </ul>
                            </div>
                        </aside> 
                    </div>
                </div>
                <div class="col-lg-9">  

                    <!-- HOMe ADMIN -->
                    <div class="div_allproduct" style="background-color: #fff;">
                        <br><br>
                         
                        <div>
                            
                        </div>
                    </div>
                    <!-- END HOME ADMIN -->
 

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
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/customers-template/js/custom.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){
            // showProduct();

            function showProduct() {
                $.ajax({
                    async: false,
                    type : "POST",
                    url:'<?php echo site_url('products/getProd') ?>', 
                    dataType : "JSON",
                    data: { id:'a' }, 
                    success: function(data){  
                        console.log(data);
                        data.forEach(function(dat){
                          // console.log(dat.nama_barang);
                            var tr = $('<tr>').append(
                                        $('<td>').html("<a href='#'>"+dat.nama_barang+"</a>"),
                                        $('<td>').text(dat.keterangan),
                                        $('<td>').text("Baru"),
                                        $('<td>').text(dat.deskripsi),
                                        $('<td>').text(convertToRupiah(dat.harga)),
                                        $('<td>').text(dat.berat+" Kg"),
                                        $('<td>').text('No')
                                    );

                            tr.appendTo('#tbod_prod');
                        });
                    }
                });

            }
            
            $("#submit_newproduk").on("click", function (e) {
                e.preventDefault();

                var namep = $("#nameprod").val();
                var idmerk = $('#merkprod').find(":selected").val();
                var idcat = $('#katprod').find(":selected").val();
                var tag = $('#katprod').find(":selected").text();
                var sortprod = $('#sortprod').val();
                var desprod = $('textarea#desprod').val();
                var idberat = $('#idberat').val();
                var idharga = $('#idharga').val();
                var files = $('#ifiled')[0].files[0];

                if (files == null ) {
                  alert('Foto Kosong');
                  return;
                }

                var fd = new FormData();
                 
                fd.append('file',files); 
                fd.append('nampro', namep);
                fd.append('merk', idmerk);
                fd.append('kateg', idcat);
                fd.append('sortprod', sortprod);
                fd.append('deskripprod',desprod);
                fd.append('harga', idharga);
                fd.append('berat', idberat);
                fd.append('tag', tag);
                
                // console.log('n :'+namep+'| mer:'+idmerk+'| ccat:'+idcat+'|log:'+desprod+'|sort:'+sortprod+'|idberat:'+idberat+'|harga:'+idharga);

                $.ajax({
                    async: false,
                    type : "POST",
                    url:'<?php echo site_url('products/newproduct') ?>', 
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(data){ 
                        console.log(data);  
                        $("form").trigger('reset');
                    }
                });

            });

            $('#btn_newprod').on('click',function(){

                if ( $('#btn_newprod').hasClass('btn-info') ) {
                  $('#btn_newprod').html('back');
                  $('#btn_newprod').removeClass('btn-info');
                  $('#btn_newprod').addClass('btn-danger');
                  //clear form
                  $("form").trigger('reset');

                  $('#tabel_allproduk').hide(); 
                  $('#div_produc').show(); 
                }else{
                  $('#btn_newprod').html('Tambahkan Produk');
                  $('#btn_newprod').removeClass('btn-danger');
                  $('#btn_newprod').addClass('btn-info');

                  $('#tabel_allproduk').show(); 
                  $('#div_produc').hide();  
                }
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
