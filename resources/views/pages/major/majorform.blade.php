@extends('layouts.dashboard')
@section('content')
<div class="container mt-4"></div>
<h1>{{ $major->id ? "Edit" : "Create" }}</h1>
@if ($major->id)
    <form action="{{ route('major.update', ['major' => $major->id]) }}" method="post">
    @method('PUT')
@else
    <form action="{{ route('major.store') }}" method="post">
@endif
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $major->name }}">
        @error('name')<div class="text-muted">{{$message}}</div> @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $major->description }}</textarea>
        @error('description')<div class="text-muted">{{$message}}</div> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/major" class="btn btn-danger">Back</a>
</form>
@endsection
