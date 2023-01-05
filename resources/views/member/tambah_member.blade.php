@extends('layout.form_tambah')
@section('title')
    Tambah Member
@endsection
@section('conten')
<form action="{{url('simpan_member')}}" method="post">
    @csrf
    <div class="mb-3">
        <select name="user_id">
                 @foreach ($users as  $users)
            <option value="{{$users->id}}">{{$users->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Member</label>
        <input type="text" class="form-control" name="nama">
    </div>
    
    <div class="mb-3">
    <label class="form-label">Level Member</label>

<select name="level" class="form-control">
  <option value="Mytich">1</option>
  <option value="Epic">2</option>
  <option value="Legend">3</option>
  <option value="Master">4</option>
</select>
       
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection