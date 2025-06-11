<?php
// manage-blog-categories.php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}

// Handle Create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $name = $_POST['name'];
    $is_active = isset($_POST['is_active']) ? 1 : 0;
    $stmt = $pdo->prepare("INSERT INTO blog_categories (name, is_active) VALUES (?, ?)");
    $stmt->execute([$name, $is_active]);
    header("Location: manage-blog-categories.php");
    exit();
}

// Handle Delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM blog_categories WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: manage-blog-categories.php");
    exit();
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $is_active = isset($_POST['is_active']) ? 1 : 0;
    $stmt = $pdo->prepare("UPDATE blog_categories SET name = ?, is_active = ? WHERE id = ?");
    $stmt->execute([$name, $is_active, $id]);
    header("Location: manage-blog-categories.php");
    exit();
}

// Fetch all categories
$categories = $pdo->query("SELECT * FROM blog_categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Blog Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <?php include "admin-nav.php"; ?>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Blog Categories</h1>

        <!-- Add Category -->
        <form method="post" class="mb-6">
            <div class="flex items-center gap-4">
                <input type="text" name="name" placeholder="Category Name" required class="border px-3 py-2 rounded w-1/2">
                <label class="flex items-center gap-1">
                    <input type="checkbox" name="is_active" checked>
                    <span class="text-sm">Active</span>
                </label>
                <button name="add" class="bg-blue-600 text-white px-4 py-2 rounded">Add</button>
            </div>
        </form>

        <!-- Category Table -->
        <table class="w-full text-sm table-auto border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Active</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                    <tr class="border-t">
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $cat['id'] ?>">
                            <td class="p-2">#<?= $cat['id'] ?></td>
                            <td class="p-2">
                                <input type="text" name="name" value="<?= htmlspecialchars($cat['name']) ?>" class="border px-2 py-1 rounded w-full">
                            </td>
                            <td class="p-2 text-center">
                                <input type="checkbox" name="is_active" <?= $cat['is_active'] ? 'checked' : '' ?>>
                            </td>
                            <td class="p-2 flex gap-2">
                                <button name="update" class="bg-green-600 text-white px-3 py-1 rounded">Update</button>
                                <a href="?delete=<?= $cat['id'] ?>" onclick="return confirm('Delete this category?')" class="bg-red-600 text-white px-3 py-1 rounded">Delete</a>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>