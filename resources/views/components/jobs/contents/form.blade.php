<h1 class="text-3xl font-bold text-center text-slate-700">Publicar Vaga</h1>

<p class="text-center text-slate-500">Preencha as informações da vaga abaixo</p>

<form action="/jobs" method="POST" class="space-y-5 w-full">
    @csrf

    <div>
        <label for="title" class="block text-sm font-medium text-slate-600">Título da vaga</label>
        <input type="text" id="title" name="title" required
            class="mt-2 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-slate-600 focus:border-slate-600 outline-none" />
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-slate-600">Descrição</label>
        <textarea id="description" name="description" rows="6" required
            class="mt-2 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-slate-600 focus:border-slate-600 outline-none"></textarea>
    </div>

    <div>
        <label for="company" class="block text-sm font-medium text-slate-600">Empresa</label>
        <input type="text" id="company" name="company" required
            class="mt-2 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-slate-600 focus:border-slate-600 outline-none" />
    </div>

    <button type="submit" class="w-full py-3 bg-slate-600 text-white font-semibold rounded-md shadow-md hover:bg-slate-700 transition">
        Publicar Vaga
    </button>
</form>
