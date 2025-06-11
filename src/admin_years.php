<!-- admin_years.php -->
<?php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_year'])) {
    $stmt = $pdo->prepare("INSERT INTO years (year_id, year_name) VALUES (?, ?)");
    $stmt->execute([$_POST['year_id'], $_POST['year_name']]);
    header("Location: admin_years.php");
    exit();
}

// Handle delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM years WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: admin_years.php");
    exit();
}

// Fetch all years
$years = $pdo->query("SELECT * FROM years")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Years</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <?php include "admin-nav.php"; ?>
  <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Manage Years</h1>

    <form method="post" class="mb-8 space-y-4">
      <div>
        <label class="block mb-1">Year ID</label>
        <input type="text" name="year_id" class="w-full border px-3 py-2 rounded" required>
      </div>
      <div>
        <label class="block mb-1">Year Name</label>
        <input type="text" name="year_name" class="w-full border px-3 py-2 rounded" required>
      </div>
      <button type="submit" name="add_year" class="bg-blue-500 text-white px-4 py-2 rounded">Add Year</button>
    </form>

    <table class="w-full table-auto border-collapse">
      <thead>
        <tr class="bg-gray-200">
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Year ID</th>
          <th class="border px-4 py-2">Year Name</th>
          <th class="border px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($years as $year): ?>
        <tr class="hover:bg-gray-50">
          <td class="border px-4 py-2"><?php echo htmlspecialchars($year['id']); ?></td>
          <td class="border px-4 py-2"><?php echo htmlspecialchars($year['year_id']); ?></td>
          <td class="border px-4 py-2"><?php echo htmlspecialchars($year['year_name']); ?></td>
          <td class="border px-4 py-2">
            <a href="admin_years.php?delete=<?php echo $year['id']; ?>" class="text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
