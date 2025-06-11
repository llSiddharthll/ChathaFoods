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


    <section class="bg-white py-20 px-4 md:px-10 lg:px-16">
        <!-- Section Header -->
        <div class="max-w-5xl mx-auto text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Non-Veg Product Collection
            </h2>
            <p class="text-lg text-gray-600">
                Chatha Foods caters to a diverse national and international clientele with over 70 delectable ready-to-eat and frozen meat products — high in quality and rich in flavor.
            </p>
        </div>

        <!-- Category Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 container mx-auto">
            <?php
            $stmt = $pdo->query("SELECT * FROM menu_item_categories");
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($categories as $category): ?>
                <div class="rounded-xl border border-red-200 hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <img src="<?= htmlspecialchars($category['category_image']) ?>" alt="<?= htmlspecialchars($category['name']) ?>" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-red-600 mb-2"><?= htmlspecialchars($category['name']) ?></h3>
                        <p class="text-gray-600 text-sm mb-4">
                            <?= match ($category['name']) {
                                'Snacks & Accompaniments' => 'Appetite alluring assortment of finger food options in chicken.',
                                'Patties' => 'Ten tasty alternatives of chicken and mutton patties.',
                                'Sausages' => 'Six exquisite flavours in succulent chicken sausages.',
                                'Cold Cuts' => 'Sleek meat slices, tinged with varied spices.',
                                'Toppings & Fillers' => 'Finely sliced meat ideal for various dishes.',
                                default => 'Explore our delicious range of meat products.',
                            } ?>
                        </p>

                        <?php
                        $stmt = $pdo->prepare("
                                        SELECT menu_items.*
                                        FROM menu_items
                                        JOIN menu_item_categories ON menu_items.category_id = menu_item_categories.id
                                        WHERE menu_item_categories.category_slug = :slug
                                    ");
                        $stmt->execute(['slug' => $category['category_slug']]);
                        $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <!-- Products in category -->
                        <?php foreach ($menuItems as $item): ?>
                            <?php if ($item['category_id'] === $category['id']): ?>
                                <button class="cursor-pointer w-full text-left mb-3" onclick='openModal(this)'
                                    data-title="<?= htmlspecialchars($item['title']) ?>"
                                    data-image="<?= htmlspecialchars($item['image_url']) ?>"
                                    data-intro="<?= htmlspecialchars($item['description_intro']) ?>"
                                    data-points='<?= htmlspecialchars(json_encode(json_decode($item["description_points"] ?? "[]"))) ?>'>
                                    <div class="flex items-center gap-3">
                                        <img class="min-h-14 md:min-h-20 h-14 md:h-20 min-w-16 md:min-w-24 w-16 md:w-24 rounded object-cover" src="<?= htmlspecialchars($item['image_url']) ?>" alt="thumb">
                                        <span class="text-xl md:text-2xl text-gray-800 hover:text-red-500 font-medium text-base leading-tight">
                                            <?= htmlspecialchars($item['title']) ?>
                                        </span>
                                    </div>
                                </button>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Modal -->
    <div id="foodModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content rounded-4 overflow-hidden position-relative border-0 shadow-lg">

                <!-- Close Button -->
                <button type="button" class="cursor-pointer btn-close position-absolute top-0 end-0 m-3 text-danger" aria-label="Close" onclick="closeModal()"></button>

                <div class="row g-0">

                    <!-- Image Section -->
                    <div class="col-md-6 d-flex align-items-stretch">
                        <img id="modal-image" src="" alt="Food Image" class="w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="col-md-6 p-4 p-md-5 d-flex flex-column overflow-auto" style="max-height:90vh;">
                        <h3 id="modal-title" class="text-danger fw-bold mb-3 fs-2"></h3>
                        <p id="modal-intro" class="text-muted fs-5 mb-3"></p>
                        <ul id="modal-points" class="text-secondary ps-3 list-disc"></ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script>
        function openModal(el) {
            const modal = new bootstrap.Modal(document.getElementById('foodModal'));
            document.getElementById('modal-title').textContent = el.dataset.title;
            document.getElementById('modal-image').src = el.dataset.image;
            document.getElementById('modal-intro').textContent = el.dataset.intro;

            const points = JSON.parse(el.dataset.points || "[]");
            const ul = document.getElementById('modal-points');
            ul.innerHTML = '';
            points.forEach(p => {
                const li = document.createElement('li');
                li.textContent = p;
                ul.appendChild(li);
            });

            modal.show();
        }

        function closeModal() {
            const modalEl = bootstrap.Modal.getInstance(document.getElementById('foodModal'));
            if (modalEl) modalEl.hide();
        }
    </script>


    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>



</body>

</html>