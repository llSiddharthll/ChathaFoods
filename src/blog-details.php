<?php
include "db.php";
if (!isset($_GET['id'])) {
    header("Location: blogs.php");
    exit();
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->execute([$id]);
$blog = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$blog) {
    echo "Blog not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<?php $title = htmlspecialchars($blog['title']); ?>
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
    $mainTitle = 'Blog Details';
    $Title = 'Home';
    $Title2 = 'Blog Details';
    ?>
    <div class="breadcumb-section group overflow-hidden">
        <!-- Background Image -->
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url(https://gramentheme.com/html/fresheat/assets/img/bg/breadcumb.jpg);">
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


    <!-- Blog Details Section    S T A R T -->
    <div class="blog-details-section section-padding fix">
        <div class="container">
            <div class="blog-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb background-image"
                                    style="background-image: url(<?= htmlspecialchars($blog['image_url']) ?>);"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                                        <li>
                                            <i class="fa-light fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-tag"></i>
                                            Fast Food Services
                                        </li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">
                                        <?= htmlspecialchars($blog['title']) ?></h3>
                                    <p class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                                        <?= htmlspecialchars($blog['full_description']) ?>
                                    </p>
                                    <div class="hilight-text mt-4 mb-4 wow fadeInUp" data-wow-delay=".8s">
                                        <p><?= htmlspecialchars($blog['important']) ?>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 36 36" fill="none">
                                            <path
                                                d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z"
                                                stroke="#EB0029" />
                                            <path
                                                d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z"
                                                stroke="#EB0029" />
                                        </svg>
                                    </div>
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="1s">
                                        <?php if ($blog['image_1']): ?>
                                            <div class="col-lg-6">
                                                <div class="details-image">
                                                    <img src="<?= htmlspecialchars($blog['image_1']) ?>" alt="img">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($blog['image_2']): ?>
                                            <div class="col-lg-6">
                                                <div class="details-image">
                                                    <img src="<?= htmlspecialchars($blog['image_2']) ?>" alt="img">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <p class="pt-5 wow fadeInUp" data-wow-delay="1.2s">
                                        <?= htmlspecialchars($blog['short_description']) ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row tag-share-wrap mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        <h6 class="d-inline me-2">Tags: </h6>
                                        <a href="blog-details.php">News</a>
                                        <a class="active" href="blog-details.php">business</a>
                                        <a href="blog-details.php">marketing</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end wow fadeInUp"
                                    data-wow-delay="1.2s">
                                    <div class="social-share">
                                        <span class="me-3">Share:</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="comments-area wow fadeInUp" data-wow-delay="1.2s">
                                <div class="comments-heading">
                                    <h3>02 Comments</h3>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-30 pb-30">
                                    <div class="image">
                                        <img src="assets/img/blog/comment-author1.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="blog-details.php">Albert Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="btn">
                                                <a href="blog-details.php" class="reply">Reply</a>
                                            </div>
                                        </div>
                                        <p class="mt-10 mb-0">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-30 pb-30">
                                    <div class="image">
                                        <img src="assets/img/blog/comment-author2.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="blog-details.php">Alex Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="btn">
                                                <a href="blog-details.php" class="reply">Reply</a>
                                            </div>
                                        </div>
                                        <p class="mt-10 mb-0">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form-wrap pt-5 wow fadeInUp" data-wow-delay="1.2s">
                                <h3>Leave a comments</h3>
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                Post a Comment
                                                <i
                                                    class="fa-sharp fa-light fa-arrow-right-long bg-transparent text-white ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar2">

                            <!-- Search Widget -->
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".2s">
                                <div class="wid-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Categories -->
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <?php
                                        $stmt = $pdo->query("SELECT c.id, c.name, COUNT(b.id) AS total 
                                                         FROM blog_categories c 
                                                         LEFT JOIN blogs b ON b.category_id = c.id 
                                                         GROUP BY c.id, c.name");
                                        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($categories as $category):
                                        ?>
                                            <li><a href="products.php"><?= htmlspecialchars($category['name']) ?> <span>(<?= $category['total'] ?>)</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recent Posts -->
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".6s">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    <?php
                                    $stmt = $pdo->query("SELECT id, title, image_url, created_at FROM blogs ORDER BY created_at DESC LIMIT 3");
                                    $recent = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($recent as $item):
                                        $date = date_create($item['created_at']);
                                    ?>
                                        <div class="recent-items">
                                            <div class="recent-thumb">
                                                <img class=" rounded" src="<?= htmlspecialchars($item['image_url']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                                            </div>
                                            <div class="recent-content">
                                                <ul>
                                                    <li class="flex gap-2 items-center"><img src="assets/img/icon/calendarIcon.png" alt="icon"> <?= date_format($date, "d M, Y") ?></li>
                                                </ul>
                                                <h6><a href="blog-details.php?id=<?= $item['id'] ?>"><?= htmlspecialchars($item['title']) ?></a></h6>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Tags (Optional static) -->
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".9s">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <?php
                                        $stmt = $pdo->query("SELECT * FROM tags");
                                        $tags = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($tags as $tag):
                                        ?>

                                            <a href="#">(<?= $tag['name'] ?>)</a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- Sidebar end -->
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