<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/images/fusho.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <!-- <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent"> -->
                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav" >
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url() ?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1" style="margin-top: -25px">
                                    <a class="dropdown-item" href="category.html"> shop category</a>
                                    <a class="dropdown-item" href="single-product.html">product details</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rooms
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2" style="margin-top: -25px">
                                    <a class="dropdown-item" href="<?php echo site_url('admin') ?>"> login</a>
                                    <a class="dropdown-item" href="tracking.html">tracking</a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Jika memiliki Sesion -->
                    <?php  if ($this->session->userdata('sik_logged')){  
                        $s_data = $this->session->userdata('sik_logged'); ?>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="<?php echo site_url() ?>Cart" role="button">
                                    <i class="fas fa-cart-plus"></i>
                                </a> 
                            </div>
                            <a href="<?php echo base_url('people') ?>"><i class="ti-user"></i></a>
                            <a href="<?php echo site_url() ?>Account/logout"> <i class="ti-share-alt"></i> </a>
                        </div>
                    <?php }else{ ?>
                        <div class="hearer_icon d-flex"> 
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="<?php echo site_url() ?>Cart" role="button">
                                    <i class="fas fa-cart-plus"></i>
                                </a> 
                            </div>
                            <a href="<?php echo site_url() ?>Account/login"><i class="ti-user"></i></a>
                        </div>

                    <?php } ?> 
                    
                    
                </nav>

            </div>
        </div>
    </div> 
</header>