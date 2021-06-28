<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 btn bg-aqua border-2 
    border-blue-dark text-blue-dark w-52 h-10 font-bold hover:bg-green-200 active:bg-red-200 focus:outline-none 
    focus:border-gray-900 focus:ring ring-gray-300']) }}>
    {{ $slot }}
</button>
