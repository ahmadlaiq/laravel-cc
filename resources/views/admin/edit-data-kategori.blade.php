@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Daftar Kategori</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Silahkan Edit Data Daftar Kategori</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('update',  $kategori->id) }}" class="MultiFile-intercepted"
          method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $kategori->nama }}">
          </div>
          <div class="text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
        </form>
        </div>
      </div>
      </div>
  </section>
@endsection