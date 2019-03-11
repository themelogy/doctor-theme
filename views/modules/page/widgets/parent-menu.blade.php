<ul class="list-group page-list">
    @foreach($children as $child)
        <li class="list-group-item list-group-item-action @if(array_last(Request::segments())==$child->slug)active @endif"><a href="{{ $child->url }}">{{ $child->title }}</a></li>
    @endforeach
</ul>