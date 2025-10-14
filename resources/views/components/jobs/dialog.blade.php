<dialog id="{{ $target }}-modal" class="modal {{$target === "publicar" ? "md:h-11/12" : "md:h-4/5"}}">
    <section class="flex flex-col px-4 py-10 mx-auto gap-4 items-center justify-between h-full">

        <button id="btn-{{$target}}-modal" class="absolute top-4 right-4 text-xl lg:text-2xl text-slate-600 hover:text-white cursor-pointer font-bold px-2 hover:rounded hover:bg-slate-700 transition">
            &times;
        </button>

        {{ $slot }}

    </section>
</dialog>
