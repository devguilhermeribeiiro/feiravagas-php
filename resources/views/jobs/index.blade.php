<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feira Vagas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <header class="w-full bg-slate-600 shadow p-4">
        <div class="mx-auto px-4 flex items-center justify-center">
            <h1 class="text-lg text-white font-bold">Feira vagas</h1>
        </div>
    </header>


    <main class="grid grid-cols-1 w-full md:w-3/4 mx-auto mt-12 md:grid-cols-2 lg:grid-cols-3 gap-4 p-2">
        @foreach ($jobs as $job)
            <div class="rounded shadow p-4 ">
                {{ $job->title }}
            </div>
        @endforeach
    </main>
</body>
</html>
