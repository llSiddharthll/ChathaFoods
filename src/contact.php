<!DOCTYPE html>
<html lang="zxx">
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

  <!-- Breadcumb Section   S T A R T -->

  <?php
  $mainTitle = 'Contact us';
  $Title = 'Home';
  $Title2 = 'Contact us';
  ?>
  <?php include './partials/page-header.php' ?>


  <!-- Contact Us Section START -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

        <!-- Address 1 -->
        <div class="text-center p-6 border rounded shadow-sm bg-gray-50 h-full">
          <div class="mb-4">
            <img src="assets/img/icon/location.png" alt="Location Icon" class="mx-auto h-10">
          </div>
          <h5 class="text-lg font-semibold mb-2">Address (Unit I)</h5>
          <p class="text-gray-600 text-sm leading-relaxed">
            Chatha Foods Limited<br>
            Village Chaundheri, P.O. Dapper,<br>
            Chandigarh - Ambala Highway,<br>
            Distt. SAS Nagar,<br> Punjab 140 506, India
          </p>
        </div>

        <!-- Address 2 -->
        <div class="text-center p-6 border rounded shadow-sm bg-gray-50 h-full">
          <div class="mb-4">
            <img src="assets/img/icon/location.png" alt="Location Icon" class="mx-auto h-10">
          </div>
          <h5 class="text-lg font-semibold mb-2">Address (Unit II)</h5>
          <p class="text-gray-600 text-sm leading-relaxed">
            Hadbast No. 206, Village Toffanpur, Tehsil Dera Bassi, Distt- SAS Nagar,
            Punjab, India, 140506
          </p>
        </div>

        <!-- Email -->
        <div class="text-center p-6 border rounded shadow-sm bg-gray-50 h-full">
          <div class="mb-4">
            <img src="assets/img/icon/gmail.png" alt="Email Icon" class="mx-auto h-10">
          </div>
          <h5 class="text-lg font-semibold mb-2">Email Us</h5>
          <p class="text-gray-800 text-sm font-medium">
            <a style="color: #00000098;" href="mailto:infochathafoods@cfpl.net.in" class="hover:underline">
              infochathafoods@cfpl.net.in
            </a>
          </p>
          <p class="text-gray-600 text-sm mt-1">We respond to all queries promptly.</p>
        </div>

        <!-- Phone -->
        <div class="text-center p-6 border rounded shadow-sm bg-gray-50 h-full">
          <div class="mb-4">
            <img src="assets/img/icon/phone.png" alt="Phone Icon" class="mx-auto h-10">
          </div>
          <h5 class="text-lg font-semibold mb-2">Call Us</h5>
          <p class="text-gray-800 text-sm font-semibold">+91-1762-506711</p>
          <p class="text-gray-600 text-sm mt-1">24/7 support via phone or chat.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- Contact Us Section END -->


  <!-- Contact Form Section    S T A R T -->
  <div class="contact-form-section py-10">
    <div class="contact-form-wrapper style2">
      <div class="container">
        <div class="row gx-60 gy-5">
          <div class="col-xl-6">
            <div class="contact-form-thumb">
              <img src="https://gramentheme.com/html/fresheat/assets/img/contact/contactThumb2_1.png" alt="thumb">
            </div>
          </div>
          <div class="col-xl-6">
            <div class="contact-form style2">
              <h2 class="" style="font-weight: normal;">Get in Touch</h2>
              <form class="row" id="contact-form" action="mailer.php" method="POST">
                <div class="col-md-6">
                  <input type="text" name="name" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="col-md-6">
                  <input type="number" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-md-6">
                  <input type="text" name="subject" placeholder="Subject">
                </div>
                <div class="col-12">
                  <textarea class="border-[2px] border-black/10 rounded-md p-2 w-full" id="message" name="message" class="form-control" placeholder="Write your message here..."
                    rows="5"></textarea>
                </div>
                <div class="col-12 form-group">
                  <input id="reviewcheck" name="reviewcheck" type="checkbox">
                  <label for="reviewcheck">Collaboratively formulate principle capital. Progressively
                    evolve user<span class="checkmark"></span></label>
                </div>
                <div class="col-12 form-group mb-0">
                  <button type="submit" class="theme-btn w-100">SUBMIT NOW <i
                      class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                </div>
              </form>
              <div id="form-messages"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Map Section    S T A R T -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.356006643708!2d76.82110567540954!3d30.51097087469203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc103e1bb608b%3A0x361ee379fba03376!2sChatha%20Foods%20Limited!5e0!3m2!1sen!2sin!4v1749555385817!5m2!1sen!2sin" height="550" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!-- Footer Section Start -->
  <?php include './partials/footer.php' ?>

  <!-- all js files -->
  <?php include './partials/script.php' ?>
</body>

</html>