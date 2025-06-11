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
  $mainTitle = 'Quality Assurance';
  $Title = 'Home';
  $Title2 = 'Quality Assurance';
  ?>
  <div class="breadcumb-section relative group overflow-hidden">
    <!-- Background Image -->
    <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url(https://www.cfpl.net.in/images/qa-slide.jpg);">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>

      <!-- Content -->
      <div class="container relative z-10">
        <div class="row">
          <div class="col-12">
            <div class="breadcumb-content text-white">
              <?php if (!empty($mainTitle)) : ?>
                <h3 class="breadcumb-title text-white"><?php echo $mainTitle; ?></h3>
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
          Quality Assurance
        </span>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
          Producing great food is our <span class="text-red-600">passion</span> &amp; safe food our determination.
        </h2>
        <p class="text-lg text-gray-600 leading-relaxed">
          Our Food Safety &amp; Quality Assurance Team is involved at every stage — procurement, production,
          packaging, and dispatch. Through proactive maintenance and control systems, we ensure full compliance
          with safety certifications while honoring our commitment to clean, safe, and trustworthy food.
        </p>
      </div>

      <!-- Image Gallery -->
      <div class="order-1 lg:order-2 flex flex-col md:flex-row lg:flex-col gap-6 animate-fadeIn delay-100" data-aos="fade-right">
        <img src="https://www.cfpl.net.in/images/qa-2.jpg" alt="QA Image 1"
          class="w-full rounded-2xl shadow-lg object-cover aspect-video transition-transform duration-300 hover:scale-105">
        <img src="https://www.cfpl.net.in/images/qa-1.jpg" alt="QA Image 2"
          class="w-full rounded-2xl shadow-lg object-cover aspect-video transition-transform duration-300 hover:scale-105">
      </div>

    </div>
  </section>



  <section class="bg-[#fff8f6] py-20 px-4">
    <div class="max-w-7xl mx-auto text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900">Chatha Foods Commitment</h2>
      <p class="text-gray-600 mt-3 text-lg">Ensuring quality and safety through every stage of our process</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="100">
        <!-- Icon -->
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q1.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Raw Material</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Starting at level zero, raw material is procured only from the approved suppliers, who deliver every order with a health certificate declaring that the material is free from antibiotics and diseases as required, and is absolutely fit for human consumption.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q2.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Hygiene</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Following a detailed maintenance & hygiene standard operating procedure, based on global standards, in regard to the upkeep of the plant is strictly enforced and undertaken on a regular basis. Strict personal hygiene and protective gear is mandated for all personnel in the plant.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="300">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q3.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Water</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          A double RO system has been installed to ensure that the water/ice used in the products is free from any kind of contamination. The effectiveness of the RO is evaluated daily. Additionally, water pipelines have been colour-coded for easy identification and maintenance.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q4.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Maintenance</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          A highly skilled & trained maintenance team, present at all times at the plant, ensures the smooth functioning of the plant and undertakes preventive maintenance periodically.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="500">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q5.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Prevention of Contamination</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          A thorough waste management procedure is in place that categorises wastes into biodegradable, non-biodegradables, metal scraps, used media from the lab, etc..
          A physical segregation has been done to separate the high care & the low care areas. High care areas are operated under a controlled temperature of 8 -10º C & processing areas, including raw meat inspection areas, are operated under temperatures below 12 - 15º C at all times.

        </p>
      </div>

      <!-- Card 6 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="600">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q6.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Pest Prevention</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          A daily inspection of pest activity inside & outside the plant is outsourced to PCI (Pest Control of India). A thorough quarterly audit and trend analysis, for continual improvement, is carried out with the PCI team.
        </p>
      </div>

      <!-- Card 7 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="700">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q7.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Sensible Storage</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          The storage system for raw material is designed in such a way that the food and
          non-food ingredients; allergens and non-allergen materials, all stand segregated. Also, chemicals used for cleaning are stored separately in a segregated area, and restricted for use by authorized personnel only.

        </p>
      </div>

      <!-- Card 8 -->
      <div class="bg-white shadow-lg rounded-2xl p-6 border-t-4 border-red-600 text-center" data-aos="fade-up" data-aos-delay="800">
        <div class="flex justify-center mb-4">
          <img class="h-10 w-10" src="./assets/img/icon/q8.png" alt="">
        </div>
        <h3 class="text-xl font-semibold text-red-600 mb-2" style="font-weight: 600;">Crisis Management Plan</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Mock drills, fire safety audits, first-aid trainings, etc., are carried out at least once a year and a site security check-list is maintained to ensure a secured premises, that is correlated & inspected once every month.
          Visitors, contractors & all employees are monitored and their entry – exist is documented & maintained at every entry and exit point.

        </p>
      </div>

    </div>
  </section>


  <section class="cta-section fix">
    <div class="cta-wrapper style1 section-padding">
      <!-- Decorative Shapes -->
      <div class="shape1 float-bob-x d-none d-xxl-block">
        <img src="assets/img/shape/ctaShape1_1.png" alt="shape">
      </div>
      <div class="shape2 float-bob-y d-none d-xxl-block">
        <img src="assets/img/shape/ctaShape1_2.png" alt="shape">
      </div>
      <div class="shape3 float-bob-y d-none d-xxl-block">
        <img src="assets/img/shape/ctaShape1_3.png" alt="shape">
      </div>

      <!-- CTA Content -->
      <div class="px-6 sm:px-12 lg:px-24 text-center shadow-md rounded-lg flex flex-col gap-4 items-center justify-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
          Food Safety First, Excellence Always
        </h2>
        <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10">
          Our unwavering commitment to hygiene and food safety is recognized by industry-leading certifications.
          Discover the accolades and standards that reflect our dedication to delivering safe and high-quality frozen foods.
        </p>
        <div class="btn-wrapper wow fadeInUp" style="max-width: fit-content;" data-wow-delay="0.9s">
          <a class="theme-btn" href="accolades.php">View Certifications <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
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