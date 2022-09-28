@extends('layouts.dashboard')
@section('content')
<div class="container-fluid mt-4"></div>
@if ($message = Session::get('notif'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
<a href="{{ route('major.create') }}" class="btn btn-primary">Add+</a>
<table class="table mt-2 table-hover">
    <thead>
      <tr>
        <th scope="col" class="table-dark radius-1">#</th>
        <th scope="col" class="table-dark">Name</th>
        <th scope="col" class="table-dark">Description</th>
        <th scope="col" class="table-dark">Action</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('major.edit', ['major' => $item->id]) }}" class="btn btn-primary col-md-12">Edit</a>
                    </div>
                <div class="col-md-6">
                    <form action="{{ route('major.destroy', ['major' => $item->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger col-md-12">Delete</button>
                    </form>
                </div>
                </div>
            </div>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection
