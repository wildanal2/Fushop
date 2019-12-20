
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
                            <div class="widgets_inner">
                                <hr> 
                                <ul class="list" id="aiop"> 
                                    <li> 
                                        <a href="#" data-ini="whitelist" style="color: #ff3368"><i class="fas fa-heart"></i>&nbsp Whitelist</a> 
                                    </li>
                                    <li> 
                                        <a href="#" data-ini="tokofav"><i class="fas fa-star"></i>&nbsp Toko Favorit</a> 
                                    </li>
                                    <li> 
                                        <a href="#" data-ini="daftartrans"><i class="fas fa-list"></i>&nbsp Daftar Transaksi</a> 
                                    </li>
                                    <li> 
                                        <a href="#" data-ini="setting"><i class="fas fa-cogs"></i>&nbsp Pengaturan</a> 
                                    </li> 
                                </ul>
                            </div>
                        </aside> 
                    </div>
                </div>
                <div class="col-lg-9 row"> 
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <br>
                      <center><h4 id="headerhomed"> Daftar Produk Favorit</h4></center>
                      <hr> 
                      <div id="secfavprod" class="row" style="display: none;">

                      </div>

                      <div id="secdaftartrans" class="" style="display: none;"> 
                      </div>

                      <div id="notfounddata" style="display: none;">
                          <div class="jumbotron">
                              <h4 class="text-center">Data tidak ada</h4>
                          </div>
                      </div>
                      <div id="comingsoon" style="display: none;">
                          <div class="jumbotron">
                              <h4 class="text-center">Fitur belum tersedia</h4>
                          </div>
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
            showProdFav();

            //Controller
              $('#aiop').on('click','li a',function(){  
                  var ini = $(this);
                  var other = $('#aiop li a');
                  other.css('color','#555');
                  ini.css('color','#ff3368');

                  var poss = ini.data('ini');
                  if ( poss == 'whitelist') {
                      $('#headerhomed').html('Daftar Produk Favorit')
                      $('#notfounddata').hide();
                      $('#comingsoon').hide();
                      $('#secdaftartrans').hide();

                      showProdFav(); 
                  }
                  else if ( poss == 'tokofav' ) {
                      $('#headerhomed').html('Daftar Toko Favorit')

                      $('#notfounddata').hide();
                      $('#secfavprod').hide();
                      $('#secdaftartrans').hide();

                      $('#comingsoon').show();
                  }
                  else if ( poss == 'setting' ) {
                      $('#headerhomed').html('Setting');

                      $('#notfounddata').hide();
                      $('#secfavprod').hide();
                      $('#secdaftartrans').hide();

                      $('#comingsoon').show(); 
                  }
                  else if ( poss == 'daftartrans' ) {
                      $('#headerhomed').html('Daftar Transaksi');
                      $('#notfounddata').hide();
                      $('#secfavprod').hide();
                      $('#comingsoon').hide();

                      showTransaksi();
                      $('#secdaftartrans').show();
                  }
              });



            function showProdFav() {
                $.ajax({ 
                    type : "POST",
                    url:'<?php echo site_url('products/getFavData') ?>', 
                    dataType : "JSON",
                    data: { id:<?php echo $s_data['id_user'] ?> }, 
                    success: function(dat){  
                        console.log(dat); 
                        var html = '';


                        dat.forEach( function(itm) { 
                            html +=
                                '<div class="col-lg-4 col-sm-6">'+
                                    '<div class="single_product_item">'+
                                        '<img src="<?php echo base_url() ?>assets/images/'+itm.source+'" alt="">'+
                                        '<div class="single_product_text" data-id_toko="'+itm.nama_barang+'" >'+  
                                            '<h5 class="aa" data-id="'+itm.kd_barang+'">'+itm.nama_barang+'</h5>'+
                                            '<span class="name-shop" data-id_toko="'+itm.id_toko+'"><i class="fas fa-certificates"></i> ✅'+itm.shop_name+'</span>'+ 
                                            '<h3>'+convertToRupiah(itm.harga)+'</h3>'+     
                                            '<a href="#" class="btn btn-outline-danger btndfav" data-idf="'+itm.idfav+'">Hapus <i class="ti-trash btndfav1" style="color: #ff3368"></i></a>'+
                                        '</div>'+ 
                                    '</div>'+ 
                                '</div>';  
                        });
                        if ( dat.length == 0 ) {
                            $('#notfounddata').show();                     
                        }else{
                            $('#secfavprod').show();                          
                        }

                        $('#secfavprod').html(html);
                    }
                });
            }
            function showTransaksi(){
              $.ajax({ 
                  type : "POST",
                  url:'<?php echo site_url('people/getTransaksi') ?>', 
                  dataType : "JSON",
                  data: { id:<?php echo $s_data['id_user'] ?> }, 
                  success: function(dat){  
                      console.log(dat);  
                      var html1 = ''; 

                      dat.forEach(function(dd){
                        var tgl = new Date(dd.tanggal); 
                        var total = 0;
                        html1 +=
                          '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card">'+
                              '<div class="card-header row">'+dd.tanggal+
                              '</div>'+
                              '<div class="row card-body">'+
                                '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">'+
                                  '<p>(INV/'+tgl.getFullYear()+(tgl.getMonth()+1)+tgl.getDate()+'/XIX/IV/'+dd.id+')</p>'+
                                '</div>'+
                                '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>'+
                                '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">'+
                                  '<b>Status</b>'+
                                  '<p>Menuggu Pembayaran</p>'+
                                '</div>'+
                                '<div class="col-sm-12 col-md-12 col-lg-12 row" style="border-bottom: 1px groove;margin-top: 5px; margin-bottom: 5px;"> </div>'+
                                '<div class="row text-center">'+
                                  '<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 card">'+
                                    '<img src="<?php echo base_url() ?>assets/images/products/filtan1.jpg" class="card-img-bottom " alt="">'+
                                  '</div>'+
                                  '<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">'+ 
                                    '<div class="order_box">'+
                                      '<b>Detail Pemesanan</b> <br>'+ 
                                      '<ul class="list list_2">';
                                  dd.data.forEach(function(xc){
                                    html1 +=
                                        '<li>'+
                                          '<a href="#">'+xc.nama_brg+
                                            '<span class="middle">x '+xc.qty+'</span>'+
                                            '<span class="last">'+ convertToRupiah(xc.subtotal) +'</span>'+
                                          '</a>'+
                                        '</li>';
                                    total += parseInt(xc.subtotal);
                                  }); 
                            html1 += '</ul>'+
                                    '</div>'+
                                  '</div> '+
                                  '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">'+
                                    '<b>Total Harga</b>'+
                                    '<p>'+ convertToRupiah(total) +'</p>'+
                                  '</div> '+
                                '</div>'+
                              '</div>'+
                          '</div><br>';

                      });
                      $('#secdaftartrans').html(html1);
                  }
              });
            }


            // click 
            $('#secfavprod').on('click','.aa',function(){
                var id = $(this).data('id');
                // console.log('clicked : '+id); 
                setTimeout(' window.location.href = "<?php echo site_url(); ?>products/p/'+id+'"');
            });
            $('#secfavprod')
                .on('click','.btndfav',function(event){
                    var idf = $(this).data('idf');
                    console.log( idf );
                    Swal.fire({
                      title: 'Hapus dari daftar Favorit?', 
                      type: 'question',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.value) {  

                        $.ajax({ 
                            type : "POST",
                            url:'<?php echo site_url('products/removefav') ?>',
                            dataType: "JSON",
                            data: {
                                idf: idf
                            },
                            success: function(data){ 
                                if (!data.error) {
                                    Swal.fire(
                                      'Deleted!',
                                      'Berhasil dihapus dari list.',
                                      'success'
                                    )
                                  showProdFav();
                                }
                                console.log('deleted'); 
                            }
                          }); 
                        
                      }
                    });  
                });

            // Feature Styling
            function convertToRupiah(angka) {
                var rupiah = '';        
                var angkarev = angka.toString().split('').reverse().join('');
                for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
                return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
            }

            $('#secfavprod')
                .on('mouseenter','.btndfav',function(event){
                    // e.stopPropagation(); 
                    $(this).css('color','white');
                    $(this).find(".btndfav1").css('color','white'); 
                })
                .on('mouseleave','.btndfav',function(event){
                    // e.stopPropagation(); 
                    $(this).css('color','#ff3368');
                    $(this).find(".btndfav1").css('color','#ff3368');
                });

 
        });
    </script>
</body>
</html>
