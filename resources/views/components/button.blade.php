<button {{ $attributes->merge(['type' => 'submit', 'class' => '', 'id'=>'']) }}>
    {{ $slot }}
</button>
