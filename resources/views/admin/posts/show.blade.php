@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Dettagli Post</h2>
            <h5 class="card-title">Titolo: {{$post->title}}</h5>
            <div class="card-subtitle mb-2 text-muted">                    
                @if ($post->category_id)
                    <h3>Categoria: {{$post->category->name}}</h3>
                @else
                    <p>Nessuna categoria associata al post, 
                        <a href="{{route('admin.posts.edit', $post->id)}}">aggiungila ora.</a>
                    </p>
                @endif
            </div>
            <p class="card-text">{{$post->content}}</p>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna alla lista dei post</a>
        </div>
    </div>
@endsection
