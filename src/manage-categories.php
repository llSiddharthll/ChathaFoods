<?php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}
// Handle Create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $stmt = $pdo->prepare("INSERT INTO menu_item_categories (name, category_image, category_slug) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['category_image'],
        $_POST['category_slug']
    ]);
    header("Location: manage-categories.php");
    exit;
}

// Handle Delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM menu_item_categories WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: manage-categories.php");
    exit;
}

// Fetch all categories
$categories = $pdo->query("SELECT * FROM menu_item_categories ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <?php include "admin-nav.php"; ?>

    <h1 class="text-2xl font-bold mb-6">📂 Manage Menu Categories</h1>

    <!-- Create Category Form -->
    <form method="POST" class="bg-white p-6 rounded-lg shadow-md mb-10">
        <h2 class="text-lg font-semibold mb-4">Add New Category</h2>
        <div class="grid grid-cols-3 gap-4">
            <input name="name" placeholder="Category Name" class="border p-2 rounded" required>
            <input name="category_slug" placeholder="Slug (e.g. snacks)" class="border p-2 rounded" required>
            <input name="category_image" placeholder="Image URL" class="border p-2 rounded" required>
        </div>
        <button name="add" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Category</button>
    </form>

    <!-- Category Table -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4">All Categories</h2>
        <table class="w-full table-auto text-sm">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">ID</th>
                    <th class="p-2 border">Image</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Slug</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                <tr>
                    <td class="p-2 border"><?= $cat['id'] ?></td>
                    <td class="p-2 border"><img src="<?= htmlspecialchars($cat['category_image']) ?>" class="h-12 w-12 rounded-full object-cover" alt="image"></td>
                    <td class="p-2 border"><?= htmlspecialchars($cat['name']) ?></td>
                    <td class="p-2 border"><?= htmlspecialchars($cat['category_slug']) ?></td>
                    <td class="p-2 border">
                        <!-- You can create edit_category.php for editing -->
                        <!-- <a href="edit_category.php?id=<?= $cat['id'] ?>" class="text-blue-600 hover:underline">Edit</a> | -->
                        <a href="?delete=<?= $cat['id'] ?>" onclick="return confirm('Are you sure?')" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
