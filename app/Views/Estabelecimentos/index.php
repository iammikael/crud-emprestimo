<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Empresta ai</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-5xl mx-auto bg-white p-8 rounded-xl shadow">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">
                Estabelecimentos
            </h1>

            <a href="/estabelecimentos/create"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                Novo
            </a>
        </div>

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Razão Social</th>
                    <th class="p-3 text-left">Nome Fantasia</th>
                    <th class="p-3 text-left">CNPJ</th>
                </tr>
            </thead>

        </table>

    </div>

</body>
</html>