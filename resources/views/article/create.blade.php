@extends('layouts.app')

@section('content')
  <h1>Tambah Data Pahla</h1>

  <form action="/pahlawan" method="POST">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type"text" class="form-control" id="nama" name="nama">
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" rows="3" id="alamat" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <textarea name="tanggal_lahir" rows="3" id="tanggal_lahir" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="domisili">Domisili</label>
      <textarea name="domisili" rows="3" id="domisili" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="tanggal_wafat">Tanggal Wafat</label>
      <textarea name="tanggal_wafat" rows="3" id="tanggal_wafat" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="piagam_penghargaan">Piagam Penghargaan/Kehormatan</label>
      <textarea name="piagam_penghargaan" rows="3" id="piagam_penghargaan" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
@endsection
