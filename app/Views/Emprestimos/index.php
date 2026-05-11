<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Empréstimos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-4">
        Empréstimos
    </h1>

    <a href="/home"
       class="inline-block mb-6 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition">
        ← Voltar para Patrimônios
    </a>

    <div class="space-y-3">
        <?php if (!empty($emprestimos)): ?>
            <?php foreach ($emprestimos as $e): ?>
                <div class="p-4 border rounded bg-gray-50">
                    <p>
                        <span class="font-semibold">Patrimônio ID:</span>
                        <?= esc($e['patrimonio_id']) ?>
                    </p>
                    <p>
                        <span class="font-semibold">Data de devolução:</span>
                        <?= esc($e['data_devolucao']) ?>
                    </p>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p class="text-gray-500">
                Nenhum empréstimo encontrado.
            </p>
        <?php endif; ?>

    </div>

</div>
</body>
</html>