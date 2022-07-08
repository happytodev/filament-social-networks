@if($socialNetworks)
<div class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
    @foreach ($socialNetworks->social_network as $network)  
    @if ($network['is_active'])
        
    <a href="{{ $network['url'] }}" target="_blank">
        <img 
        src="{{ $network['icon'] ? $network['icon'] : 'vendor/filament-social-networks/images/' . $network['name'] . '.svg' }}" 
        alt="{{ $network['name'] }}"
        class="w-5 h-5 @if (! $loop->first) ml-3 @endif">
    </a>

    @endif
    @endforeach
</div>
@endif