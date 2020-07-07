<h3>{{ $category }}</h3>
@foreach ($news as $item)
    @if($item['category'] == $category)
        <h4>{{ $item['title'] }}</h4>
        <p>{{ $item['text'] }}</p>
        <a href="{{ route('news.byid', ['id' => $item['id']]) }}">More</a>
    @endif
@endforeach

