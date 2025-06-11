<?php
// login.php
session_start();
require 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['is_admin'] = $user['is_admin'];
        header("Location: admin.php");
        exit();
    } else {
        $error = 'Invalid credentials';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <?php if ($error): ?><p class="text-red-600 mb-4 text-sm"><?= $error ?></p><?php endif; ?>
    <form method="post" class="space-y-4">
        <input type="email" name="email" placeholder="Email" required class="w-full border px-3 py-2 rounded">
        <input type="password" name="password" placeholder="Password" required class="w-full border px-3 py-2 rounded">
        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded">Login</button>
    </form>
    <p class="mt-4 text-sm text-center">Don't have an account? <a href="signup.php" class="text-blue-600 underline">Sign up</a></p>
</div>
</body>
</html>
