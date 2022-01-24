@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Tambah Daftar Kategori</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Silahkan Masukkan Data Daftar Kategori</h4>
        </div>
        <div class="card-body">
          <form action="/tambah-kategori" class="MultiFile-intercepted"
          method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
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