@extends('layout.form_tambah')
@section('title')
    Edit Member
@endsection
@section('conten')
<form action="{{url('update_member')."/".$members->id}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Member</label>
      <input type="text" class="form-control" name="nama" value="{{$members->nama}}" >
    </div>
    <div class="mb-3">
    <label class="form-label">Level Member</label>


<select name="level" class="form-control">
  <option value="{{$members->level}}">{{$members->level}}</option>
  <option value="Mytich">1</option>
  <option value="Epic">2</option>
  <option value="Legend">3</option>
  <option value="Master">4</option>
</select>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection