@extends('admin.layout.app')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

@if(session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong> {{session('success')}}</strong> </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
<div class="row">
@foreach($data as $item)
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="/{{$item->namabarang}}/{{$item->id}}" class="">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                       
                                        <h5 class="font-weight-bolder mb-0">
                                            {{$item->namabarang}}
                                         
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
@endforeach
            </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/tambahbarang" method="post">
       @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Barang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="namabarang" required>
        </div>
          <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-success">Simpan Data</button>
      </div>
        </form>
      </div>
    
    </div>
  </div>
</div>
@endsection

