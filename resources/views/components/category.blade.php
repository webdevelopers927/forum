@props(["href" => "#", "list" => ""])
<li class="col-xs-6 {{ $list }}"><a href="{{ $href }}" class="category"><i  {{ $attributes->merge(["class" => ""]) }}></i>{{ $slot }}</a></li>