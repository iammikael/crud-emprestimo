<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Solicitar Empréstimo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-6">
        Solicitar Empréstimo
    </h1>

    <form method="POST" action="/emprestimos/store" class="space-y-4">

        <!-- REQUERENTE -->
        <div>
            <label class="font-semibold">Razão Social</label>
            <input type="text"
                value="<?= esc(session()->get('razao_social')) ?>"
                class="w-full border p-2 rounded bg-gray-100"
                readonly>
        </div>

        <div>
            <label class="font-semibold">CNPJ</label>
            <input type="text"
                value="<?= esc(session()->get('cnpj')) ?>"
                class="w-full border p-2 rounded bg-gray-100"
                readonly>
        </div>

        <input type="hidden"
               name="estab_atendente_id"
               value="<?= esc($patrimonio['estab_pai_id']) ?>">

        <div class="bg-gray-100 p-3 rounded">
            <p class="font-semibold">Estabelecimento atendente:</p>
            <p>Razão social: <?= esc($patrimonio['razao_social']) ?></p>
            <p>CNPJ: <?= esc($patrimonio['cnpj']) ?></p>
        </div>

        <div class="border p-3 rounded">
            <p class="font-semibold mb-2">Patrimônio selecionado:</p>

            <label class="flex gap-2 items-center">
                <input type="checkbox"
                       name="patrimonio_id"
                       value="<?= $patrimonio['id'] ?>"
                       checked>

                <?= esc($patrimonio['nome_patrimonio']) ?>
            </label>
        </div>

        <!-- DATA DEVOLUÇÃO -->
        <div>
            <label class="font-semibold">Data de devolução</label>
            <input type="date"
                   name="data_devolucao"
                   class="w-full border p-2 rounded"
                   required>
        </div>
        <!-- DATA EMPRESTIMO (informativo) -->
        <p class="text-sm text-gray-500">
            Data do empréstimo: <?= date('d/m/Y H:i') ?>
        </p>

        <!-- BOTÕES -->
        <div class="flex justify-end gap-2">

            <a href="/home"
               class="px-4 py-2 bg-gray-400 text-white rounded">
                Voltar
            </a>

            <button class="px-4 py-2 bg-blue-600 text-white rounded">
                Confirmar Empréstimo
            </button>

        </div>

    </form>

</div>

</body>
</html>