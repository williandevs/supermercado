 <?php include_once("config.php"); ?>

 <!DOCTYPE html>
 <html lang="pt-br">

 <head>

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Fastkart">
     <meta name="keywords" content="Fastkart">
     <meta name="author" content="Fastkart">
     <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
     <title> loja - <?php echo $nome_loja ?></title>

     <Google font -->
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

         <!-- bootstrap css -->
         <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

         <!-- wow css -->
         <link rel="stylesheet" href="assets/css/animate.min.css" />

         <!-- font-awesome css -->
         <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

         <!-- feather icon css -->
         <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

         <!-- slick css -->
         <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
         <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

         <!-- Iconly css -->
         <link rel="stylesheet" type="text/css" href="assets/css/bulk-style.css">
         <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

         <!-- Template css -->
         <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">





 </head>


 <body class="bg-effect">
     <!-- Header Start -->
     <header class="pb-0">
         <div class="header-top">
             <div class="container-fluid-lg">
                 <div class="row">
                     <div class="col-xxl-3 d-xxl-block d-none">
                         <div class="top-left-header">
                             <i class="iconly-Location icli text-white"></i>
                             <span class="text-white">1418 Riverwood Drive, CA 96052, EUA</span>
                         </div>
                     </div>

                     <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                         <div class="header-offer">
                             <div class="notification-slider">
                                 <div>
                                     <div class="timer-notification">
                                         <h6><strong class="me-1">Welcome to Fastkart!</strong>Wrap new offers/gift
                                             every signle day on Weekends.<strong class="ms-1">New Coupon Code: Fast024
                                             </strong>

                                         </h6>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="top-nav top-header sticky-header">
             <div class="container-fluid-lg  mb-2">
                 <div class="row">
                     <div class="col-12">
                         <?php include_once("partials/cabecalho-busca.php"); ?>
                     </div>
                 </div>
             </div>

             <!-- menu inicio-->

             <div class="container-fluid-lg">
                 <div class="row">
                     <div class="col-12">
                         <div class="header-nav ">
                             <div class="header-nav-left">
                                 <button class="dropdown-category">
                                     <i data-feather="align-left"></i>
                                     <span>todas as categorias</span>
                                 </button>

                                 <div class="category-dropdown">
                                     <div class="category-title">
                                         <h5>Categorias</h5>
                                         <button type="button" class="btn p-0 close-button text-content">
                                             <i class="fa-solid fa-xmark"></i>
                                         </button>
                                     </div>

                                     <ul class="category-list">
                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">

                                                 <h6>Mercearia</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Tudo de Mercearia</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Potato & Tomato</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Pepino e Capsicum</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Vegetais folhosos</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Vegetais de raiz</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Feijão e quiabo</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Repolho e couve -flor</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Cabaça e baqueta</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Especialidade</a>
                                                         </li>
                                                     </ul>
                                                 </div>

                                                 <div class="list-2">
                                                     <div class="category-title-box"></div>

                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Banana & Papaya</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Kiwi, Citrus Fruit</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Apples & Pomegranate</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Seasonal Fruits</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Mangoes</a>
                                                         </li>

                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">
                                                 <!--    <img src="assets/svg/1/cup.svg" alt=""> -->
                                                 <h6>Bebidas</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box w-100">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <a href="bebida.php">
                                                             <h5>Tudo de Bebidas</h5>
                                                         </a>

                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="agua-sucos.php">bebidas</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Energéticos e Isotônicos</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Lietes</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Refrigerantes</a>
                                                         </li>

                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">
                                                 <h6>Açougue</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Carne</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Fresh Meat</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Frozen Meat</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Marinated Meat</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Fresh & Frozen Meat</a>
                                                         </li>
                                                     </ul>
                                                 </div>

                                                 <div class="list-2">
                                                     <div class="category-title-box">
                                                         <h5>Peixes</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Fresh Water Fish</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Dry Fish</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Frozen Fish & Seafood</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Marine Water Fish</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Canned Seafood</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Prawans & Shrimps</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Other Seafood</a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">

                                                 <h6>Pães e Quijos</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Breakfast Cereals</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Oats & Porridge</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Kids Cereal</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Muesli</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Flakes</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Granola & Cereal Bars</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Instant Noodles</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Pasta & Macaroni</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Frozen Non-Veg Snacks</a>
                                                         </li>
                                                     </ul>
                                                 </div>

                                                 <div class="list-2">
                                                     <div class="category-title-box">
                                                         <h5>Dairy</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Milk</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Curd</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Paneer, Tofu & Cream</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Butter & Margarine</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Condensed, Powdered Milk</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Buttermilk & Lassi</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Yogurt & Shrikhand</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Flavoured, Soya Milk</a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">
                                                 <!-- <img src="assets/svg/1/frozen.svg" alt=""> -->
                                                 <h6>Alimentos congelados</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box w-100">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Noodle, Pasta</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Instant Noodles</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Hakka Noodles</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Cup Noodles</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Vermicelli</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Instant Pasta</a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">
                                                 <!--   <img src="assets/svg/1/biscuit.svg" alt=""> -->
                                                 <h6>Biscoitos e Bolhachas</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Biscuits & Cookies</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Salted Biscuits</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Marie, Health, Digestive</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Cream Biscuits & Wafers</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Glucose & Milk Biscuits</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Cookies</a>
                                                         </li>
                                                     </ul>
                                                 </div>

                                                 <div class="list-2">
                                                     <div class="category-title-box">
                                                         <h5>Bakery Snacks</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Bread Sticks & Lavash</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Cheese & Garlic Bread</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Puffs, Patties, Sandwiches</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Breadcrumbs & Croutons</a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                         <li class="onhover-category-list">
                                             <a href="javascript:void(0)" class="category-name">

                                                 <h6>Legumes e Vegetais</h6>
                                                 <i class="fa-solid fa-angle-right"></i>
                                             </a>

                                             <div class="onhover-category-box">
                                                 <div class="list-1">
                                                     <div class="category-title-box">
                                                         <h5>Grocery</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Lemon, Ginger & Garlic</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Indian & Exotic Herbs</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Vegetables</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Fruits</a>
                                                         </li>
                                                     </ul>
                                                 </div>

                                                 <div class="list-2">
                                                     <div class="category-title-box">
                                                         <h5>Organic Staples</h5>
                                                     </div>
                                                     <ul>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Dry Fruits</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Dals & Pulses</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Millet & Flours</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Sugar, Jaggery</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Masalas & Spices</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Rice, Other Rice</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Flours</a>
                                                         </li>
                                                         <li>
                                                             <a href="javascript:void(0)">Organic Edible Oil, Ghee</a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>


                             <!-- menu principal  -->
                             <div class="header-nav-middle">
                                 <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                     <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                         <div class="offcanvas-header navbar-shadow">
                                             <h5>Menu</h5>
                                             <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                         </div>
                                         <div class="offcanvas-body">
                                             <ul class="navbar-nav">

                                                 <li class="nav-item dropdown">
                                                     <a href="index.php" class="nav-link">Home</a>
                                                 </li>

                                                 <li class="nav-item dropdown">
                                                     <a href="promocao.php" class="nav-link">Orfetas do dia</a>
                                                 </li>
                                                 <li class="nav-item dropdown">
                                                     <a href="hortfruti.php" class="nav-link">Hortfruit</a>
                                                 </li>
                                                 <li class="nav-item dropdown">
                                                     <a href="limpeza.php" class="nav-link">Limpeza</a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- menu fim -->
     </header>
     <!-- Header End -->



     <!-- mobile fix menu start -->
     <div class="mobile-menu d-md-none d-block mobile-cart">
         <ul>
             <li class="active">
                 <a href="index.php">
                     <i class="iconly-Home icli"></i>
                     <span>Home</span>
                 </a>
             </li>

             <li class="mobile-category">
                 <a href="javascript:void(0)">
                     <i class="iconly-Category icli js-link"></i>
                     <span>Category</span>
                 </a>
             </li>

             <li>
                 <a href="buscar.php" class="search-box">
                     <i class="iconly-Search icli"></i>
                     <span>Pesquisar</span>
                 </a>
             </li>



             <li>
                 <a href="cart.html">
                     <i class="iconly-Bag-2 icli fly-cate"></i>
                     <span>Cart</span>
                 </a>
             </li>
         </ul>
     </div>
     <!-- mobile fix menu end -->