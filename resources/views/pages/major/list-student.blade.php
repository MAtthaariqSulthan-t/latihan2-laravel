@extends('layouts.dashboard')
@section('content')
<div class="container-fluid mt-4">
<h3>Jurusan {{ $data->name }}</h3>
<p>Jumlah Siswa : {{ count($data->students) }}</p>
{{-- caralain penggunaan count --}}
{{-- <p>Jumlah Siswa : {{ $data->students->count() }}</p> --}}
<table class="table mt-2 table-hover">
    <thead>
      <tr>
        <th scope="col" class="table-dark radius-1">#</th>
        <th scope="col" class="table-dark">Name Siswa</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach ($data->students as $student)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student ->name }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
