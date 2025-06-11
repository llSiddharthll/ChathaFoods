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
  $mainTitle = 'Process and Infrastructure';
  $Title = 'Home';
  $Title2 = 'Process and Infrastructure';
  ?>
  <div class="breadcumb-section relative group overflow-hidden">
    <!-- Background Image -->
    <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url(https://www.cfpl.net.in/images/slide-1-cf.jpg);">
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
    <div class="max-w-7xl mx-auto flex items-center">

      <!-- Text Content -->
      <div class="order-2 lg:order-1 animate-fadeIn" data-aos="fade-down">
        <span class="inline-block mb-4 px-4 py-1 bg-red-100 text-red-600 font-medium text-xs rounded-full uppercase tracking-widest shadow-sm">
          Process and Infrastructure
        </span>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
          Transforming raw meat into <span class="text-red-600">crafted</span> delicacies !
        </h2>
        <p class="text-lg text-gray-600 leading-relaxed">
          Our plant is home to the most sophisticated & innovative infrastructure from the best local & global technology providers and applies the best processes that the world practices.
          While keeping true to our resolve, this state-of-the-art plant is continuously upgraded that keeps us at the forefront of the industry.

        </p>
      </div>

    </div>
  </section>


  <section class="bg-white py-20 px-4 md:px-10 lg:px-16">
    <div class="max-w-7xl mx-auto text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">
        Our Food Processing Journey
      </h2>
      <p class="text-lg text-gray-600">
        Discover the precision and care that go into every stage of our production process.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 container mx-auto">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/new-raw-material-section-chatha-foods.jpg" alt="Raw Material Section"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Raw Material Section</h3>
          <p class="text-gray-600 text-sm">
            Raw meat procured from trusted suppliers arrives here for the first round of refining and checks.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/cleaning-section-chatha-foods.jpg" alt="Curing and Marinating Section"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Curing & Marinating Section</h3>
          <p class="text-gray-600 text-sm">
            Injectors cure and marinate the meat here, forming the first stage of flavor development.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/tumbler-section-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Vacuum Tumblers</h3>
          <p class="text-gray-600 text-sm">
            Tumblers rotate meat at precise speeds and times to ensure thorough marination and texture.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/chopping-and-mincer-section-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Chopping & Mincing Section</h3>
          <p class="text-gray-600 text-sm">
            Top-notch equipment at our Mincing & Emulsifying Section helps us produce fine, emulsified meat, which is then used to create products like sausages and salamis.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/vaccum-filler-machine-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Vacuum Filler Machine</h3>
          <p class="text-gray-600 text-sm">
            For products like sausages and salami rolls, the Vacuum Filler Machine plays a big part. Emulsified meat is filled into different types of casings, to form these products, using this machine.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/rcb-line-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Forming Line for Gourmet Customised Products</h3>
          <p class="text-gray-600 text-sm">
            A Forming machine is installed for the creation of our gourmet products. A shift from the typically machine-like production, this forming line provides a hand-made and home-made touch, with a step-by-step, customised and individualised process of creation.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/retort-machine-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Retort Machine</h3>
          <p class="text-gray-600 text-sm">
            Meat is packed into high-quality multi-layered barrier films under vacuum. These packets are then subjected to a temperature of 121℃ in our Retort Machine, which helps preserve the meat’s quality and maintain its shelf life.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/cooking-section-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Cooking Section</h3>
          <p class="text-gray-600 text-sm">
            We pride ourselves with having first-rate cooking equipment, with the most sophisticated ovens and smokehouses installed. These help us cook the meat to the core, without any loss of taste, moistness or tenderness.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/rational-oven-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Rational Oven</h3>
          <p class="text-gray-600 text-sm">
            Here we can see the Rational Oven being operated, preparing delicious meat delicacies.
          </p>
        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/frying-section-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Frying Section</h3>
          <p class="text-gray-600 text-sm">
            Many of our products need to be fried for which they are sent to our well-equipped Frying Section.
          </p>
        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/dicing-machine-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Dicing Machine</h3>
          <p class="text-gray-600 text-sm">
            As we provide ingredients to the leading fast-food chains in India, like Domino's, we have to produce customized dices of chicken. For this, our efficient Dicing Machine comes into play.
          </p>
        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/cutting-machine-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Automatic Slicers</h3>
          <p class="text-gray-600 text-sm">
            In order to cut gigantic rolls of salami into thin, circular slices of tasty meat, we make use of our automatic slicers, that swiftly and proficiently carry out the task.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/packaging-section.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Packaging Section</h3>
          <p class="text-gray-600 text-sm">
            Next to producing, the most important part of the process is packaging. All our finished products reach our well-organised Packaging Section, where they are vacuum-packed in multi-layered high-quality barrier films, creating finished packets of delectable meat products.
          </p>
        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md border-t-4 border-red-500 overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
        <img src="https://www.cfpl.net.in/images/metal-scanner-chatha-foods.jpg" alt="Vacuum Tumblers"
          class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-red-600 mb-2">Metal Scanner</h3>
          <p class="text-gray-600 text-sm">
            The entire process ends at the Metal Scanner, where all the packets undergo the scan to make sure that none of them contain any metallic impurity.
          </p>
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