
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIK || Barang Shop</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/foundation.css" />
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">SIK | Barang Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="<?php echo site_url('HomeCustomer')?>">Home</a></li>
          <li class='active'><a href="<?php echo site_url('HomeCustomer/cart')?>">View Cart</a></li>
          <?php
              if(isset($_SESSION['sik_logged'])){ 
                echo '<li><a href="'.site_url('HomeCustomer/account').'">My Account</a></li>';
                echo '<li><a data-toggle="modal" href="#modal_keluar" >Log Out</a></li>';
              }
              else{
                echo '<li><a href="'.site_url('Account/login').'">Log In</a></li>'; 
              }
          ?>
        </ul>
      </section>
    </nav>

<div class="container">

    <div style="margin-top:10px;">
      <div class=""> 
        <h4>Shopping Cart</h4>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="detail_cart">
            <?php 
              $no = 0;
              foreach ($this->cart->contents() as $items) {
                  $no++;
                echo '<tr>
                          <td><h4><strong>'.$items['name'].'</strong></h4></td>
                          <td>'.number_format($items['price']).'</td>
                          <td>'.$items['qty'].'</td>
                          <td>'.number_format($items['subtotal']).'</td>
                          <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Hapus</button></td>
                      </tr>';
              } 
              echo '
                  <tr>
                      <th colspan="3">Total</th>
                      <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
                  </tr>';
              ?>

            </tbody>
             
        </table>

        <div align="right"> 
            <?php
              if(isset($_SESSION['sik_logged'])){ 
                echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Bayar</button>';
              }
              else{
                echo '<a href="'.site_url('Account/login').'"><button type="button" class="btn btn-success">Bayar</button></a>';
              }
            ?> 
        </div>

      </div>
    </div>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Barang Shop. All Rights Reserved.</p>
        </footer>
      </div>
    </div>


<!--MODAL Baru-->
  <form id="formbayar">
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Konfirmasi Pembayaran</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
           
          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-group">
              <label for="usr">Kode Transaksi:</label> 
              <input type="text" class="form-control" id="idtransaksi" name="idtransaksi" value="<?php  echo 'INV'.date('ymd').'0'.date('His') ?>" readonly="">
            </div>
          </div>
          <div class="form-group" style="margin-left: 5%;margin-right: 5%;">
              <label >Nama </label> 
              <input type="text" id="customer" name="customer">
          </div>
          <div class="form-group" style="margin-left: 5%;margin-right: 5%;">
              <label >Alamat </label> 
              <input type="text" id="alamat" name="alamat">
          </div>
          <div class="form-group" style="margin-left: 5%;margin-right: 5%;">
              <label >Bukti Pembayaran </label> 
              <input type="file" id="file" name="file">
          </div>
          <input type="hidden" name="total" id="total" value="<?php echo $this->cart->total() ?>">
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" id="btn_bayar" class="btn btn-success">Bayar</button>
          </div>
          
        </div>
      </div>
    </div>
  </form>
<!--END MODAL baru-->
    


</div>
    
    <!-- Modal Keluar -->
        <form id="form_keluar">
            <div class="modal fade" id="modal_keluar" style="background-color:currentColor; " tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="judul_p"><b> Peringatan !! </b></h5> 
                  </div>

                  <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea3" id="tanggal_m">Apakah yakin ingin keluar ?</label>    
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default col-md-3" data-dismiss="modal" aria-label="Close">Batal</button>
                    <?php echo anchor('account/logout', 'Keluar', array('class' => 'btn btn-danger col-md-3')); ?>
                  </div>
                  
                </div>
              </div>
            </div>  
        </form>
      <!-- Modal Keluar end -->
      
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/foundation.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
              
            //Hapus Item Cart
            $(document).on('click','.hapus_cart',function(){
                var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
                $.ajax({
                    
                    url : "<?php echo base_url();?>index.php/HomeCustomer/hapus_cart",
                    method : "POST",
                    data : {row_id : row_id},
                    success :function(data){
                        setTimeout(' window.location.href = "<?php echo site_url('HomeCustomer/cart'); ?>" ');
                    }
                });
            });


          //Save bayar barang
          $('#formbayar').submit(function(e){
              e.preventDefault(); 

              // alert(idtransaksi+" "+cust+" "+alamat+" "+total);
              if ($('#file').get(0).files.length != 0) {
                    $.ajax({
                        url:'<?php echo base_url();?>index.php/HomeCustomer/bayar', //URL submit
                        type:"post", //method Submit
                        data:new FormData(this), //penggunaan FormData
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){ 
                            alert("sukses");
                            document.getElementById('formbayar').reset(); 
                            setTimeout(' window.location.href = "<?php echo site_url('HomeCustomer/cart'); ?>" ');       
                        }
                    });
                }else{
                    alert("Pilih file untuk di upload");
                }

                return false;
            });

        });
    </script>
</body>
</html>
