@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Tambah Daftar Menu</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Silahkan Masukkan Data Daftar Menu</h4>
        </div>
        <div class="card-body">
          <form action="/tambah-menu" class="MultiFile-intercepted"
          method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              @foreach ($kategori as $data)
              <option>{{ $data->nama }}</option>    
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi"></textarea>
          </div>
          <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="gambar">
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