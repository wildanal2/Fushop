
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIK || Barang Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/foundation.css" />
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="<?php echo site_url('Home')?>">SIK | Barang Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="<?php echo site_url('HomeCustomer')?>">Home</a></li> 
          <?php
              if(isset($_SESSION['username'])){
                echo '<li><a href="orders.php">My Orders</a></li>';
                echo '<li><a href="account.php">My Account</a></li>';
                echo '<li><a href="'.site_url('Account/logout').'">Log Out</a></li>';
              }
              else{
                echo '<li class="active"><a href="'.site_url('Account/login').'">Log In</a></li>'; 
              }
          ?>
        </ul>
      </section>
    </nav>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        
        <form id="form_login" style="margin-top:30px;">
          <div class="row">
            <div class="small-8">

              <div class="row">
                <div class="small-4 columns">
                  <label for="right-label" class="right inline">Email</label>
                </div>
                <div class="small-8 columns">
                  <input type="email" id="email" placeholder="xxxxxx@gmail.com" name="email">
                </div>
              </div>
              <div class="row">
                <div class="small-4 columns">
                  <label for="right-label" class="right inline">Password</label>
                </div>
                <div class="small-8 columns">
                  <input type="password" id="pwd" name="pwd">
                </div>
              </div>

              <div class="row">
                <div class="small-4 columns">

                </div>
                <div class="small-8 columns">
                  <button type="submit" class="btn buttonload" id="btn_login"><i id="loadbtn" style="display: none;" class="fa fa-spinner fa-spin"></i> Sign In</button>
                </div>
              </div>
            </div>
          </div>
        </form>

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
      
      // fungsi button submit / login
      $('#form_login').submit(function(e){
          var username = $('#email').val();
          var password = $('#pwd').val();

          $.ajax({
            async : false,
              type : "POST",
              url   : '<?php echo base_url();?>index.php/Account/ceklogin',
              dataType : "JSON",
              data : {username:username,password:password},
              success: function(response){  
              // jika terdapat error / user pass salah
              if(!response.error){ 
                document.getElementById("loadbtn").style.display="inline-block";
                document.getElementById("btn_login").disabled = true;

                if (response.level == 6) {
                  setTimeout(' window.location.href = "<?php echo site_url('HomeCustomer'); ?>" ',1500);
                }else if (response.level == 5) {
                  setTimeout(' window.location.href = "<?php echo site_url('AdminPemesanan'); ?>" ',1500);
                }else if (response.level == 4) {
                  setTimeout(' window.location.href = "<?php echo site_url('AdminProduksi'); ?>" ',1500);
                }else if (response.level == 3) {
                  setTimeout(' window.location.href = "<?php echo site_url('AdminPengiriman'); ?>" ',1500);
                }else if (response.level == 2) {
                  setTimeout(' window.location.href = "<?php echo site_url('AdminBahanBaku'); ?>" ',1500);
                }

              }else{
                alert("Password Salah");
              }
            }
          }); 
          return false;
      });
         

    });
    </script>
</body>
</html>
