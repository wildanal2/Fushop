
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
        .quantity input {
            -webkit-appearance: none;
            border: none;
            text-align: center;
            width: 32px;
            font-size: 16px;
            color: #43484D;
            font-weight: 300;
        }
        button[class*=btn] {
            width: 30px;
            height: 30px;
            background-color: #E1E8EE;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }
        .minus-btn img {
            margin-bottom: 3px;
        }
        .plus-btn img {
            margin-top: 2px;
        }
        .quantity {
            padding-top: 20px;
            margin-right: 60px;
        }
        button:focus,
        input:focus {
            outline:0;
        }
        .item {
            padding: 20px 30px;
            height: 120px;
            display: flex;
        }
    </style>
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

    <!--================Cart Area =================-->
  <section class="cart_area ">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody id="tbod_cartt">

 
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="<?php echo site_url() ?>">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="<?php echo site_url() ?>Checkout">Proceed to checkout</a>
          </div>
        </div> 
 
        
      </div>
  </section>
  <!--================End Cart Area =================-->



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

                      var html = "";
                      var total= 0;
                      data.forEach(function(da){
                        html += 
                            '<tr>'+
                                '<td>'+
                                  '<div class="media">'+
                                    '<div class="col-sm-2 col-md-2 d-flex">'+
                                      '<img src="<?php echo base_url() ?>assets/images/'+da.p.source+'" class="img-responsive"/>'+
                                    '</div>'+
                                    '<div class="media-body">'+
                                      '<p>'+da.p.nama_barang+'</p>'+
                                    '</div>'+
                                  '</div>'+
                                '</td>'+
                                '<td width="15%">'+ 
                                    convertToRupiah(da.p.harga)+ 
                                '</td>'+
                                '<td>'+
                                  '<div class="col-sm-1 col-md-1 d-flex quantity">'+
                                    '<button class="minus-btn" type="button" name="button">-</button>'+
                                      '<input type="text" name="name" value="'+da.qty+'" data-rowid="'+da.rowid+'">'+
                                    '<button class="plus-btn" type="button" name="button">+</button>'+ 
                                  '</div>'+   
                                '</td>'+
                                '<td width="15%">'+ 
                                  '<h5 class="toharga" data-harganya="'+da.p.harga+'" data-rowid="'+da.rowid+'">'+convertToRupiah(da.p.harga*da.qty)+'</h5>'+
                                '</td>'+
                            '</tr>';
                          total += (da.p.harga*da.qty);
                      }); 
                      html +=
                        '<tr>'+
                          '<td></td>'+
                          '<td></td>'+
                          '<td>'+
                            '<h5>Subtotal</h5>'+
                          '</td>'+
                          '<td>'+
                            '<h5>'+convertToRupiah(total)+'</h5>'+
                          '</td>'+
                        '</tr>'; 

                      $('#tbod_cartt').html(html); 
                  }
                }); 
            }
            
            $('#tbod_cartt').on('click','.plus-btn', function(e) {
                e.preventDefault();
                console.log('lalala +');
                var $this = $(this); 
                var input = $this.closest('div').find('input');
                var hargato = $this.closest('tr').find('.toharga'); 

                var dellbtn = hargato.closest('td').find('.hapusitem'); // hapus btn

                var value = parseInt(input.val());
                if (value < 100) {
                  value = value + 1;
                  hargato.show();
                  dellbtn.remove();

                  hargato.html( convertToRupiah(hargato.data('harganya')*value) );  
 
                  $.ajax({ 
                    type : "POST",
                    url:'<?php echo site_url('Cart/update_cart') ?>',
                    dataType: "JSON",
                    data: {
                        rowid: input.data('rowid'),
                        qty:value
                    },
                    success: function(data){  
                        console.log('update');
                        showcart();
                    }
                  }); 
                } else {
                  value =100;
                }
                input.val(value);
            }); 
            $('#tbod_cartt').on('click','.minus-btn', function(e) {
                e.preventDefault();
                console.log('lalala -');
                var $this = $(this); 
                var input = $this.closest('div').find('input');
                var hargato = $this.closest('tr').find('.toharga'); 
                var divv = hargato.closest('td');
                var value = parseInt(input.val()); 
                if (value > 1) {
                  value = value - 1; 
                  hargato.html( convertToRupiah(hargato.data('harganya')*value) ); 

                  $.ajax({ 
                    type : "POST",
                    url:'<?php echo site_url('Cart/update_cart') ?>',
                    dataType: "JSON",
                    data: {
                        rowid: input.data('rowid'),
                        qty:value
                    },
                    success: function(data){  
                        console.log('update');
                        showcart();
                    }
                  });
                }
                else if(value == 0){
                  console.log('is empty');

                } else {
                  value = 0;
                  hargato.html( convertToRupiah(hargato.data('harganya')*value) ); 
                  hargato.hide();
                  //delete button
                  var btndel = '<div class="col-auto hapusitem" data-rowid="'+hargato.data('rowid')+'">'+
                                  '<a href="#" class="btn btn-danger" style="width: 100%;"><i class="ti-trash"></i> hapus</a>'+
                                '</div>'; 
                  divv.append(btndel);
                }
                input.val(value);
            });

            $('#tbod_cartt').on('click','.hapusitem', function(){
                console.log('Hapus : '+ $(this).data('rowid'));

                Swal.fire({
                    title: 'Hapus dari keranjang?', 
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.value) {  
 
                      $.ajax({ 
                          type : "POST",
                          url:'<?php echo site_url('Cart/hapus_cart') ?>',
                          dataType: "JSON",
                          data: {
                              rowid: $(this).data('rowid')
                          },
                          success: function(data){ 
                              if (!data.error) {
                                  Swal.fire(
                                    'Deleted!',
                                    'Berhasil dihapus dari list.',
                                    'success'
                                  ) 
                              }
                              console.log('deleted'); 
                              showcart();
                          }
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
