<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white p-8 rounded-lg shadow text-center">

    <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        Dashboard
    </h1>

    <p class="text-gray-600 mb-6">
        Usuarios: <?=$usuario?> Logado com sucesso!
    </p>

    <a
        href="logout.php"
        class="inline-block bg-red-600 text-white px-6 py-2 rounded
               hover:bg-red-700 transition"
    >
        Sair
    </a>

</div>

</body>
</html>

