@extends('layout.form_tambah')
@section('title')
    Tambah Barang
@endsection
@section('conten')
<form action="{{url('simpan_barang')}}" method="post">
    @csrf
    <div class="mb-3">
    <label class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">
    <label class="form-label">Jumlah Barang</label>
    <input type="number" class="form-control" name="jumlah">
    </div>
    <div class="mb-3">
    <label class="form-label">Harga Barang</label>
    <input type="number" class="form-control" name="harga">
    </div>
    <div class="mb-3">
    <label class="form-label">Keterangan Barang</label>
    <input type="text" class="form-control" name="ket">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection