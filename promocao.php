<?php include_once("partials/cabecalho.php"); ?>

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Orfetas do dia</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Orfetas do dia</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Shop Section Start -->
<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-custome-3">
                <div class="left-box wow fadeInUp">
                    <div class="shop-left-sidebar">
                        <div class="back-button">
                            <h3><i class="fa-solid fa-arrow-left"></i> Voltar</h3>
                        </div>

                        <div class="filter-category">
                            <div class="filter-title">
                                <h2>Filtros</h2>
                                <a href="javascript:void(0)">Limpar tudo</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Vegetal</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fruta</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fresca</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Leite</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Carne</a>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion custome-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Categorias</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="search" class="form-control" id="search" placeholder="Procurar ..">
                                            <label for="search">Procurar</label>
                                        </div>

                                        <ul class="category-list custom-padding custom-height">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="fruit">
                                                    <label class="form-check-label" for="fruit">
                                                        <span class="name">Frutas vegetais</span>
                                                        <span class="number">(15)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="cake">
                                                    <label class="form-check-label" for="cake">
                                                        <span class="name">Padaria, bolo e laticínios</span>
                                                        <span class="number">(12)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="behe">
                                                    <label class="form-check-label" for="behe">
                                                        <span class="name">Bebidas</span>
                                                        <span class="number">(20)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="snacks">
                                                    <label class="form-check-label" for="snacks">
                                                        <span class="name">Lanches e alimentos de marca</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="beauty">
                                                    <label class="form-check-label" for="beauty">
                                                        <span class="name">Beleza e família</span>
                                                        <span class="number">(30)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="pets">
                                                    <label class="form-check-label" for="pets">
                                                        <span class="name">Cozinha, jardim e animais de estimação</span>
                                                        <span class="number">(50)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="egg">
                                                    <label class="form-check-label" for="egg">
                                                        <span class="name">Ovos, carne e peixe</span>
                                                        <span class="number">(19)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>SubCategorias</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="veget">
                                                    <label class="form-check-label" for="veget">
                                                        <span class="name">Vegetarian</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Non Vegetarian</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Non Vegetarian</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Non Vegetarian</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>Marcas</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="veget">
                                                    <label class="form-check-label" for="veget">
                                                        <span class="name">Vegetarian</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Non Vegetarian</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-custome-9">
                <div class="show-button">
                    <div class="filter-button-group mt-0">
                        <div class="filter-button d-inline-block d-lg-none">
                            <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                        </div>
                    </div>

                    <div class="top-filter-menu">
                        <div class="category-dropdown">
                            <h5 class="text-content">Ordenar por:</h5>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                    <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularidade</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="low" href="javascript:void(0)">Menor preço</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="high" href="javascript:void(0)">Maior preço</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="grid-option d-none d-md-block">
                            <ul>
                                <li class="three-grid">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                                <li class="grid-btn d-xxl-inline-block d-none active">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/grid-4.svg" class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                        <img src="../assets/svg/grid.svg" class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                    </a>
                                </li>
                                <li class="list-btn">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/list.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                    <div>
                        <div class="product-box-3 h-100 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/produtos/produto-fake.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Pão fresco</h5>
                                    </a>
                                    <br>
                                    <h5 class="price"><span class="theme-color"> <b style="color: #000;">R$8,02</b> </span> <del>R$15.15</del>
                                    </h5>
                                    <br>
                                    <div class="add-to-cart-box bg-white">
                                        <a href="#">
                                            <button class="btn btn-add-cart addcart-button bg-danger text-white">Comprar</button>
                                        </a>

                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box-3 h-100 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/produtos/produto-fake.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Macarrão</h5>
                                    </a>
                                    <br>
                                    <h5 class="price"><span class="theme-color"> <b style="color: #000;">R$11,10</b> </span> <del>R$15.15</del>
                                    </h5>
                                    <br>
                                    <div class="add-to-cart-box bg-white">
                                        <a href="#">
                                            <button class="btn btn-add-cart addcart-button bg-danger text-white">Comprar</button>
                                        </a>

                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

<?php include_once("partials/rodape.php"); ?>