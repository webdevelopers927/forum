
@props(["href" => "#"])
<a style="color: white" href="{{ $href }}" {{ $attributes->merge(["class" => ""]) }}>{{ $slot }}</a>