<?php
include "db.php";

$slug = $_GET['slug'] ?? null;

if (!$slug) {
    die("Category not specified");
}

// Fetch category info
$stmt = $pdo->prepare("SELECT * FROM menu_item_categories WHERE category_slug = :slug");
$stmt->execute(['slug' => $slug]);
$category = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$category) {
    die("Category not found");
}

// Fetch products
$stmt = $pdo->prepare("SELECT * FROM menu_items WHERE category_id = :id");
$stmt->execute(['id' => $category['id']]);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<?php $title = $category['name'] . ' - Chatha Foods'; ?>
<?php include './partials/head.php' ?>
<body class="bg-color2">

<?php include './partials/header.php' ?>

<section class="bg-white py-20 px-4 md:px-10 lg:px-16">
    <!-- Section Header -->
    <div class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4"><?= htmlspecialchars($category['name']) ?></h1>
        <p class="text-base md:text-lg text-gray-600 leading-relaxed">
            <?= htmlspecialchars($category['description'] ?? 'Explore our premium range of delicious offerings tailored to your taste.') ?>
        </p>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $item): ?>
                <div onclick='openModal(this)' class="cursor-pointer bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden"
                    data-title="<?= htmlspecialchars($item['title']) ?>"
                    data-image="<?= htmlspecialchars($item['image_url']) ?>"
                    data-intro="<?= htmlspecialchars($item['description_intro']) ?>"
                    data-points='<?= htmlspecialchars(json_encode(json_decode($item["description_points"] ?? "[]"))) ?>'>
                    
                    <img src="<?= htmlspecialchars($item['image_url']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="w-full h-48 object-cover rounded-t-xl">
                    
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-800 hover:text-red-600 transition-colors duration-200 mb-2">
                            <?= htmlspecialchars($item['title']) ?>
                        </h3>
                        <p class="text-sm text-gray-500 line-clamp-3"><?= htmlspecialchars($item['description_intro']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full text-center text-gray-500 text-lg">
                No products available in this category yet.
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Modal -->
<?php include './partials/modal.php' ?>

<?php include './partials/footer.php' ?>
<?php include './partials/script.php' ?>

</body>
</html>
