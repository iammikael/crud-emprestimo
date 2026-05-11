<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Patrimônios</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="bg-[#F8FAFC] text-black">

    <div class="flex min-h-screen">

        <aside class="w-20 bg-[#111827] text-white border-r border-gray-800 flex flex-col justify-between">
            <div>
                <nav class="mt-6 px-3 flex flex-col items-center gap-4">

                    <a href="/home"
                        class="w-12 h-12 flex items-center justify-center bg-blue-600 hover:bg-blue-700 transition rounded-2xl">
                        <i class="fa-solid fa-house text-lg"></i>
                    </a>

                    <a href="/perfil"
                        class="w-12 h-12 flex items-center justify-center hover:bg-white/10 transition rounded-2xl">
                        <i class="fa-solid fa-user text-lg"></i>
                    </a>

                    <a href="/meus-patrimonios"
                        class="w-12 h-12 flex items-center justify-center hover:bg-white/10 transition rounded-2xl">

                        <i class="fa-solid fa-box-archive text-lg"></i>
                    </a>

                    <a href="/emprestimos"
                        class="w-12 h-12 flex items-center justify-center hover:bg-white/10 transition rounded-2xl">
                        <i class="fa-solid fa-clipboard-list text-lg"></i>
                    </a>

                </nav>

            </div>

        </aside>

        <main class="flex-1 p-10">
            <div class="flex items-center gap-4 mb-10">
                <h1 class="text-4xl font-bold">
                    Meus Patrimônios
                </h1>

                <a href="/cadastroPatrimonio"
                    class="bg-blue-600 hover:bg-blue-700 text-white transition px-4 py-2 rounded-xl text-sm font-medium shadow-md flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i>

                    Cadastrar
                </a>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <?php foreach ($patrimonios as $p): ?>

                    <!-- CARD -->
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

                        <div class="flex gap-3">

                            <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white transition rounded-xl py-2 font-medium">
                                Editar
                            </button>
                            <button class="flex-1 bg-red-100 hover:bg-red-200 text-red-600 transition rounded-xl py-2 font-medium">
                                Indisponivel
                            </button>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </main>

    </div>

</body>

</html>