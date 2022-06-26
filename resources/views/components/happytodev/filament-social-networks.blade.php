<div class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
    @foreach ($socialNetworks as $socialNetwork)        
    <a href="{{ $socialNetwork['url'] }}" target="_blank">
        <img 
            src="{{ $socialNetwork['icon'] ? $socialNetwork['icon'] : 'vendor/filament-social-networks/images/' . $socialNetwork['name'] . '.svg' }}" 
            alt="{{ $socialNetwork['name'] }}"
            class="w-5 h-5 @if (! $loop->first) ml-3 @endif">
    </a>
    @endforeach
</div>