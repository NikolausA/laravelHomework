<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($category as $item)
        <a class="p-2 text-muted" href="{{ route('news.bycategory', ['category' => $item->title]) }}">{{ $item->title }}</a>
        @endforeach
    </nav>
</div>
