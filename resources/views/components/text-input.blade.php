@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'btn border text-primary border-transparent rounded-md transition-all duration-300 hover:text-white hover:bg-primary bg-primary/10']) }}>
