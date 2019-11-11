
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIK || Barang Shop</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/foundation.css" />
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">SIK | Barang Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class='active'><a href="<?php echo site_url('Home')?>">Home</a></li>
          <li><a href="<?php echo site_url('Home/cart')?>">View Cart</a></li>
          <li><a href="<?php echo site_url('Home/transaksi')?>">Transaksi</a></li>
          <li><a href="<?php echo site_url('Home/account')?>">My Account</a></li>
          <li><a href="<?php echo site_url('Account/logout')?>">Log Out</a></li>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php 
          foreach ($barang as $key ) {
              echo '<div class="large-3 columns">'; 
              echo '<img class="img-fluid" src="'.base_url().'assets/images/products/'.$key->foto.'"/>';
              echo '<p><h4>'.$key->nama_barang.'</h4></p>';
              echo '<p>Product Code : '.$key->kd_barang.'</p>';
              echo '<p>Description : '.$key->deskripsi.'</p>';
              echo '<p>Harga : '.$key->harga.'</p>';
              echo '<button class="add_cart btn btn-success btn-block" data-produkid="'.$key->kd_barang.'" data-produknama="'.$key->nama_barang.'" data-produkharga="'.$key->harga.'">Add To Cart</button>';
              echo '</div>';

          } 
          ?> 

      </div>
    </div>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>
      </div>
    </div>

    <script src="<?php echo base_url() ?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/foundation.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.add_cart').click(function(){
                var produk_id    = $(this).data("produkid");
                var produk_nama  = $(this).data("produknama");
                var produk_harga = $(this).data("produkharga");
                var quantity     = 1;
                
                $.ajax({
                    url : "<?php echo base_url();?>index.php/Home/add_to_cart",
                    method : "POST",
                    data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                    success: function(data){
                        setTimeout(' window.location.href = "<?php echo site_url('Home/cart'); ?>" ');
                    }
                });
            });
     
            
        });
    </script>
</body>
</html>
