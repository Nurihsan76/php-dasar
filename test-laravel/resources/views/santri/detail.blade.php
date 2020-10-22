@extends('layouts/app')

@section('title', 'Detail Santri')
    
@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Detail Santri</h1>
      <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{ $santri['nama'] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $santri['asal'] }}</h6>
        <p class="card-text">{{ $santri['umur'] }}</p>
        <a href="/santri/{{ $santri['id'] }}/edit" class="btn btn-success">edit</a>
        <form action="/santri/{{ $santri['id'] }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
        <a href="/santri" class="card-link">Kembali</a>
        </div>
      </div>

@endsection