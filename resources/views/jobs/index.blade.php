<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feira Vagas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50">
    <x-jobs.header>
        <x-jobs.link target="sobre" />
        <x-jobs.dialog target="sobre">
            <x-jobs.contents.sobre />
        </x-jobs.dialog>

        <x-jobs.link target="contato" />
        <x-jobs.dialog target="contato">
            <x-jobs.contents.contato />
        </x-jobs.dialog>
    </x-jobs.header>

    <main class="main">
        @foreach ($jobs as $job)
            <x-jobs.card :$job />
            <x-jobs.dialog target="job-{{ $job->id }}">
                <x-jobs.contents.job :$job />
            </x-jobs.dialog>
        @endforeach
    </main>
</body>
</html>
