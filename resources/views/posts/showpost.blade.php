@extends('layout.layout')
@section('title')
  Visualizza post
@endsection
@section('main')
  <main class="container" style="width: 50%">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <a href="{{route('posts.index')}}" class="btn btn-success">Torna all'elenco dei posts</a>
  </main>
@endsection
