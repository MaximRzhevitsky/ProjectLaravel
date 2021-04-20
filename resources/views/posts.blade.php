@extends('layouts.app')

@section('title-block')
Все посты
@endsection

@section('content')
<h1>Тут все посты</h1>
<div class="row">
@foreach($posts as $post)

    <div class="col-md-4">
        <h3>{{$post->title}}</h3>
        <p>{{$post->intro}}</p>
        <p><a href="/posts/{{$post->id}}" class="btn btn-default">Читать полностью</a></p>
    </div>

    @endforeach
    </div>
@endsection