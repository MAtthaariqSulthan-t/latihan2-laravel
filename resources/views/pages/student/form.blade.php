@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
<h1>{{ $student->id ? "Edit" : "Create" }}</h1>
@if ($student->id)
    <form action="{{ route('student.update', ['student' => $student->id]) }}" method="post">
    @method('PUT')
@else
    <form action="{{ route('student.store') }}" method="post">

@endif
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    {{-- value student untuk mengambil data --}}
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ $student->name }}">
    @error('name') <div class="text-muted">masukan nama</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Date Birth</label>
    <input type="date" class="form-control" name="date_birth" id="exampleFormControlInput1" value="{{ $student->date_birth }}">
    @error('date_birth') <div class="text-muted">masukan date birth</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Gender</label>
    <select name="gender" id="gender" class="form-control">
        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{ $student->address }}</textarea>
    @error('address') <div class="text-muted">masukan date birth</div> @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Major</label>
    <select name="major_id" id="major" class="form-select">
    @foreach ($majors as $major)
    <option value=" {{ $major->id }}">{{ $major->name }}</option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary mb-3">Confirm</button>
  </div>
</form>
</div>
@endsection
