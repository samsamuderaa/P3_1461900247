@extends('layout/main0247')
@section('title','data')

@section('container')
</nav>
<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-3">Daftar Data</h1>
    <table class="table table-dark table-striped">
  <thead class="thed-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pelanggan as $pelanggan)
    <tr>
      <th scope="row">{{$pelanggan->id}}</th>
      <td>{{$pelanggan->nama}}</td>
      <td>{{$pelanggan->alamat}}</td>
      <td>
      <a href="{{route('data0247.edit',$pelanggan->id)}}" class="btn btn-sm btn-success ">edit....</a>
      <form action="{{route('data0247.destroy',$pelanggan->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">delete</button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
  <a href="{{route('data0247.create')}}" class="btn btn-sm btn-success">Tambah</a>
</table>
</div>
</div>
</div>
@endsection
