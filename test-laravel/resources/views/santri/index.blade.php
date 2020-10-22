@extends('layouts/app')

@section('title', 'Daftar Santri')
    
@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Santri</h1>

      <a href="/santri/create" class="btn btn-primary my-3">tambah data santri</a>
      
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
      
  <ul class="list-group">
        @foreach ($santri as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$item['nama']}}
        <a href="/santri/{{$item['id']}}" class="badge badge-primary justify-content-end">Detail</a>
          @endforeach
        </li>
      </ul>     
      {{-- <table class="table">
          <thead class="thead-dark">
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody> --}}
      {{-- <tr>
            <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item['nama'] }}</td>
              <td>{{ $item['asal'] }}</td>
              <td>{{ $item['umur'] }}</td>
              <td>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Deleta</a>
              </td>
            </tr> --}}
          {{-- </tbody>
      </table>
    </div>
  </div>
  
</div> --}}

@endsection