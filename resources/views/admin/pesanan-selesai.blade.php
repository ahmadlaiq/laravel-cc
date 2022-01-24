@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Pesanan Selesai</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
      @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        {{Session::get('success')}}
    </div>
@endif
        <div class="card">
            <div class="card-header">
                <h4>Data Pesanan Selesai</h4>
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
                  <td><a href="#" data-id="{{ $data->id }}" class="btn btn-danger btn-sm swal-confirm">
                    <form action="{{ route('delete-pesan',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                        @csrf
                        @method('delete')
                    </form>
                    Hapus</a></td>
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

@push('page-scripts')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Apakah anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal('Data berhasil dihapus!', {
            icon: 'success',
            });
        $(`#delete${id}`).submit();
        } else {
            swal('File anda aman!');
        }
      });
  });
</script>
@endpush