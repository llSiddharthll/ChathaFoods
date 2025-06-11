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
    $mainTitle = 'Customization Pro';
    $Title = 'Home';
    $Title2 = 'Customization Pro';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
        <!-- Background Image -->
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url('./assets/img/banner/CF Factory-2.jpg');">
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

    <section class="bg-gradient-to-b from-[#fff8f6] to-[#fff1ec] py-24 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Text Content -->
            <div class="order-2 lg:order-1 animate-fadeIn" data-aos="fade-left">
                <span class="inline-block mb-4 px-4 py-1 bg-red-100 text-red-600 font-medium text-xs rounded-full uppercase tracking-widest shadow-sm">
                    Customization Pro
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Innovation & Re-engineering is Our<span class="text-red-600"> Lifeline</span> !
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Since our inception, Chatha Foods has promoted R&D to be able to offer new and newer products to our ever-evolving customers. Today, our R&D team is our lifeline and has made us proud on many an occasion by developing new & newer products for the industry, specifically customized products for our customers.
                </p>
            </div>

            <!-- Image Gallery -->
            <div class="order-1 lg:order-2 flex flex-col md:flex-row lg:flex-col gap-6 animate-fadeIn delay-100" data-aos="fade-right">
                <img src="https://www.cfpl.net.in/images/processed-meat-products.jpg" alt="QA Image 1"
                    class="w-full rounded-2xl shadow-lg object-cover aspect-video transition-transform duration-300 hover:scale-105">
            </div>

        </div>
    </section>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: Research & Development Central -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-500">
                <div class="flex items-center mb-4">
                    <i class="text-3xl text-red-500 mr-3 fa-solid fa-book-open-reader"></i>
                    <h3 class="text-xl font-bold text-gray-800" style="font-weight: 600; font-size: larger">Research & Development Central</h3>
                </div>
                <p class="text-gray-600">
                    The R&D Division is extensively backed by the latest in technology and mini-batch manufacturing equipment from the best the world over. And this is by an expert and versatile team of food technologists with a never give-up attitude. In fact, it is this very team that breathes in excitement into Chatha Foods every day.
                </p>
            </div>

            <!-- Card 2: Support EcoSystem -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-500">
                <div class="flex items-center mb-4">
                    <i class="text-3xl text-red-500 mr-3 fa-solid fa-question"></i>
                    <h3 class="text-xl font-bold text-gray-800" style="font-weight: 600; font-size: larger">Support EcoSystem</h3>
                </div>
                <p class="text-gray-600">
                    Our Research & Development ecosystem is extensively supported by a chain of ingredient producers from & for every possible culinary niche, situated across the world. And, therefore every conceivable challenge in food innovation has a solution at our Research & Development Division.
                </p>
            </div>

            <!-- Card 3: Customization Track Record -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-500">
                <div class="flex items-center mb-4">
                    <i class="text-3xl text-red-500 mr-3 fa-solid fa-notes-medical"></i>
                    <h3 class="text-xl font-bold text-gray-800" style="font-weight: 600; font-size: larger">Customization Track Record</h3>
                </div>
                <p class="text-gray-600">
                    Over the last nearly 3 decades of our existence, Chatha Foods has serviced many a customer with our own innovative products as well as developed new ones or improvised upon their identified existing products. And owing to this track record, today, Chatha Foods is known as one of the most innovative, imaginative and customer-centric company in the food industry.
                </p>
            </div>
        </div>
    </div>

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
                    Just to enunciate our point, we are sharing the names of some of our valued customers here whom we serve with our products and services in this regard. 
                </p>
                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <a class="theme-btn" href="contact.php">Contact Us<i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
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