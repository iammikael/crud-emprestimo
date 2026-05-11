<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- importacao do tailwind e importacao dos icones-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-white text-black">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside class="w-15 bg-[#111827] text-white border-r border-gray-800 flex flex-col justify-between">
            <div>
                <nav class="mt-6 px-4">
                    
                    <a href="/home"
                    class="flex items-center gap-3 bg-blue-600 hover:bg-blue-700 transition rounded-xl px-4 py-3 mb-3">
                        <i class="fa-solid fa-house text-lg"></i>
                    </a>

                    <a href="/perfil"
                    class="flex items-center gap-3 hover:bg-white/10 transition rounded-xl px-4 py-3 mb-3">
                        <i class="fa-solid fa-user text-lg"></i>
                    </a>

                    <a href="/meus-patrimonios"
                    class="flex items-center gap-3 hover:bg-white/10 transition rounded-xl px-4 py-3 mb-3">
                        <i class="fa-solid fa-box-archive text-lg"></i>
                    </a>

                    <a href="/emprestimos"
                    class="flex items-center gap-3 hover:bg-white/10 transition rounded-xl px-4 py-3">
                        <i class="fa-solid fa-clipboard-list text-lg"></i>
                    </a>

                </nav>
            </div>

            <!-- SAIR -->
            <div class="p-4 border-t border-gray-800">

                <a href="/logout"
                class="flex items-center gap-3 hover:bg-red-500/20 text-red-400 transition rounded-xl px-4 py-3">

                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>

            </div>

        </aside>

        <!-- CONTEÚDO -->
        <main class="flex-1 p-10">
            <div class="flex items-center gap-4 mb-10">
                <h1 class="text-4xl font-bold">
                    Patrimonios disponiveis para emprestimos
                </h1>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($patrimonios as $p): ?>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-5">
                            <i class="fa-solid fa-box text-blue-600 text-2xl"></i>
                        </div>

                        <h2 class="text-2xl font-semibold mb-2 text-gray-800">
                            <?= esc($p['nome_patrimonio']) ?>
                        </h2>

                        <p class="text-gray-500 mb-5">
                            <?= esc($p['tipo_patrimonio']) ?>
                        </p>

                        <p class="text-gray-500 mb-5">
                            <?= esc($p['razao_social']) ?>
                        </p>
                    <div class="flex gap-3">
                            <button class="flex-1 bg-green-600 hover:bg-green-900 text-white transition rounded-xl py-2 font-medium">
                                Solicitar empréstimo
                            </button>
                    </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </main>
    </div>

</body>
</html>