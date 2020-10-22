@extends('layouts.app')



@section('content')
    <h1>mengedit article</h1>

<form method="post" action="/article/{{ $article['id'] }}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title">title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="masukkan nama" name="title" value="{{ $article['title'] }}">
        </div>
        <div class="form-group">
          <label for="subject">subject</label>
          <textarea class="form-control @error('subject') is-invalid @enderror" id="subject" rows="3" name="subject">{{ $article['subject'] }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">edit article</button>
      </form>

@endsection