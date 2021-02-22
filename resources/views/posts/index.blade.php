@extends('layout.layout')
@section('title')
  Articoli dal blog
@endsection

@section('main')
  <main class="container">
  <a href="{{route('posts.create')}}" class="btn" style="background-color: lightgreen">Inserisci un nuovo post</a>
  <table>

    <thead>
      <tr>
        <th>ID</th>
        <th>TITOLO</th>
        <th>CORPO DEL POST</th>
        <th>CREATO IL</th>
        <th>MODIFICATO IL</th>
        <th>AZIONI</th>
      </tr>
    </thead>

    @forelse ($posts as $post)

      <tbody>
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>
          <td>
            <a href="#" class="btn btn-primary pb-20">Leggi</a> <br>
            <a href="#" class="btn btn-primary">Modifica</a> <br>
            <form class="" method="post">
              <a href="#" class="btn btn-danger">Elimina</a>
            </form>
          </td>

        </tr>
      </tbody>

    @empty
      <h1>La lista di articoli è vuota!</h1>
    @endforelse

  </table>
</main>
@endsection
