<?php

    session_start();

    session_unset();

    session_destroy();


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white p-8 rounded-lg shadow text-center">

    <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        Você saiu do sistema
    </h1>

    <p class="text-gray-600 mb-6">
        Sua sessão foi encerrada.
    </p>

    <a
        href="index.php"
        class="inline-block bg-blue-600 text-white px-6 py-2 rounded
               hover:bg-blue-700 transition"
    >
        Voltar para o login
    </a>

</div>

</body>
</html>

