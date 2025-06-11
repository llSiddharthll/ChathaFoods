<?php
// signup.php
session_start();
require 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (email, password, is_admin) VALUES (?, ?, 0)");
    if ($stmt->execute([$email, $password])) {
        header("Location: login.php");
        exit();
    } else {
        $error = 'Failed to create account';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
    <?php if ($error): ?><p class="text-red-600 mb-4 text-sm"><?= $error ?></p><?php endif; ?>
    <form method="post" class="space-y-4">
        <input type="email" name="email" placeholder="Email" required class="w-full border px-3 py-2 rounded">
        <input type="password" name="password" placeholder="Password" required class="w-full border px-3 py-2 rounded">
        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded">Sign Up</button>
    </form>
    <p class="mt-4 text-sm text-center">Already have an account? <a href="login.php" class="text-blue-600 underline">Login</a></p>
</div>
</body>
</html>