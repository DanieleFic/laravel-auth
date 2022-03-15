@extends('layouts.dashboard')

@section('title','Show Post')

@section('content')
    <div>
        <h1>POST</h1>
        <h2>Titolo Post</h3>
        <p>{{$post->title}}</p>
        <h2>Autore</h3>
        <p>{{$post->author}}</p>
        <h2>Testo</h3>
        <p>{{$post->content}}</p>
        <h2>published</h3>
        <p>{{$post->published}}</p>
        <h2>Slug del Post</h3>
        <p>{{$post->slug}}</p>
        {{-- facciamo un bottone con il route comics.show che si trova nel nostro controllore  --}}
        <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-info">Indietro</button></a>
    </div>     
@endsection