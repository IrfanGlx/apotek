@extends('layouts.apotek')
@section('title','Jepret.Id')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Obat</h4>
                  <a href="{{ route('tambahobat') }}" class="btn btn-secondary btn-sm right-align"><i class="material-icons">add</i>Tambah Obat</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th class="center-align">
                          Nama Obat
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($obats as $obat)
                        <tr>
                          <td>
                            {{ $obat->nama }}
                          </td>
                          <td>
                            {{ $obat->jumlah }}
                          </td>
                          <td>
                            <a href="{{route('editobat', ['id' => $obat->id])}}" class="btn btn-info btn-sm right-align"><i class="material-icons">mode_edit</i></a>
                            <form action="{{ route('deleteObatAction')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $obat->id }}" name="idObat" class="form-control">
                            <button type="submit" class="btn btn-sm btn-danger  right-align"><i class="material-icons">delete</i></button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
