@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
@if ($message = Session::get('notif'))
    <div class="alert alert-success" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif
<a class="btn btn-primary" href="/student/create">List</a>
<form class="d-flex mt-2" role="search" action="{{ route('student.index') }}">
    <div class="mb-3 mt-2">
        <select type="text" name="filter" class="form-select" id="formGroupExampleInput" placeholder="All">
            <option value="">All</option>
            @foreach ($majors as $item)
                <option value="{{ $item->id }}" {{ request('filter') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-2 ms-2">
        <input class="form-control me-2" type="text" name="search" placeholder="Search here" aria-label="Search" value="{{ request('search') }}">
    </div>
    <div class="mb-3 mt-2 ms-2">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col" class="table-dark">#</th>
        <th scope="col" class="table-dark">Name</th>
        <th scope="col" class="table-dark">Date Birth</th>
        <th scope="col" class="table-dark">Gender</th>
        <th scope="col" class="table-dark">Address</th>
        <th scope="col" class="table-dark">Major</th>
        <th scope="col" class="table-dark">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($data as $item)
      <tr>
        {{-- iteration untuk auto number --}}
        <th scope="row">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->date_birth }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->major->name }}</td>
        <td>
            {{-- route untuk  --}}
            <div class="row">
                <div class="col">
                    <a href="{{ route('student.edit', ['student' => $item->id]) }}" class="btn btn-primary">Edit</a>
                </div>
                <div class="col">
            <form action="{{ route('student.destroy', ['student' => $item->id]) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
                </div>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- {{ $data->links() }} --}}
  {{ $data->withQueryString()->links() }}
</div>
@endsection
