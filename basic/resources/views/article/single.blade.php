@extends('layouts.app')



@section('content')
    <h1>{{$article['title']}}</h1>
    <p>{{$article['subject']}}</p>
<a href="/article" class="btn btn-info">kembali</a>
@endsection