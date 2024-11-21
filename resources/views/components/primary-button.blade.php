<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]']) }}>
    {{ $slot }}
</button>
