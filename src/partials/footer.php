<?php include 'db.php' ?>
<!-- Footer Section    S T A R T -->
<footer class="footer-section bg-title fix" style="background-color:white; color:black">
    <div class="footer-widgets-wrapper">
        <div class="shape1 float-bob-y d-none d-xxl-block"><img class="h-40" src="assets/img/dishes/n1.png"
                alt="shape"></div>
        <div class="shape2 d-none d-xxl-block"><img src="assets/img/shape/footerShape1_2.png" alt="shape"></div>
        <div class="shape3 d-none d-xxl-block"><img src="assets/img/shape/footerShape1_3.png" alt="shape"></div>
        <div class="shape4  d-none d-xxl-block"><img src="assets/img/shape/footerShape1_4.png" alt="shape"></div>
        <div class="container">
            <div class="footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="fancy-box">
                            <div class="item1"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="item2">
                                <h6>address</h6>
                                <p style="font-size: 14px; line-height: 20px;">Village Chaundheri, P.O. Dapper,
                                    Chandigarh - Ambala Highway,
                                    Distt. SAS Nagar, Punjab 140 506, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                        <div class="fancy-box">
                            <div class="item1"><i class="fa-solid fa-envelope"></i></div>
                            <div class="item2">
                                <h6>send email</h6>
                                <p style="font-size: 14px; line-height: 20px;">infochathafoods@cfpl.net.in</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                        <div class="fancy-box">
                            <div class="item1"><i class="fa-regular fa-phone-volume"></i></div>
                            <div class="item2">
                                <h6>call emergency</h6>
                                <p style="font-size: 14px; line-height: 20px; color: white;">+91-1762-506711</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="index.php">
                                <img src="assets/img/icon/chattalogo.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Since 1997, Chatha Foods has been a trusted name in India's frozen food industry, delivering high-quality, ready-to-eat meat and vegetarian products to leading QSRs and HoReCa partners nationwide.
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/chathafoods.official" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/chathafoods.official/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/chatha-foods/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-area">

                            <li>
                                <a href="quality-assurance.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Quality Assurance
                                </a>
                            </li>
                            <li>
                                <a href="process-and-infrastructure.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Process and Infrastructure
                                </a>
                            </li>
                            <li>
                                <a href="products.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="investors.php">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Investors
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Our Menu</h3>
                        </div>
                        <ul class="list-area">
                            <?php
                            $stmt = $pdo->query("SELECT name, category_slug FROM menu_item_categories");
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <li>
                                    <a href="category.php?slug=<?= urlencode($row['category_slug']) ?>">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        <?= htmlspecialchars($row['name']) ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>
                        <ul class="list-area">
                            <li class="mb-2">
                                Monday – Friday: <span class="text-theme-color2"> 8am – 4pm </span>
                            </li>
                            <li>
                                Saturday: <span class="text-theme-color2"> 8am – 12am </span>
                            </li>
                        </ul>
                        <form action="#" class="mt-4">
                            <div class="form-control" style="gap:0">
                                <input class="email" style="border: 2px solid red;border-right: none; border-end-start-radius: 10px; padding: 0.5rem; padding-left: 1rem" type="email" placeholder="Your email address">
                                <button type="submit" class="submit-btn" style="margin-left: -5px;"><i
                                        class="fa-solid fa-arrow-right-long"></i></button>
                            </div>
                            <div class="form-control style2 mt-3">
                                <input id="checkbox" name="checkbox" type="checkbox">
                                <label for="checkbox">I agree to the <a href="contact.php">Privacy Policy.
                                    </a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2025 by <a href="index.php">Chatha Foods</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a class="text-white" href="contact.php">
                            Terms & Condition
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="contact.php">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>