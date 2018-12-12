@extends('layouts.apotek')
@section('title','Jepret.Id')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Obat</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('tambahObatAction')}}" method="POST">
			{{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Obat</label>
                          <input type="text" name="namaObat" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah</label>
                          <input type="number" name="jumlahObat" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection