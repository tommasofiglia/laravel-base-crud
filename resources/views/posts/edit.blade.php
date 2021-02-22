@extends('layout.layout')
@section('title')
  Modifica post
@endsection
@section('main')

  <form action="{{route('posts.update' ,['post'=>$post->id])}}" method="post">

    @csrf
    @method('PUT')
    <main class="container">
      <h1>Modifica il post</h1>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="form-group">
        <label for="title" class="d-block">Titolo</label>
        <input id="title" type="text" name="title" class="@error('title') is-invalid @enderror" value="{{$post->title}}" placeholder="Inserisci qui il titolo">
        <small class="form-text text-muted">Modifica il titolo del post</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="body" class="d-block">Testo del post</label>
        <textarea name="body" rows="4" cols="80" placeholder="Inserisci il testo che deve essere contenuto nel tuo post" class="@error('title') is-invalid @enderror">{{$post->body}}</textarea>
        <small class="form-text text-muted">Modifica il testo del post</small>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" name="button" class="btn" style="background: lightblue">Modifica post</button>

    </main>

  </form>

@endsection
