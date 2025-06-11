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


    <section class="group relative h-screen overflow-hidden">
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 w-full h-full">
            <video
                autoplay
                loop
                muted
                playsinline
                preload="none"
                class="w-full h-full object-cover"
                poster="poster.jpeg">
                <source src="./v4.mp4" type="video/mp4" />
            </video>
        </div>
    </section>


    <section class="relative my-10 md:my-20">
        <div class="container mx-auto">
            <div class="absolute left-0 bottom-0 shape1 float-bob-y d-none d-xxl-block"><img
                    src="assets/img/shape/bestFoodItemsShape1_1.png" alt="shape"></div>
            <div class="absolute right-0 top-0 shape2 float-bob-x d-none d-xxl-block"><img
                    src="assets/img/shape/bestFoodItemsShape1_2.png" alt="shape"></div>
            <div class="flex flex-col gap-2 items-center justify-center">
                <div class="sub-title text-center wow fadeInUp flex items-center justify-center text-center"
                    data-wow-delay="0.5s">
                    <img class="me-2" src="assets/img/icon/titleIcon.svg" alt="icon">
                    <span class="text-red-500 font-bold uppercase">Best Food</span>
                    <img class="ms-2" src="assets/img/icon/titleIcon.svg" alt="icon">
                </div>
                <h2 class="title wow fadeInUp font-semibold" data-wow-delay="0.7s">
                    Popular Food Items
                </h2>
            </div>
            <div class="slider-area h-fit">
                <div class="swiper bestFoodItems-slider">
                    <div class="swiper-wrapper">
                        <?php
                        $stmt = $pdo->query("SELECT * FROM menu_items ORDER BY RAND() LIMIT 10");
                        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($items as $item):
                        ?>
                            <div class="swiper-slide">
                                <div class="single-food-items flex flex-col items-center justify-center h-auto" onclick='openModal(this)'
                                    data-title="<?= htmlspecialchars($item['title']) ?>"
                                    data-image="<?= htmlspecialchars($item['image_url']) ?>"
                                    data-intro="<?= htmlspecialchars($item['description_intro']) ?>"
                                    data-points='<?= htmlspecialchars(json_encode(json_decode($item["description_points"] ?? "[]"))) ?>'>
                                    <div class="relative flex items-center justify-center h-24 md:h-44 w-24 md:w-44">
                                        <img class="h-20 md:h-40 w-20 md:w-40 rounded-full" src="<?= htmlspecialchars($item['image_url']) ?>"
                                            alt="thumb">
                                        <div class="absolute top-0 right-0"><img class="cir36"
                                                src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <button>
                                            <h3 class="line-clamp-2 md:line-clamp-1"><?= htmlspecialchars($item['title']) ?></h3>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <div class="marquee-wrapper style-1 text-slider  my-10 md:my-20">
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

    <!-- Food Menu section S T A R T -->
    <section class="food-menu-section  my-10 md:my-20">
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

                    <?php
                    $stmt = $pdo->query("SELECT * FROM menu_item_categories");
                    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <div class="food-menu-tab">
                        <!-- Tabs -->
                        <ul class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 justify-items-center" style="margin-top: 2rem;" id="pills-tab" role="tablist">
                            <?php foreach ($categories as $index => $cat): ?>
                                <li class="nav-item" role="presentation">
                                    <button class="flex flex-col items-center  <?= $index === 0 ? 'active' : '' ?>"
                                        id="pills-<?= $cat['category_slug'] ?>-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-<?= $cat['category_slug'] ?>"
                                        type="button" role="tab"
                                        aria-controls="pills-<?= $cat['category_slug'] ?>"
                                        aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                                        <img class="h-20 w-20 rounded-full" src="<?= htmlspecialchars($cat['category_image']) ?>" alt="">
                                        <?= htmlspecialchars($cat['name']) ?>
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- Tab Contents -->
                        <div class="tab-content" id="pills-tabContent">
                            <?php foreach ($categories as $index => $cat): ?>
                                <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>"
                                    id="pills-<?= $cat['category_slug'] ?>" role="tabpanel"
                                    aria-labelledby="pills-<?= $cat['category_slug'] ?>-tab">

                                    <?php
                                    $stmt = $pdo->prepare("
                                        SELECT menu_items.*
                                        FROM menu_items
                                        JOIN menu_item_categories ON menu_items.category_id = menu_item_categories.id
                                        WHERE menu_item_categories.category_slug = :slug
                                    ");
                                    $stmt->execute(['slug' => $cat['category_slug']]);
                                    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    ?>

                                    <?php if (empty($items)): ?>
                                        <p class="text-center text-gray-500 mb-6">No items available in this category yet.</p>
                                    <?php else: ?>
                                        <?php
                                        $total = count($items);
                                        $half = ceil($total / 2);
                                        $leftItems = array_slice($items, 0, $half);
                                        $rightItems = array_slice($items, $half);
                                        ?>
                                        <div class="row gx-60 mb-8">
                                            <!-- Left Column -->
                                            <div class="col-lg-6">
                                                <?php foreach ($leftItems as $item): ?>
                                                    <button class="cursor-pointer" onclick='openModal(this)'
                                                        data-title="<?= htmlspecialchars($item['title']) ?>"
                                                        data-image="<?= htmlspecialchars($item['image_url']) ?>"
                                                        data-intro="<?= htmlspecialchars($item['description_intro']) ?>"
                                                        data-points='<?= htmlspecialchars(json_encode(json_decode($item["description_points"] ?? "[]"))) ?>'>
                                                        <div class="single-menu-items mb-4">
                                                            <div class="details flex items-start gap-4">
                                                                <div class="menu-item-thumb">
                                                                    <img class="min-h-20 min-w-20 h-20 w-20 rounded-full object-cover"
                                                                        src="<?= htmlspecialchars($item['image_url']) ?>" alt="thumb">
                                                                </div>
                                                                <div class="menu-content">
                                                                    <h3 class="text-black hover:text-red-500 text-start">
                                                                        <?= htmlspecialchars($item['title']) ?>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                <?php endforeach; ?>
                                            </div>

                                            <!-- Right Column -->
                                            <div class="col-lg-6">
                                                <?php foreach ($rightItems as $item): ?>
                                                    <button class="cursor-pointer" onclick='openModal(this)'
                                                        data-title="<?= htmlspecialchars($item['title']) ?>"
                                                        data-image="<?= htmlspecialchars($item['image_url']) ?>"
                                                        data-intro="<?= htmlspecialchars($item['description_intro']) ?>"
                                                        data-points='<?= htmlspecialchars(json_encode(json_decode($item["description_points"] ?? "[]"))) ?>'>
                                                        <div class="single-menu-items mb-4">
                                                            <div class="details flex items-start gap-4">
                                                                <div class="menu-item-thumb">
                                                                    <img class="min-h-20 min-w-20 h-20 w-20 rounded-full object-cover"
                                                                        src="<?= htmlspecialchars($item['image_url']) ?>" alt="thumb">
                                                                </div>
                                                                <div class="menu-content">
                                                                    <h3 class="text-black hover:text-red-500 text-start">
                                                                        <?= htmlspecialchars($item['title']) ?>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Menu section E N D -->


    <!-- Cta section  S T A R T -->
    <section class="my-10 md:my-20">
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
                    <a class="theme-btn" href="contact.php">GET STARTED<i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>

    <div class="slider-area wow fadeInUp bg-white md:bg-none h-fit p-4  my-10 md:my-20" data-wow-delay="0.5s">
        <div class="swiper clientSliderOne">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/dominos-pizza.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/ccd.png"
                            alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burger-king.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/subway.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/roll-xpress.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/nik-bakers.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burger-farm.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/ihop.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/pizzeria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burgrill.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/cafe-chocolicious.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/cafeteria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/chills.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include './partials/modal.php' ?>


    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>



</body>

</html>