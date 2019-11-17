
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
        /*.row.vdivide [class*='col-']:not(:last-child):after {
          background: #e0e0e0;
          width: 1px;
          content: "";
          display:block;
          position: absolute;
          top:0;
          bottom: 0;
          right: 0;
          min-height: 70px;
        }*/
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
 
    <section class="cat_product_area section_padding" style="margin-top: -250px; z-index: 1000; position: relative; ">
        <div class="container" style="background-color: white;" >
            <div class="row vdivide">
                <div class="col-lg-3 " style="margin-top: 50px;">
                    <div class="left_sidebar_area" >
                        <aside class="left_widgets p_filter_widgets"> 
                            <div class="l_w_title row">
                                <div class="col-sm-4">
                                    <img src="<?php echo base_url() ?>assets/images/defaults/default_v3-shopnophoto.png" alt="logo">
                                </div>
                                <div class="col-sm-8">
                                    <h4>Admin Store</h4>
                                    <p>🔴offline</p>
                                </div>  
                            </div>
                            <div class="widgets_inner ">
                                <hr> 
                                <ul class="list ">
                                    <li>  
                                        <a class="active" href="#"><i class="fas fa-home"></i>&nbsp Home</a> 
                                    </li>
                                    <li> 
                                        <a href="#"><i class="fas fa-boxes"></i>&nbsp Produk</a> 
                                    </li>
                                    <li> 
                                        <a href="#"><i class="fas fa-cogs"></i>&nbsp Pengaturan Toko</a> 
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
                        <div class="container">  
                            <div class="pull-right" style="margin-bottom: 20px"> 
                              <a class="btn btn-info" id="btn_newprod" href='#'>Tambahkan Produk</a>
                            </div>
                        </div> 

                        <table class="table" id="tabel_allproduk">
                            <thead>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Kondisi</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Berat</th>
                                <th>Pre-Order</th>
                            </thead>
                            <tbody >
                                <tr>
                                  <td><a href="#" >FLINTAN</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi kantor dgn sndrn tangan, glose hitam</td>
                                  <td>Rp.999.000</td>
                                  <td>10 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >NOMINEL/FLINTAN</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi Minimalis nyaman cream</td>
                                  <td>Rp.1.249.000</td>
                                  <td>18 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >LANGFJALL</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi kantor dgn sndrn tangan, abu-abu</td>
                                  <td>Rp.3.199.000</td>
                                  <td>26 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >FJALLBERGET</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi kantor, vissle hitam</td>
                                  <td>Rp.2.999.000</td>
                                  <td>18 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >HATTEFJALL</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Sofa 2 dudukan, knisa abu-abu tua</td>
                                  <td>Rp.3.799.000</td>
                                  <td>10 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >NOMINELL</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi Busa nyaman berbahan polar</td>
                                  <td>Rp.3.799.000</td>
                                  <td>10 Kg</td>
                                  <td>No</td><
                                </tr>
                                <tr>
                                  <td><a href="#" >KLIPPAN</a></td>
                                  <td>Kursi Kantor</td>
                                  <td>baru</td>
                                  <td>Kursi kantor dgn sndrn tangan, gunnared abu-abu medium/putih</td>
                                  <td>Rp.3.799.000</td>
                                  <td>10 Kg</td>
                                  <td>No</td><
                                </tr> 
                            </tbody>
                        </table> 
                    </div>
                    <!-- END HOME ADMIN -->

                    <!-- New Product -->
                    <div id="div_produc" style="display: none;">
                        <br>
                        <h4 class="text-center">New Product</h4>
                        <hr>
                        <form class="fom_newprod">
                          <div class="form-group col-md-8">
                              <label for="ifiled">Foto utama :</label>
                              <input type="file" class="form-control" id="ifiled" name="ifiled" placeholder=" (Rp)">
                            </div>
                            <div class="form-group">
                              <label for="nameprod">Nama Produk:</label>
                              <input type="text" class="form-control" id="nameprod" placeholder="">
                            </div>
                            <div class="row">
                              <div class="col-md-6 form-group">
                                <label for="merkprod">Merk :</label>
                                <select class="form-control" id="merkprod" >
                                  <option disabled="">pilih merk</option>
                                  <option value="2">IKEA</option>
                                  <option value="4">OLYMPIC</option> 
                                  <option value="3">INFORMA</option>
                                  <!-- <option value="">LIVIEN FURNITURE</option> -->
                                  <!-- <option value="">JYSK</option> -->
                                  <option value="1">Sahabat Kayu Store</option>
                                </select>
                              </div>
                              <div class="col-md-6 form-group">
                                <label for="katprod">Ketegori :</label>
                                <select class="form-control" id="katprod" >
                                  <option value="1">Sofa</option>
                                  <option value="2">Kursi Kantor</option>
                                  <option value="3">Karpet</option> 
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="sortprod">Keterangan (singkat) :</label>
                              <input type="text" class="form-control" id="sortprod" placeholder="kursi jati minimalis">
                            </div>
                            <div class="form-group">
                              <label for="desprod">Deskripsi :</label>
                              <textarea class="form-control" rows="5" id="desprod" placeholder="Kursi ini dibuat dari bahan kayu jati pilihan, warna : -Hitam -putih -original"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                              <label for="idberat">Berat Pengiriman :</label>
                              <input type="number" class="form-control" id="idberat" placeholder="- Kilogram (Kg)" min="0">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="idharga">Harga :</label>
                              <input type="number" class="form-control" id="idharga" placeholder="Rp. 0" min="0">
                            </div>
                             
                             <input type="submit" id="submit_newproduk" class="btn btn-info" name="">
                        </form>
                        <br><br><br><br>
                    </div>
                    <!-- ENd New Product -->

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
      <!-- <script src="<?php echo base_url() ?>assets/customers-template/js/owl.carousel.min.js"></script> -->
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
