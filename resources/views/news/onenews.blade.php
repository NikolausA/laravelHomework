<p>{{ $id }}</p>
@foreach ($news as $item)
    @if($item['id'] == $id)
        <h4>{{ $item['title'] }}</h4>
        <p>{{ $item['text'] }}</p>
    @endif
@endforeach
