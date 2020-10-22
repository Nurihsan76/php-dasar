@extends('layouts/app')

@section('title', 'Ubah Santri')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-10">
      <h1 class="mt-3">Ubah Santri</h1>
      <form method="post" action="/santri/{{$santri['id']}}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama" name="nama" value="{{$santri['nama']}}">
            @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">  
           <label for="asal">Asal</label>
           <input type="text" class="form-control @error('asal') is-invalid @enderror" id="asal" placeholder="masukkan asal" name="asal" value="{{$santri['asal']}}">    
           @error('asal')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
    </div>
        <div class="form-group">
           <label for="umur">Umur</label>
           <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="masukkan umur" name="umur" value="{{$santri['umur']}}">
           @error('umur')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
        </div>
            <button type="submit" class="btn btn-primary">Ubah data</button>
    </form>
      </div>
  </div>
</div>
@endsection