<?php include_once("partials/cabecalho.php"); ?>
<?php include_once("partials/cabecalho-busca.php"); ?>


<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Blog Grid</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Start -->
<section class="blog-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-4">
          
                <div class="row g-4 ratio_65">
                    <div class="col-lg-4 col-sm-6 col-sm-6">
                        <div class="blog-box wow fadeInUp">
                            <div class="blog-image">
                                <a href="blog-postagem.php">
                                    <img src="assets/images/blog/creme-macarrao.jpg" class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>

                            <div class="blog-contain">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 de feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Meracdo X</span></span>
                                </div>
                                <a href="blog-detail.html">
                                    <h3>Creme de macarrão com frango mediterrâneo cremoso de uma panela.</h3>
                                </a>
                                <button onclick="location.href = 'blog-postagem.php';" class="blog-button">Mais informação
                                    <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                </div>

                <nav class="custome-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php include_once("partials/rodape.php");?>