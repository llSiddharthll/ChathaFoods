<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<?php $title = 'Chatha Foods' ?>
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



    <?php
    $mainTitle = 'Our Story';
    $Title = 'Home';
    $Title2 = 'Our Story';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
        <!-- Background Image -->
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover relative" style="background-position: bottom; background-image: url('./assets/img/banner/CF Factory-2.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Content -->
            <div class="container relative z-10">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content text-white">
                            <?php if (!empty($mainTitle)) : ?>
                                <h1 class="breadcumb-title text-white"><?php echo $mainTitle; ?></h1>
                            <?php endif; ?>
                            <ul class="breadcumb-menu flex gap-2">
                                <?php if (!empty($Title)) : ?>
                                    <li><a href="index.php" class="text-white"><?php echo $Title; ?></a></li>
                                <?php endif; ?>
                                <li class="text-white">/</li>
                                <?php if (!empty($Title2)) : ?>
                                    <li class="active text-red-500"><?php echo $Title2; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="py-10 md:py-20">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-20 container mx-auto  pb-20">

            <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-4 items-center justify-center mb-4">
                    <img class="h-20 w-20" src="./assets/img/icon/b1.png" alt="">
                    <h3 class="text-center" style="color: red; font-size: xx-large">Our Resolve</h3>
                </div>
                <h3 class="mb-2" style="font-size: larger">Premium Quality</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    We began our journey in 1998. At that time, frozen foods had already entered the Indian market. However, the healthiness of these, especially that of processed meat, was often questioned in most Indian households. We saw these doubts as a challenge, and prior to any other plans, drafted a firm resolve; producing premium quality processed meat products with no room for compromise.
                </p>
            </div>

            <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-4 items-center justify-center mb-4">
                    <img class="h-20 w-20" src="./assets/img/icon/b2.png" alt="">
                    <h3 class="text-center" style="color: red; font-size: xx-large">Our Journey</h3>
                </div>
                <h3 class="mb-2" style="font-size: larger">Modern Machinery</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    All our further steps reflected our mantra. We brought in raw material only from the approved suppliers. Next, the most hygienic and hi-tech machinery was imported, and our plant was born. Batch after batch, we only got better. The plant that generated only a few chicken products at the time of its initiation, over time, evolved into one producing around 70-80 premium meat products.
                </p>
            </div>

            <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-4 items-center justify-center mb-4">
                    <img class="h-20 w-20" src="./assets/img/icon/b3.png" alt="">
                    <h3 class="text-center" style="color: red; font-size: xx-large">Our Approach</h3>
                </div>
                <h3 class="mb-2" style="font-size: larger">Customer Centricity</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Apart from quality assurance, developing strong customer relationships, through a partnership approach, has always been a top priority for us. And consequently, today, we are associated with various international food chains as well as several local QSRs. We were operational from 1998 (post incorporation in 1997) and owing to the aim and principles with which we had started, we soon transformed ourselves into a recognized and trusted brand name in the field. And the rest, as they say, is history.
                </p>
            </div>
        </div>
    </section>


    <section class="pb-10 md:pb-20">
        <div class="about-wrapper style2">
            <div class="shape1 d-none d-xxl-block"><img src="assets/img/shape/aboutShape2_1.png" alt="shape"></div>
            <div class="container">
                <div class="about-us py-10">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-xl-start">
                            <div class="about-thumb mb-5 mb-lg-0">
                                <img src="	https://gramentheme.com/html/fresheat/assets/img/about/aboutThumb2_1.png" alt="thumb">
                                <div class="video-wrap">
                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                        class="play-btn popup-video"><img class="cir36"
                                            src="assets/img/shape/player.svg" alt="icon"></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="title-area">
                                <div class="sub-title text-start wow fadeInUp flex gap-2 items-center" data-wow-delay="0.5s">
                                    <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">About US<img
                                        class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon">
                                </div>
                                <h2 class="title text-start wow fadeInUp" data-wow-delay="0.7s">
                                    With Chatha Foods, you are in good hands !
                                </h2>
                                <div class="text text-start wow fadeInUp" data-wow-delay="0.8s">From our inception, the aim in mind was to produce premium quality processed meat products, using cutting-edge technology and with no room for compromises. Owing to this belief, with which we started in 1997 and having forged into the vegetarian segment as of 2023, we are presently one of India’s leading frozen and ready-to-eat processed products manufacturer.</div>
                            </div>
                            <div class="fancy-box-wrapper">
                                <div class="fancy-box">
                                    <div class="item"><img class="h-10 object-contain w-full" src="assets/img/icon/a1.png" alt="icon"></div>
                                    <div class="item">
                                        <h6>super quality food</h6>
                                        <p>Served our Testy Food & good food by friendly</p>
                                    </div>
                                </div>
                                <div class="fancy-box">
                                    <div class="item"><img class="h-10 object-contain w-full" src="assets/img/icon/a2.png" alt="icon"></div>
                                    <div class="item">
                                        <h6>Best Machinery</h6>
                                        <p>Our latest machines will deliver you the best</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marquee-wrapper style-1 text-slider mt-12 md:mt-24">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider category text-style" data-target="#pills-snacks">SNACKS</span>
                        <span class="text-slider category text-style" data-target="#pills-patties">PATTIES</span>
                        <span class="text-slider category text-style" data-target="#pills-sausages">SAUSAGES</span>
                        <span class="text-slider category text-style" data-target="#pills-cold_cuts">COLD CUTS</span>
                        <span class="text-slider category text-style" data-target="#pills-toppings">TOPPINGS</span>
                        <span class="text-slider category text-style" data-target="#pills-others">OTHERS</span>
                        <span class="text-slider category text-style" data-target="#pills-snacks">SNACKS</span>
                        <span class="text-slider category text-style" data-target="#pills-patties">PATTIES</span>
                        <span class="text-slider category text-style" data-target="#pills-sausages">SAUSAGES</span>
                        <span class="text-slider category text-style" data-target="#pills-cold_cuts">COLD CUTS</span>
                        <span class="text-slider category text-style" data-target="#pills-toppings">TOPPINGS</span>
                        <span class="text-slider category text-style" data-target="#pills-others">OTHERS</span>
                        <span class="text-slider category text-style" data-target="#pills-snacks">SNACKS</span>
                        <span class="text-slider category text-style" data-target="#pills-patties">PATTIES</span>
                        <span class="text-slider category text-style" data-target="#pills-sausages">SAUSAGES</span>
                        <span class="text-slider category text-style" data-target="#pills-cold_cuts">COLD CUTS</span>
                        <span class="text-slider category text-style" data-target="#pills-toppings">TOPPINGS</span>
                        <span class="text-slider category text-style" data-target="#pills-others">OTHERS</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="pb-10 md:pb-20">
        <div class="chefe-details-section">
            <div class="container">
                <div class="row gy-5 gx-60">
                    <div class="col-xl-6">
                        <div class="">
                            <img class="h-[80vh] w-full border-[1px] border-gray-400 object-contain object-right pt-10" src="https://www.cfpl.net.in/images/director.png" alt="chefThumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="chefe-details-wrapper style1">
                            <h2 style="font-weight: normal;">Paramjit Singh Chatha</h2>
                            <h6>(Managing Director, Chatha Foods Limited)</h6>
                            <p>Message from the Managing Director <br>
                                I owe it all to my team! <br>
                                Looking back at our early days, I am filled with pride and gratitude.
                                The challenges we faced, the struggles we endured, and the perseverance of our team are what has made Chatha Foods what it is today. Without the hard work, determination, and never-give-up spirit of all the members in team Chatha Foods, we would not have achieved the success we enjoy today. From a compact facility producing a limited range of meat products to now managing a high-capacity plant offering over 70 premium food products, for both non-vegetarian and vegetarian options, our journey has been one of innovation and growth.
                                Our commitment to research and development, along with product engineering, keeps us at the forefront of the industry. Rigorous quality control and operational efficiency ensure that we continue to deliver excellence in every batch. Today, Chatha Foods is recognized as one of the most sought-after food manufacturers in India and I feel grateful to the wonderful people working behind the scenes.
                                I wish the very best to my team and look forward to an 'encore' ! in the coming years.
                            </p>

                            <div class="follow-area">
                                <h5 class="mb-3" style="font-weight: normal;"> Follow on </h5>
                                <ul class="social-media">
                                    <li> <a href="https://www.facebook.com/chathafoods.official" target="_blank"> <i class="fa-brands fa-facebook-f"></i> </a>
                                    </li>
                                    <li> <a href="https://www.linkedin.com/company/chatha-foods/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a> </li>
                                    <li> <a href="https://www.instagram.com/chathafoods.official/" target="_blank"> <i class="fa-brands fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-10 md:pb-20">
        <div class="services-section style1">
            <div class="title-area pb-10">
                <div class="sub-title text-center wow fadeInUp flex gap-2 items-center justify-center"
                    data-wow-delay="0.5s">
                    <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">Our Ambition<img class="ms-1"
                        src="assets/img/icon/titleIcon.svg" alt="icon">
                </div>
                <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                    Future Outlook
                </h2>
            </div>

            <div class="services-wrapper style2">
                <div class="container">
                    <div class="row gy-5 gx-30">
                        <div class="col-lg-4">
                            <div class="services-card style2">
                                <div class="services-card_icon">
                                    <img src="assets/img/icon/servicesIcon1_1.png" alt="icon">
                                </div>
                                <h4 class="services-card_title">
                                    <span class="text-gray-500">New Times, New Products</span>
                                </h4>
                                <p class="services-card_text">Updated information to be shared soon</p>
                                <div class="shape1"><img src="assets/img/shape/servicesShape1_1.png" alt="shape"></div>
                                <div class="shape2"><img src="assets/img/shape/servicesShape1_2.png" alt="shape"></div>
                                <div class="shape3"><img src="assets/img/shape/servicesShape1_3.png" alt="shape"></div>
                                <div class="shape4"><img src="assets/img/shape/servicesShape1_4.png" alt="shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-card style2">
                                <div class="services-card_icon">
                                    <img src="assets/img/icon/servicesIcon1_2.png" alt="icon">
                                </div>
                                <h4 class="services-card_title">
                                    <span class="text-gray-500">Distribution Dynamics</span>
                                </h4>
                                <p class="services-card_text">Updated information to be shared soon</p>
                                <div class="shape1"><img src="assets/img/shape/servicesShape1_1.png" alt="shape"></div>
                                <div class="shape2"><img src="assets/img/shape/servicesShape1_2.png" alt="shape"></div>
                                <div class="shape3"><img src="assets/img/shape/servicesShape1_3.png" alt="shape"></div>
                                <div class="shape4"><img src="assets/img/shape/servicesShape1_4.png" alt="shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-card style2">
                                <div class="services-card_icon">
                                    <img src="assets/img/icon/servicesIcon1_3.png" alt="icon">
                                </div>
                                <h4 class="services-card_title">
                                    <span class="text-gray-500">Ample Supply</span>
                                </h4>
                                <p class="services-card_text">Updated information to be shared soon</p>
                                <div class="shape1"><img src="assets/img/shape/servicesShape1_1.png" alt="shape"></div>
                                <div class="shape2"><img src="assets/img/shape/servicesShape1_2.png" alt="shape"></div>
                                <div class="shape3"><img src="assets/img/shape/servicesShape1_3.png" alt="shape"></div>
                                <div class="shape4"><img src="assets/img/shape/servicesShape1_4.png" alt="shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-card style2">
                                <div class="services-card_icon">
                                    <img src="assets/img/icon/servicesIcon1_4.png" alt="icon">
                                </div>
                                <h4 class="services-card_title">
                                    <span class="text-gray-500">Revenue Rise</span>
                                </h4>
                                <p class="services-card_text">Updated information to be shared soon</p>
                                <div class="shape1"><img src="assets/img/shape/servicesShape1_1.png" alt="shape"></div>
                                <div class="shape2"><img src="assets/img/shape/servicesShape1_2.png" alt="shape"></div>
                                <div class="shape3"><img src="assets/img/shape/servicesShape1_3.png" alt="shape"></div>
                                <div class="shape4"><img src="assets/img/shape/servicesShape1_4.png" alt="shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-card style2">
                                <div class="services-card_icon">
                                    <img src="assets/img/icon/servicesIcon1_5.png" alt="icon">
                                </div>
                                <h4 class="services-card_title">
                                    <span class="text-gray-500">Export Extravaganza</span>
                                </h4>
                                <p class="services-card_text">Updated information to be shared soon</p>
                                <div class="shape1"><img src="assets/img/shape/servicesShape1_1.png" alt="shape"></div>
                                <div class="shape2"><img src="assets/img/shape/servicesShape1_2.png" alt="shape"></div>
                                <div class="shape3"><img src="assets/img/shape/servicesShape1_3.png" alt="shape"></div>
                                <div class="shape4"><img src="assets/img/shape/servicesShape1_4.png" alt="shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>



</body>

</html>