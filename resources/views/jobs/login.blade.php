<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Feira Vagas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-slate-50 px-4">

  <main class="w-full max-w-md bg-white shadow-lg rounded-xl p-6 sm:p-8 space-y-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-center text-slate-700">Feira Vagas</h1>
    <p class="text-center text-slate-500 text-sm sm:text-base">Faça o login para cadastrar uma nova vaga</p>

    <form action="{{ route('newlogin') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="email" class="block text-sm font-medium text-slate-600">E-mail</label>
        <input type="email" id="email" name="email" required
          class="mt-2 w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-slate-600 focus:border-slate-600 outline-none text-sm sm:text-base" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-slate-600">Senha</label>
        <input type="password" id="password" name="password" required
          class="mt-2 w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-slate-600 focus:border-slate-600 outline-none text-sm sm:text-base" />
      </div>

      <button type="submit"
        class="w-full py-2.5 sm:py-3 bg-slate-600 text-white font-semibold rounded-md shadow-md hover:bg-slate-700 transition text-sm sm:text-base">
        Entrar
      </button>
    </form>
  </main>

</body>
</html>
