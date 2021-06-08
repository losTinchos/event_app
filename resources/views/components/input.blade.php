@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' =>'shadow-sm border-2 border-black outline-none shadow-lg 

']) !!}>

