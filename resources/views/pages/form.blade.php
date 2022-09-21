@extends('layouts.dashboard')
@section('content')
<form action="{{ route('student.store') }}" method="post">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1">
    @error('name') <div class="text-muted">masukan nama</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Date Birth</label>
    <input type="date" class="form-control" name="date_birth" id="exampleFormControlInput1">
    @error('date_birth') <div class="text-muted">masukan date birth</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Gender</label>
    <select name="gender" id="gender" class="form-control">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
    @error('address') <div class="text-muted">masukan date birth</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Major</label>
    <select name="major" id="major" class="form-select">
        <option value="male">ASE</option>
        <option value="female">DBM</option>
    </select>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary mb-3">Confirm</button>
  </div>
</form>
@endsection
