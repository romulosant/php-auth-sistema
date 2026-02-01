<?php
session_start();

$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['usuario'] ?? '';
    $password = $_POST['senha'] ?? '';

    if (empty($username) || empty($password)) {

        $erro = "Preencha todos os campos!";

    }
    elseif ($username === "admin" && $password === "123") {

        $_SESSION['usuario'] = $username;
        header("Location: dashboard.php");
        die();

    }
    else {

        $erro = "Login e senha incorretos!";

    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white p-8 rounded-lg shadow">

    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">
        Login do Sistema
    </h1>

    <!-- MENSAGEM DE ERRO -->
    <?php if ($erro): ?>
        <div class="mb-4 p-3 rounded bg-red-100 text-red-700 text-sm">
            <?= htmlspecialchars($erro) ?>
        </div>
    <?php endif; ?>

    <!-- MENSAGEM DE SUCESSO -->
    <?php if ($sucesso): ?>
        <div class="mb-4 p-3 rounded bg-green-100 text-green-700 text-sm">
            <?= htmlspecialchars($sucesso) ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="" class="space-y-4">

        <div>
            <label for="usuario" class="block text-sm font-medium text-gray-700">
                Usuário
            </label>
            <input
                type="text"
                name="usuario"
                id="usuario"
                class="mt-1 w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div>
            <label for="senha" class="block text-sm font-medium text-gray-700">
                Senha
            </label>
            <input
                type="password"
                name="senha"
                id="senha"
                class="mt-1 w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded font-medium hover:bg-blue-700 transition"
        >
            Entrar
        </button>

    </form>

</div>

</body>
</html>
