@extends('layouts.app')
@section('content')
    @foreach($news as $item)
        @if($item['isTopNews'])
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">{{ $item['title'] }}Title of a longer featured blog post</h1>
                    <p class="lead my-3">{{ $item['text'] }}Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="{{ route('news.byid', ['id' => $item['id']]) }}" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
        @endif
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{ $item['category'] }}</strong>
                        <h3 class="mb-0">{{ $item['title'] }}</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">{{ $item['text'] }}This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{ route('news.byid', ['id' => $item['id']]) }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop
