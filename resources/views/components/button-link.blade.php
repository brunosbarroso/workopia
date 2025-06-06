@props([
    'url'=>'/',
    'icon'=>null,
    'bgClass'=>'bg-yellow-500',
    'hoverClass'=>'hover:bg-yellow-600',
    'textClass'=>'text-black',
    'block'=>false
    ])

<a href="{{$url}}" class="px-4 py-2 {{ $bgClass }} {{ $hoverClass }} {{ $textClass }} {{ $block ? 'block' : '' }} rounded hover:shadow-md transition duration-300">
    @if ($icon)
        <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{ $slot }}
</a>
