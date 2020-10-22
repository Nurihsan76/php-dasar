@extends('layouts.app')



@section('content')
    <h1>membuat article baru</h1>

    <form method="post" action="/article">
        @csrf
        <div class="form-group">
          <label for="title">title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="masukkan nama" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="subject">subject</label>
          <textarea class="form-control @error('subject') is-invalid @enderror" id="subject" rows="3" name="subject">{{ old('subject') }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">tambahkan article</button>
      </form>

@endsection