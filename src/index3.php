<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<?php $title = 'Fresheat Food & Restaurant PHP Template' ?>
<?php include './partials/head.php' ?>

<body class="bg-color2">

    <!-- Preloader Start -->
    <?php include './partials/preloader.php' ?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php' ?>

    <!--<< Mouse Cursor Start >>-->
    <?php include './partials/mouse-cursor.php' ?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/sidebar.php' ?>

    <!-- Header Section Start -->
    <?php include './partials/header.php' ?>

    <!-- Search Area Start -->
    <?php include './partials/search.php' ?>


    <!-- Banner Section   S T A R T -->
    <section class="banner-section fix relative">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover -z-50">
            <source src="./v2.mp4" type="video/mp4" />
        </video>
        <div class="h-[80vh] ">

        </div>
    </section>

    <!-- Best Food Items Section   S T A R T -->
    <section class="best-food-items-section fix section-padding bg-color2">
        <div class="best-food-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/bestFoodItemsShape1_1.png"
                    alt="shape"></div>
            <div class="shape2 float-bob-x d-none d-xxl-block"><img src="assets/img/shape/bestFoodItemsShape1_2.png"
                    alt="shape"></div>
            <div class="container">
                <div class="title-area">
                    <div class="sub-title text-center wow fadeInUp flex items-center justify-center text-center"
                        data-wow-delay="0.5s">
                        <img class="me-2" style="fill: red;" src="assets/img/icon/titleIcon.svg" alt="icon">Best Food
                        <img class="ms-2" style="fill: red;" src="assets/img/icon/titleIcon.svg" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Popular Food Items
                    </h2>
                </div>
                <div class="slider-area mb-10 md:mb-40">
                    <div class="swiper bestFoodItems-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-food-items flex flex-col items-center justify-center">
                                    <div class="relative flex items-center justify-center h-24 md:h-44 w-24 md:w-44">
                                        <img class="h-20 md:h-40 w-20 md:w-40" src="assets/img/food-items/f1.png"
                                            alt="thumb">
                                        <div class="absolute top-0 right-0"><img class="cir36"
                                                src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.php">
                                            <h3>Chicken Pizza</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items flex flex-col items-center justify-center">
                                    <div class="relative flex items-center justify-center h-24 md:h-44 w-24 md:w-44">
                                        <img class="h-20 md:h-40 w-20 md:w-40" src="assets/img/food-items/f2.png"
                                            alt="thumb">
                                        <div class="absolute top-0 right-0"><img class="cir36"
                                                src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.php">
                                            <h3>Egg and Cucumber</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items flex flex-col items-center justify-center">
                                    <div class="relative flex items-center justify-center h-24 md:h-44 w-24 md:w-44">
                                        <img class="h-20 md:h-40 w-20 md:w-40" src="assets/img/food-items/f3.png"
                                            alt="thumb">
                                        <div class="absolute top-0 right-0"><img class="cir36"
                                                src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.php">
                                            <h3>Chicken Fried Rice</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items flex flex-col items-center justify-center">
                                    <div class="relative flex items-center justify-center h-24 md:h-44 w-24 md:w-44">
                                        <img class="h-20 md:h-40 w-20 md:w-40" src="assets/img/food-items/f4.png"
                                            alt="thumb">
                                        <div class="absolute top-0 right-0"><img class="cir36"
                                                src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.php">
                                            <h3>Chicken Leg Piece</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bestFoodItems-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="title-area pb-20">
            <div class="sub-title text-center wow fadeInUp flex gap-2 items-center justify-center"
                data-wow-delay="0.5s">
                <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">OUR TECHNOLOGY<img class="ms-1"
                    src="assets/img/icon/titleIcon.svg" alt="icon">
            </div>
            <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                Technology & Innovation
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 container mx-auto  pb-20">
            <div class="border-2 border-black/50 p-6 flex flex-col gap-4 divide-y-2 divide-black/50 rounded">
                <div class="flex gap-4 pb-4">
                    <div class="border-2 border-black/50 -mt-20 bg-gray-100 p-4 rounded">
                        <img class="h-20 w-20 object-contain" src="./assets/img/tech/p1.png" alt="">
                    </div>
                    <div class="text-lg md:text-2xl font-semibold text-black">World Class Manufacturing</div>
                </div>

                <div>Our sophisticated production plant, with a 500 Tonne per month capacity, is home to the latest in
                    technology and machinery from the very best in the world and applies the best of global practices.
                    Today, it is equipped to develop & handle a varied fare of processed products.</div>
            </div>
            <div class="border-2 border-black/50 p-6 flex flex-col gap-4 divide-y-2 divide-black/50 rounded">
                <div class="flex gap-4 pb-4">
                    <div class="border-2 border-black/50 -mt-20 bg-gray-100 p-4 rounded">
                        <img class="h-20 w-20 object-contain" src="./assets/img/tech/p2.png" alt="">
                    </div>
                    <div class="text-lg md:text-2xl font-semibold text-black">Premium Quality Ingredients</div>
                </div>

                <div>The raw material is sourced from the best in the world and only from pre-approved suppliers, who
                    deliver every order under a quality assurance certificate ensuring that the only the best is
                    processed in our plant.</div>
            </div>
            <div class="border-2 border-black/50 p-6 flex flex-col gap-4 divide-y-2 divide-black/50 rounded">
                <div class="flex gap-4 pb-4">
                    <div class="border-2 border-black/50 -mt-20 bg-gray-100 p-4 rounded">
                        <img class="h-20 w-20 object-contain" src="./assets/img/tech/p3.png" alt="">
                    </div>
                    <div class="text-lg md:text-2xl font-semibold text-black">Modern & Hygienic Units</div>
                </div>

                <div>The latest in global production practices and highest hygiene standards are implemented &
                    maintained all through the plant and at every stage of the production cycle.</div>
            </div>
            <div class="border-2 border-black/50 p-6 flex flex-col gap-4 divide-y-2 divide-black/50 rounded">
                <div class="flex gap-4 pb-4">
                    <div class="border-2 border-black/50 -mt-20 bg-gray-100 p-4 rounded">
                        <img class="h-20 w-20 object-contain" src="./assets/img/tech/p4.png" alt="">
                    </div>
                    <div class="text-lg md:text-2xl font-semibold text-black">Cutting-edge Technology</div>
                </div>

                <div>In line to our mission, our policy to continuously upgrade the production technology & machinery
                    from the best in the world from time to time ensures the highest quality standards are delivered,
                    batch after batch.</div>
            </div>
        </div>
    </section>


    <!-- About Us Section   S T A R T -->
    <section class="about-us-section fix  pb-20">
        <div class="about-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img
                    src="https://www.ex-coders.com/php-template/fresheat/assets/img/shape/aboutShape1_1.png"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="assets/img/shape/aboutShape1_2.png" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img class="cir36"
                    src="https://www.ex-coders.com/php-template/fresheat/assets/img/shape/aboutShape1_3.png"
                    alt="shape"></div>
            <div class="shape4 d-none d-xxl-block"><img
                    src="https://www.ex-coders.com/php-template/fresheat/assets/img/shape/aboutShape1_4.png"
                    alt="shape"></div>
            <div class="shape5 d-none d-xxl-block"><img src="assets/img/shape/aboutShape1_5.png" alt="shape"></div>
            <div class="shape6 d-none d-xxl-block"><img class="cir36"
                    src="https://www.ex-coders.com/php-template/fresheat/assets/img/shape/aboutShape1_6.png"
                    alt="shape"></div>
            <div class="container">
                <div class="about-us section-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-area ">
                                <div class="sub-title text-center wow fadeInUp flex items-center justify-center gap-2"
                                    data-wow-delay="0.5s">
                                    <img class="" src="assets/img/icon/titleIcon.svg" alt="icon">About US<img class=""
                                        src="assets/img/icon/titleIcon.svg" alt="icon">
                                </div>
                                <p class="text wow fadeInUp" data-wow-delay="0.8s">Founded in 1997, Chatha Foods Limited
                                    is one of India’s recognised frozen food processor, serving top QSRs(Quick Serving
                                    Restaurants), CDRs (Casual Dining Restaurants), and other players in the HoReCa
                                    (Hotel-Restaurant-Catering) segment. Our manufacturing facilities and systems are
                                    BRC Certified.</p>
                                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                                    <a class="theme-btn" href="menu.php">GET STARTED<i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee-wrapper style-1 text-slider section-padding pt-0 mt-5">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item style1">
                    <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                    <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                    <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                    <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                    <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                    <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                    <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                    <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                    <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                    <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                    <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                    <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                    <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Food Menu section  S T A R T -->
    <section class="food-menu-section fix section-padding">
        <div class="burger-shape">
            <img src="assets/img/shape/burger-shape.png" alt="img">
        </div>
        <div class="fry-shape">
            <img src="assets/img/shape/fry-shape.png" alt="img">
        </div>
        <div class="food-menu-wrapper style1">
            <div class="container">
                <div class="food-menu-tab-wrapper style-bg">
                    <div class="title-area">
                        <div class="sub-title text-center wow fadeInUp flex gap-2 items-center justify-center"
                            data-wow-delay="0.5s">
                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">FOOD MENU<img class="ms-1"
                                src="assets/img/icon/titleIcon.svg" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            Chatha Foods Menu
                        </h2>
                    </div>


                    <div class="food-menu-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-FastFood-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-FastFood" type="button" role="tab"
                                    aria-controls="pills-FastFood" aria-selected="true"><img
                                        class="h-10 w-10 rounded-full"
                                        src="http://cfpl.net.in/images/CHICKEN-FRIES-1.jpg" alt="icon">Snacks</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-drinkJuice-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-drinkJuice" type="button" role="tab"
                                    aria-controls="pills-drinkJuice" aria-selected="false"><img
                                        class="h-10 w-10 rounded-full"
                                        src="http://cfpl.net.in/images/CHICKEN-PATTY-1.jpg" alt="icon">Patties</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-chickenPizza-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-chickenPizza" type="button" role="tab"
                                    aria-controls="pills-chickenPizza" aria-selected="false"><img
                                        class="h-10 w-10 rounded-full" src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg"
                                        alt="icon">Sausages</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-freshPasta-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-freshPasta" type="button" role="tab"
                                    aria-controls="pills-freshPasta" aria-selected="false"><img
                                        class="h-10 w-10 rounded-full"
                                        src="http://cfpl.net.in/images/CHICKEN-RASHERS-SMOKED-1.jpg" alt="icon">Cold
                                    Cuts</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-FastFood" role="tabpanel"
                                aria-labelledby="pills-FastFood-tab" tabindex="0">
                                <div class="row gx-60">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SPICY-CHICKEN-TENDERS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">SPICY CHICKEN TENDERS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN NUGGETS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BREAST-NUGGETS-2.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BREAST NUGGETS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN WINGS - SPICY
                                                            & SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BURGER PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">OVAL SHAPED PATTY</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">MUTTON PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg" alt="thumb">
                                                </div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN FRANKS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-RASHERS-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN RASHERS -
                                                            SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-drinkJuice" role="tabpanel"
                                aria-labelledby="pills-drinkJuice-tab" tabindex="0">
                                <div class="row gx-60">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SPICY-CHICKEN-TENDERS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">SPICY CHICKEN TENDERS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN NUGGETS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BREAST-NUGGETS-2.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BREAST NUGGETS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN WINGS - SPICY
                                                            & SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BURGER PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">OVAL SHAPED PATTY</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">MUTTON PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg" alt="thumb">
                                                </div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN FRANKS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-RASHERS-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN RASHERS -
                                                            SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-chickenPizza" role="tabpanel"
                                aria-labelledby="pills-chickenPizza-tab" tabindex="0">
                                <div class="row gx-60">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SPICY-CHICKEN-TENDERS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">SPICY CHICKEN TENDERS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN NUGGETS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BREAST-NUGGETS-2.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BREAST NUGGETS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN WINGS - SPICY
                                                            & SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BURGER PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">OVAL SHAPED PATTY</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">MUTTON PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg" alt="thumb">
                                                </div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN FRANKS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-RASHERS-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN RASHERS -
                                                            SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-freshPasta" role="tabpanel"
                                aria-labelledby="pills-freshPasta-tab" tabindex="0">
                                <div class="row gx-60">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SPICY-CHICKEN-TENDERS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">SPICY CHICKEN TENDERS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN NUGGETS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BREAST-NUGGETS-2.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BREAST NUGGETS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN WINGS - SPICY
                                                            & SMOKED</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN BURGER PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">OVAL SHAPED PATTY</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">MUTTON PAPRIKA PATTY
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg" alt="thumb">
                                                </div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN FRANKS</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        class="h-20 w-20 rounded-full object-cover"
                                                        src="http://cfpl.net.in/images/CHICKEN-RASHERS-SMOKED-1.jpg"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.php">
                                                        <h3 class="text-black hover:text-red-500">CHICKEN RASHERS -
                                                            SMOKED</h3>
                                                    </a>
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

    <!-- Cta section  S T A R T -->
    <section class="cta-section fix">
        <div class="cta-wrapper style1  section-padding">
            <div class="shape1 float-bob-x d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_1.png" alt="shape">
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_2.png" alt="shape">
            </div>
            <div class="shape3 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_3.png" alt="shape">
            </div>
            <div
                class=" px-6 sm:px-12 lg:px-24 text-center shadow-md rounded-lg flex flex-col gap-4 items-center justify-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Premium Frozen Foods, Crafted with Care
                </h2>
                <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10">
                    Since 1997, Chatha Foods has been a trusted name in India's frozen food industry, delivering
                    high-quality, ready-to-eat meat and vegetarian products to leading QSRs and HoReCa partners
                    nationwide.
                </p>
                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <a class="theme-btn" href="menu.php">GET STARTED<i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>

    <div class="slider-area p-4 md:p-0 md:pt-5 wow fadeInUp bg-white md:bg-none" data-wow-delay="0.5s">
        <div class="swiper clientSliderOne">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/dominos-pizza.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/ccd.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/burger-king.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/subway.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/roll-xpress.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/nik-bakers.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/burger-farm.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/ihop.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/pizzeria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/burgrill.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/cafe-chocolicious.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/cafeteria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/cafeteria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32" src="https://www.cfpl.net.in/images/chills.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>

</body>

</html>