@extends('layouts.app')

@section('content')
  <h1>Halaman Pahlawan</h1>
  <a href='/profile/create' class="btn btn-primay">Tambah Data Pahlawan</a>

  @foreach ($pahlawans as $pahlawan)
    <p><strong> Judul : {{$pahlawan['title']}} </strong></p>
    <p> Subject : {{$pahlawan['nama']}} </p>
  @endforeach

  <div>
    {{ $pahlawans->links()}}
  </div>
@endsection
