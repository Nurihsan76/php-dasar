@extends('layouts.app')

@section('content')

<h1>ini halaman article</h1>

<a href="/article/create" class="btn btn-primary">tambah article</a>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@foreach ($articles->chunk(3) as $articleChunk)
<div class="row">
    @foreach ($articleChunk as $article)
    <div class="col card mb-1 ml-1 mr-1">
        <div class="card-body">
            <p><strong>{{ ucfirst($article['title']) }}</strong></p>
        <p>{{$article['subject']}}</p>
        <a href="article/{{$article['id']}}" class="btn btn-info btn-sm float-left">baca</a>
        <a href="article/{{$article['id']}}/edit" class="btn btn-info btn-sm float-left">edit</a>
        <form action="article/{{$article['id']}}" method="post">
            @csrf
            @method('delete')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">hapus</button>
    </form>
    </div>
    </div>
    @endforeach
</div>
@endforeach
<div>
    {{ $articles->links() }}
</div>

@endsection