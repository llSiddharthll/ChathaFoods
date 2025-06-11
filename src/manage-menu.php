<?php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}
// Fetch categories
$cats = $pdo->query("SELECT * FROM menu_item_categories")->fetchAll(PDO::FETCH_ASSOC);

// Detect Edit Mode
$editMode = false;
$editItem = null;

if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM menu_items WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $editItem = $stmt->fetch(PDO::FETCH_ASSOC);
    $editMode = true;
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $bulletsArray = array_filter(array_map('trim', explode("\n", $_POST['description_points'])));
    $bulletsJson = json_encode($bulletsArray);

    $stmt = $pdo->prepare("UPDATE menu_items SET title=?, image_url=?, description_intro=?, description_points=?, category_id=? WHERE id=?");
    $stmt->execute([
        $_POST['title'],
        $_POST['image_url'],
        $_POST['description_intro'],
        $bulletsJson,
        $_POST['category_id'],
        $_POST['id']
    ]);
    header("Location: manage-menu.php");
    exit;
}

// Handle Add
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $bulletsArray = array_filter(array_map('trim', explode("\n", $_POST['description_points'])));
    $bulletsJson = json_encode($bulletsArray);

    $stmt = $pdo->prepare("INSERT INTO menu_items (title, image_url, description_intro, description_points, category_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['title'],
        $_POST['image_url'],
        $_POST['description_intro'],
        $bulletsJson,
        $_POST['category_id']
    ]);
    header("Location: manage-menu.php");
    exit;
}

// Handle Delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM menu_items WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: manage-menu.php");
    exit;
}

// Fetch all menu items
$stmt = $pdo->query("
    SELECT menu_items.*, menu_item_categories.name AS category_name
    FROM menu_items
    JOIN menu_item_categories ON menu_items.category_id = menu_item_categories.id
    ORDER BY menu_items.id DESC
");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Food Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 bg-gray-100">
    <?php include "admin-nav.php"; ?>

    <h1 class="text-2xl font-bold mb-4">🍽️ <?= $editMode ? 'Edit Menu Item' : 'Add New Menu Item' ?></h1>

    <!-- Add or Edit Form -->
    <form method="POST" class="bg-white p-6 rounded-lg shadow mb-8">
        <?php if ($editMode): ?>
            <input type="hidden" name="id" value="<?= $editItem['id'] ?>">
        <?php endif; ?>
        <div class="grid grid-cols-2 gap-4">
            <input name="title" placeholder="Title" class="border p-2 rounded"
                value="<?= $editItem['title'] ?? '' ?>" required>

            <input name="image_url" placeholder="Image URL" class="border p-2 rounded"
                value="<?= $editItem['image_url'] ?? '' ?>" required>

            <select name="category_id" class="border p-2 rounded" required>
                <option value="">Select Category</option>
                <?php foreach ($cats as $cat): ?>
                    <option value="<?= $cat['id'] ?>"
                        <?= (isset($editItem['category_id']) && $editItem['category_id'] == $cat['id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cat['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <textarea name="description_intro" placeholder="Intro description" class="border p-2 col-span-2 rounded" required><?= $editItem['description_intro'] ?? '' ?></textarea>

            <textarea name="description_points" placeholder="Bullet points (one per line)" class="border p-2 col-span-2 rounded" required><?php
                if ($editItem) {
                    $points = json_decode($editItem['description_points'], true) ?? [];
                    echo implode("\n", $points);
                }
            ?></textarea>
        </div>

        <button name="<?= $editMode ? 'update' : 'add' ?>"
            class="mt-4 <?= $editMode ? 'bg-blue-600' : 'bg-green-600' ?> text-white px-4 py-2 rounded hover:opacity-90">
            <?= $editMode ? 'Update Item' : 'Add Item' ?>
        </button>

        <?php if ($editMode): ?>
            <a href="manage-menu.php" class="ml-4 text-sm text-gray-500 underline">Cancel Edit</a>
        <?php endif; ?>
    </form>

    <!-- List Table -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Food Menu Items</h2>
        <table class="w-full text-sm table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Title</th>
                    <th class="border p-2">Category</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td class="border p-2"><?= $item['id'] ?></td>
                        <td class="border p-2">
                            <img src="<?= htmlspecialchars($item['image_url']) ?>" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="border p-2"><?= htmlspecialchars($item['title']) ?></td>
                        <td class="border p-2"><?= htmlspecialchars($item['category_name']) ?></td>
                        <td class="border p-2">
                            <a href="?edit=<?= $item['id'] ?>" class="text-blue-600 hover:underline">Edit</a> |
                            <a href="?delete=<?= $item['id'] ?>" onclick="return confirm('Are you sure?')" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
