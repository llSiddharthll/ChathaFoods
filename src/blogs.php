<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="zxx">

<?php $title = 'Chatha Foods'; ?>
<?php include './partials/head.php'; ?>

<body class="bg-color2">

    <?php include './partials/preloader.php'; ?>
    <?php include './partials/scroll-up.php'; ?>
    <?php include './partials/mouse-cursor.php'; ?>
    <?php include './partials/sidebar.php'; ?>
    <?php include './partials/header.php'; ?>
    <?php include './partials/search.php'; ?>

    <?php
    $mainTitle = 'Blogs';
    $Title = 'Home';
    $Title2 = 'Blogs';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
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


    <section class="news-standard section-padding fix">
        <div class="container">
            <div class="row g-4">
                <!-- Blog List -->
                <div class="col-12 col-lg-8">
                    <div class="news-standard-wrapper">
                        <?php
                        $blogsPerPage = 5;
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $start = ($page - 1) * $blogsPerPage;
                        $totalStmt = $pdo->query("SELECT COUNT(*) FROM blogs");
                        $totalBlogs = $totalStmt->fetchColumn();
                        $totalPages = ceil($totalBlogs / $blogsPerPage);
                        $stmt = $pdo->prepare("SELECT * FROM blogs ORDER BY created_at DESC LIMIT :start, :limit");
                        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
                        $stmt->bindValue(':limit', $blogsPerPage, PDO::PARAM_INT);
                        $stmt->execute();
                        $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($blogs as $blog):
                        ?>
                            <div class="news-standard-items wow fadeInUp" data-wow-delay=".2s">
                                <div class="news-thumb">
                                    <img src="<?= htmlspecialchars($blog['image_url']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                                    <div class="post-date">
                                        <?php $date = date_create($blog['created_at']); ?>
                                        <h3><?= date_format($date, 'd') ?><br><span><?= date_format($date, 'M') ?></span></h3>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li><i class="fa-light fa-user"></i> <?= htmlspecialchars($blog['author'] ?? 'Admin') ?></li>

                                    </ul>
                                    <h3><a href="blog-details.php?id=<?= $blog['id'] ?>"><?= htmlspecialchars($blog['title']) ?></a></h3>
                                    <p class="mb-3"><?= htmlspecialchars($blog['short_description']) ?></p>
                                    <a href="blog-details.php?id=<?= $blog['id'] ?>" class="theme-btn mt-1">Read More <i class="fa-sharp fa-light fa-arrow-right-long text-red-500"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Pagination (Optional Static) -->
                        <div class="page-nav-wrap text-center mt-5">
                            <ul>
                                <?php if ($page > 1): ?>
                                    <li><a class="previous" href="?page=<?= $page - 1 ?>"><i class="fa-sharp fa-light fa-arrow-left-long"></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li><a class="page-numbers <?= $page === $i ? 'active' : '' ?>" href="?page=<?= $i ?>"><?= $i ?></a></li>
                                <?php endfor; ?>

                                <?php if ($page < $totalPages): ?>
                                    <li><a class="next" href="?page=<?= $page + 1 ?>"><i class="fa-sharp fa-light fa-arrow-right-long"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
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
                                            <img class="rounded" src="<?= htmlspecialchars($item['image_url']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
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
    </section>

    <?php include './partials/footer.php'; ?>
    <?php include './partials/script.php'; ?>

</body>

</html>