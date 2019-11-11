
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
          <li><a href="<?php echo site_url('HomeCustomer/cart')?>">View Cart</a></li> 
          <li class='active'><a href="<?php echo site_url('HomeCustomer/account')?>">My Account</a></li>
          <li><a data-toggle="modal" href="#modal_keluar" >Log Out</a></li>
          ?>
        </ul>
      </section>
    </nav>


    <div class="container" style="margin-top:10px;">
      <div class="small-12">
        
        <h4 align="center">Apa kabar <?php echo $username ?>, ?</h4>
        <br>
        <h5 style="margin-bottom: -10px;">Daftar Belanja</h5>
        <hr> 
        <div id="detail_cart">
          
        </div> 
        <br><br>
        

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
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Detail Belanja</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
           
          <!-- Modal body -->
          <div class="modal-body">
            <table class="table table-striped" id="dafdetail">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 50%">IdTransaksi</th>
                        <th style="width: 20%">harga</th> 
                        <th style="width: 25%">Jumlah Beli</th> 
                        <th style="width: 20%">Total harga</th> 
                    </tr>
                </thead>
                <tbody id="detail_trans"> 

                </tbody>
                 
            </table>
          </div> 
          <!-- Modal footer -->
          <div class="modal-footer">
            
          </div>
          
        </div>
      </div>
    </div> 
    <!--END MODAL baru-->

    <!-- modal verif -->
    <!-- modal sure -->
    <div id="mysure" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" align="center">Produk Sudah Diterima</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="form-group" style="margin-left: 5%; margin-top: 10px;">
                    <label>Product diterima dengan baik tanpa adanya masalah </label> 
                </div> 
                <div class="modal-footer" align="center">
                    <center>
                    <button type="button" class="btn btn-danger waves-effect waves-light m-r-10" style="margin-right: 10px" data-dismiss="modal">batal</button> 

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" id="mulaiupload">Ya</button> 
                    </center>
                </div>
            </div>

        </div>
    </div>
    <!-- modal verif end-->

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
            let inv;

            show();

            function show(){
                $.ajax({
                    async : true,
                    type  : 'ajax',
                    url   : '<?php echo base_url();?>index.php/HomeCustomer/getTransaksi',
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i; 
                        var jml;
                        for(i=0; i<data.length; i++){

                            // cek jumlah produk dibeli
                            $.ajax({
                                  async : false,
                                  type  : 'POST',
                                  url   : '<?php echo base_url();?>index.php/HomeCustomer/getInvoiceJumlah',
                                  dataType : 'JSON',
                                  data : {
                                      inv_id:data[i].kd_trans 
                                  },
                                  success : function(data){ 
                                      jml=data[0].jml;
                                  } 
                            });
                        // bag warna status
                        var wrnastatus = null;
                        if (data[i].status==7) {
                          wrnastatus = "#4CAF5050";
                        }else if(data[i].status==0){
                          wrnastatus = "#EF143E50";
                        }else if(data[i].status==2){
                          wrnastatus = "#EF143E50";
                        }else{
                          wrnastatus = "#FFFF4950";
                        }

                        html +=    
                            '<div class="card" style="margin-top: 5px;">'+
                              '<div class="card-body row">'+
                                '<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">'+
                                  '<img class="img-fluid" src="<?php echo base_url("/assets/images/'+data[i].bukti+'")?>" style="height: 100px;" >'+
                                '</div>'+
                                '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'+
                                  '<h5 class="card-title"><a href="javascript:void(0);" class="item_view" data-id_k="'+data[i].kd_trans+'">'+data[i].kd_trans+'</a></h5>'+
                                  '<p class="card-text">Tanggal '+data[i].tgl_trans+'</p>'+
                                  '<p class="card-text">'+jml+' Produk  | total : '+formatRupiah(data[i].total)+'</p>'+
                                '</div>'+
                                '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">'+
                                  '<h5 class="card-title">Status</h5>'+
                                  '<p class="card-text" style="background-color: '+wrnastatus+';">'+data[i].keterangan+'</p>';
                          if (data[i].status==6) {
                              html+='<button type="button" class="btn btn-info btn_sure" data-idinv="'+data[i].kd_trans+'"'+ 
                                    '>Telah Diterima</button>';
                          }
                          html +=       
                                '</div>'+ 
                              '</div>'+
                            '</div> ';
                        } 
                        $('#detail_cart').html(html);    
                        // $(".table").DataTable({
                        //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        // });             
                    } 
              });
            } 
            

            // 
            $('#detail_cart').on('click','.item_view',function(){
              // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
              var id_k = $(this).data('id_k');
 
              $.ajax({
                    async : false,
                    type  : 'POST',
                    url   : '<?php echo base_url();?>index.php/HomeCustomer/getTransaksidetail',
                    dataType : 'json',
                    data : {id_t: id_k},
                    success : function(data){
                        var html = '';
                        var i; 
                        for(i=0; i<data.length; i++){    
                          var to =(data[i].harga*data[i].jumlah);
                        html +=  
                            '<tr>'+
                                '<td>'+(i+1) +'</td>'+
                                '<td>'+data[i].nama_barang+'</td>'+
                                '<td>'+formatRupiah(data[i].harga)+'</td>'+ 
                                '<td>'+data[i].jumlah+'</td>'+  
                                '<td>'+to+'</td>'+ 
                            '</tr>';    
                        }

                        // $('#dafdetail').empty();
                        $('#detail_trans').html(html);    
                        // $(".table").DataTable({
                        //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        // });             
                    } 
              });

              $('#myModal').modal('show');
                
            });

            $('#detail_cart').on('click','.btn_sure',function(){
              inv = $(this).data('idinv');
              $('#mysure').modal('show');
            });

            $('#mulaiupload').on('click',function(){
              
              $.ajax({
                    async : false,
                    type  : 'POST',
                    url   : '<?php echo base_url();?>index.php/HomeCustomer/paketSampai',
                    dataType : 'JSON',
                    data : {
                        id_inv:inv
                    },
                    success : function(data){ 
                        alert("Sukses");
                        setTimeout(' window.location.href = "<?php echo site_url('HomeCustomer/account'); ?>" ');
                    } 
              });
            });            


            function formatRupiah(angka){
              var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split       = number_string.split(','),
              sisa        = split[0].length % 3,
              rupiah        = split[0].substr(0, sisa),
              ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
         
              // tambahkan titik jika yang di input sudah menjadi angka ribuan
              if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
              }
         
              rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
              return "" == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }

        });
    </script>    
</body>
</html>
