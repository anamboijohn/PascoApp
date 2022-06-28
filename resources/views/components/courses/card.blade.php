<div {{ $attributes->merge(['class'=>"card mb-4 rounded-3 shadow-sm"]) }}>
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div>
            {{ $slot }}
        </div>
    </div>
    {{ $extra }}
</div>
