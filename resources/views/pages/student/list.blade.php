@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
@if ($message = Session::get('notif'))
    <div class="alert alert-success" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif
<a class="btn btn-primary" href="/student/create">List</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($data as $item)
      <tr>
        {{-- iteration untuk auto number --}}
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->date_birth }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->major->name }}</td>
        <td>
            {{-- route untuk  --}}
            <a href="{{ route('student.edit', ['student' => $item->id]) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('student.destroy', ['student' => $item->id]) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
