<dialog id="{{ $target }}-modal" class="modal">
    <section class="flex flex-col px-4 py-10 mx-auto gap-4 items-center justify-between h-full">

        {{ $slot }}

        <button id="btn-{{$target}}-modal" class="lg:text-2xl text-xl cursor-pointer font-semibold p-3 bg-slate-600 rounded-md shadow-md text-white">
            Fechar
        </button>
    </section>
</dialog>
