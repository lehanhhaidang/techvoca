@props(['divider' => 'horizontal'])

@if ($divider === 'horizontal')
    <div>
        <div class="bg-white/10 my-10 h-px w-full"></div>
    </div>
@elseif ($divider === 'vertical')
    <div>
        <div class="bg-white/10 w-px h-6 "></div>
    </div>
@endif