<?php require_once('config.php'); ?>
<div class="navbar-top">
    <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
        <span class="navbar-toggler-icon">
            <i class="fa-solid fa-bars"></i>
        </span>
    </button>

    <a href="index.html" class="web-logo nav-logo">
        <a href="index.php">
            <img src="assets/images/supermacado.png" class="img-fluid " alt="">
        </a>

    </a>

    <div class="middle-box">
        <div class="search-box">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Estou procurando..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn bg-danger" type="button" id="button-addon2">
                    <i data-feather="search"></i>
                </button>
            </div>
        </div>
    </div>


    <div class="rightside-box">
        <div class="search-full">
            <div class="input-group">
                <span class="input-group-text">
                    <i data-feather="search" class="font-light"></i>
                </span>
                <input type="text" class="form-control search-type" placeholder="Search here..">
                <span class="input-group-text close-search">
                    <i data-feather="x" class="font-light"></i>
                </span>
            </div>
        </div>
        <ul class="right-side-menu">

            <li class="right-side">
                <div class="delivery-login-box">
                    <div class="delivery-icon">
                        <div class="search-box">
                            <i data-feather="search"></i>
                        </div>
                    </div>
                </div>
            </li>
            <!-- telefone -->
            <li class="right-side">
                <div class="delivery-icon">
                    <a class=" delivery-login-box pointer text-success" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>">
                    <i style="font-size: 30px; cursor: pointer;" class="fa-brands fa-whatsapp"></i>
                    </a>

                </div>

            </li>
            <!-- favoritos -->
            <!-- <li class="right-side">
                <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                    <i data-feather="heart"></i>
                </a>
            </li> -->

            <li class="right-side">
                <div class="onhover-dropdown header-badge">
                    <button type="button" class="btn p-0 position-relative header-wishlist">
                        <a href="carrinho.php">
                            <i data-feather="shopping-cart"></i>
                        </a>

                        <span class="position-absolute top-0 start-100 translate-middle badge">69

                        </span>
                    </button>


                </div>
            </li>
            <li class="right-side onhover-dropdown">
                <div class="delivery-login-box">
                    <div class="delivery-icon">
                        <a href="admin/index.php">
                            <i data-feather="user"></i>
                        </a>
                    </div>

                </div>


            </li>
        </ul>
    </div>
</div>