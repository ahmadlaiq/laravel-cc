@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Pesanan Masuk</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pesanan Masuk</h4>
                <div class="card-header-action">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <tbody><tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>No Meja</th>
                  <th>Jumlah Orang</th>
                  <th>Pesanan</th>
                  <th>Action</th>
                </tr>
                @foreach ($pesan as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->nomeja }}</td>
                  <td>{{ $data->orang }}</td>
                  <td><p>{{ $data->pesanan }}</p></td>
                  <td>
                    <form action="{{ route('selesai', $data->id)}}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                      <input type="hidden"  name="status" value="2">
                      </div>
                      <button class="btn btn-success" type="submit">
                        Selesai
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </section>
@endsection