@extends('blog')

@section('titulo')
    Blog Laravel
@endsection

@section('conteudo')

    @foreach($posts as $p)
        <h2><a href="post_id={{ $p['id'] }}">{{ $p['titulo'] }}</a></h2>
        <small>{{ $p['data'] }}</small>
        <p>{{ $p['texto'] }}</p>
    @endforeach

@endsection