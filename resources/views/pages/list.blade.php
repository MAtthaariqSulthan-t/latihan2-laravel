@extends('layouts.dashboard')
@section('content')
<a href="/student/create">List</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($data as $item)
      <tr>
        {{-- iteration untuk auto number --}}
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item-> name }}</td>
        <td>{{ $item-> date_birth }}</td>
        <td>{{ $item-> gender }}</td>
        <td>{{ $item-> address }}</td>
        <td>{{ $item-> major }}</td>
      </tr>
      @endforeach
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection
