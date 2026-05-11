<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Cadastro</title>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-8">
            Cadastro de patrimonio
        </h1>

        <form action="/cadastroPatrimonio" method="post" class="space-y-5">
            <div>
                <label class="block mb-2 font-medium">
                    Patrimonio
                </label>
                <input
                    type="varchar"
                    name="nome_patrimonio"
                    placeholder="Ex: Mesa..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Codigo do patrimonio
                </label>
                <input
                    type="varchar"
                    name="cod_patrimonio"
                    placeholder="Ex: Numero de serial"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Categoria do patrimonio
                </label>
                <input
                    type="varchar"
                    name="tipo_patrimonio"
                    placeholder="Ex: Informatica."
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition">     
                Cadastrar
            </button>

            
 
        </form>

    </div>

</body>
</html>