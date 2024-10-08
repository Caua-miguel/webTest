<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body class="m-0 p-0 font-sans bg-gray-800">

    <div id="root" class="relative h-max m-auto ">

        <nav id="top-bar" class="p-5 m-2 bg-blue-500 text-white ">
            Cadastro de clientes
        </nav>

        <div class="flex flex-row-reverse p-2">
                <p class=" text-gray-400">Campo Obrigatório</p>
                <p class="h-2 scale-50 text-red-600">*</p>   
        </div>
        
        <form action="" class="m-2">

            <div class="flex p-2">
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="nome-completo">Nome</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="nome-completo" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">

                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="cpf">CPF</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="cpf" class="w-1/6 bg-white rounded-sm" type="text">
                
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="data-nascimento">Nascimento</label>
                    <p class="h-2 scale-50 pr-4 text-red-600">*</p>  
                    <input id="data-nascimento" class=" bg-white rounded-sm" type="text">
                </div>

                <div class="flex flex-row pr-4">
                    <label class=" text-gray-500 font-bold" for="sexoM" for="sexoF">Sexo</label>
                    <p class="h-2 scale-50 pr-4 text-red-600">*</p>
                    <input id="sexoM" class="mr-2 bg-white" type="radio"> Masculino
                    <input id="sexoF" class="mr-2 ml-2 bg-white" type="radio"> Feminino
                </div>
                
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="numero-telefone">Telefone</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="numero-telefone" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="email">Email</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="email" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="cep">CEP</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="cep" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-4">
                    <label class="text-right w-28 text-gray-500 font-bold" for="endereco">Endereço</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="endereco" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-3">
                    <label class=" text-gray-500 font-bold" for="estado-civil">Estado Civil</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="estado-civil" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex p-2">
                <div class="flex flex-row pr-3">
                    <label class=" text-gray-500 font-bold" for="escolaridade">Escolaridade</label>
                    <p class="h-2 scale-50 text-red-600">*</p>  
                </div>
                <input id="escolaridade" class="w-3/4 bg-white rounded-sm" type="text">
            </div>

            <div class="flex ml-36 gap-x-2 p-2">
                <button class=" p-2 bg-green-700 rounded-sm">Cadastrar</button>
                <button class="p-2 bg-red-700 rounded-sm">Cancelar</button>
            </div>
            
           
        </form>
    </div>

        

</body>
</html>