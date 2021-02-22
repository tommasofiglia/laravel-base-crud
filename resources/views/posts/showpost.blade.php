@extends('layout.layout')
@section('title')
  Visualizza post
@endsection
@section('main')
  <main class="container">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <a href="{{route('posts.index')}}" class="btn btn-success">Torna all'elenco dei posts</a>
  </main>
@endsection
