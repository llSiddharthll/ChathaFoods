<!-- admin_documents.php -->
<?php
session_start();
require 'db.php';

// Protect admin area
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}
// Fetch all headings for dropdown
$headings = $pdo->query("SELECT h.id, h.main_heading, y.year_name FROM year_headings h JOIN years y ON h.year_id = y.id ORDER BY y.year_name, h.main_heading")->fetchAll(PDO::FETCH_ASSOC);

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_document'])) {
    $stmt = $pdo->prepare("INSERT INTO documents (heading_id, link_name, link_url, link_heading) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_POST['heading_id'],
        $_POST['link_name'],
        $_POST['link_url'],
        !empty($_POST['link_heading']) ? $_POST['link_heading'] : null
    ]);
    header("Location: admin_documents.php");
    exit();
}

// Handle delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM documents WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header("Location: admin_documents.php");
    exit();
}

// Fetch documents with heading and year
$documents = $pdo->query("SELECT d.*, h.main_heading, y.year_name FROM documents d JOIN year_headings h ON d.heading_id = h.id JOIN years y ON h.year_id = y.id ORDER BY y.year_name, h.main_heading")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Documents</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <?php include "admin-nav.php"; ?>
  <div class="max-w-5xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Manage Documents</h1>

    <form method="post" class="mb-8 space-y-4">
      <div>
        <label class="block mb-1">Select Heading</label>
        <select name="heading_id" class="w-full border px-3 py-2 rounded" required>
          <option value="">-- Select Main Heading --</option>
          <?php foreach ($headings as $head): ?>
            <option value="<?= $head['id'] ?>"><?= htmlspecialchars($head['year_name']) ?> - <?= htmlspecialchars($head['main_heading']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label class="block mb-1">Link Heading (optional)</label>
        <input type="text" name="link_heading" class="w-full border px-3 py-2 rounded">
      </div>
      <div>
        <label class="block mb-1">Link Name</label>
        <input type="text" name="link_name" class="w-full border px-3 py-2 rounded" required>
      </div>
      <div>
        <label class="block mb-1">Link URL</label>
        <input type="text" name="link_url" class="w-full border px-3 py-2 rounded" required>
      </div>
      <button type="submit" name="add_document" class="bg-blue-600 text-white px-4 py-2 rounded">Add Document</button>
    </form>

    <table class="w-full table-auto border-collapse text-sm">
      <thead>
        <tr class="bg-gray-200 text-left">
          <th class="border px-3 py-2">Year</th>
          <th class="border px-3 py-2">Main Heading</th>
          <th class="border px-3 py-2">Link Heading</th>
          <th class="border px-3 py-2">Link Name</th>
          <th class="border px-3 py-2">Link URL</th>
          <th class="border px-3 py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($documents as $doc): ?>
        <tr class="hover:bg-gray-50">
          <td class="border px-3 py-2"><?= htmlspecialchars($doc['year_name']) ?></td>
          <td class="border px-3 py-2"><?= htmlspecialchars($doc['main_heading']) ?></td>
          <td class="border px-3 py-2"><?= htmlspecialchars($doc['link_heading'] ?? '') ?></td>
          <td class="border px-3 py-2"><?= htmlspecialchars($doc['link_name']) ?></td>
          <td class="border px-3 py-2"><a href="<?= htmlspecialchars($doc['link_url']) ?>" class="text-blue-600 underline" target="_blank">View</a></td>
          <td class="border px-3 py-2">
            <a href="admin_documents.php?delete=<?= $doc['id'] ?>" class="text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
