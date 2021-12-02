@extends('layouts.app')

@section('content')
  <h1>Bikin Artikel Baru</h1>

  <form action="">
    <div class="form-group">
      <label for="title">Judul</label>
      <input type"password" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <textarea name="subject" rows="3" id="subject" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
@endsection
