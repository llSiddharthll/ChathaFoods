<!-- admin_year_headings.php -->
<?php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}
// Fetch years for dropdown
$yearsList = $pdo->query("SELECT * FROM years ORDER BY year_name")->fetchAll(PDO::FETCH_ASSOC);

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_heading'])) {
    $stmt = $pdo->prepare("INSERT INTO year_headings (year_id, main_heading) VALUES (?, ?)");
    $stmt->execute([$_POST['year_id'], $_POST['main_heading']]);
    header("Location: admin_year_headings.php");
    exit();
}

// Handle delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM year_headings WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: admin_year_headings.php");
    exit();
}

// Fetch headings with year names
$headings = $pdo->query("SELECT year_headings.*, years.year_name FROM year_headings JOIN years ON year_headings.year_id = years.id")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Year Headings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <?php include "admin-nav.php"; ?>
  <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Manage Year Headings</h1>

    <form method="post" class="mb-8 space-y-4">
      <div>
        <label class="block mb-1">Select Year</label>
        <select name="year_id" class="w-full border px-3 py-2 rounded" required>
          <option value="">-- Select Year --</option>
          <?php foreach ($yearsList as $year): ?>
            <option value="<?= $year['id'] ?>"><?= htmlspecialchars($year['year_name']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label class="block mb-1">Main Heading</label>
        <input type="text" name="main_heading" class="w-full border px-3 py-2 rounded" required>
      </div>
      <button type="submit" name="add_heading" class="bg-green-500 text-white px-4 py-2 rounded">Add Heading</button>
    </form>

    <table class="w-full table-auto border-collapse">
      <thead>
        <tr class="bg-gray-200">
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Year</th>
          <th class="border px-4 py-2">Main Heading</th>
          <th class="border px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($headings as $heading): ?>
        <tr class="hover:bg-gray-50">
          <td class="border px-4 py-2"><?= $heading['id'] ?></td>
          <td class="border px-4 py-2"><?= htmlspecialchars($heading['year_name']) ?></td>
          <td class="border px-4 py-2"><?= htmlspecialchars($heading['main_heading']) ?></td>
          <td class="border px-4 py-2">
            <a href="admin_year_headings.php?delete=<?= $heading['id'] ?>" class="text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
