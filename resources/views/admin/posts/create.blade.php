@extends('layouts.app')

@section('title','Aggiungi Post')

@section('content')
{{--Creiamo il form per aggiungere un nuovo elemento fumetto al nostro DB negli input mettiamo 
    il valore name="nome della colonna sul nostro db",
    nel form mettiamo come action il percorso della nostra rotta
    come methodo POST e @csrf nel form che è una funzione
    di laravel--}}
<h1>MODIFICA POST</h1>
<a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-info">Indietro</button></a>
{{-- <form action="{{route ("admin.posts.store") }}" >
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Aggiungi il titolo</label>
        <input name="title" value="{{old("title")}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserisci titolo post">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Aggiungi l'autore</label>
        <input name="author" value="{{old("author")}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserici l'autore">
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Aggiungi il contenuto</label>
        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Inserisci il contenuto">{{old("description")}}</textarea>
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia Post</button>
</form> --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route ("admin.posts.store") }}" method="POST" role="form">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Aggiungi il titolo</label>
                <input type="text" class="form-control" name="title" value="{{old("title")}}" placeholder="Inserisci titolo post"/>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Aggiungi l'autore</label>
                <input name="author" value="{{old("author")}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserici l'autore">
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Aggiungi il contenuto</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Inserisci il contenuto" class="form-control bcontent" name="content">{{old("description")}}</textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <input type="submit" name="Submit" value="Publish" class="btn btn-primary form-control" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection