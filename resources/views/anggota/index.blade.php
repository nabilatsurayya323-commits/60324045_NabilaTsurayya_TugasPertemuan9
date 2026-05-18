@extends('layouts.app')

@section('content')

<h2 class="mb-4">Daftar Anggota Perpustakaan</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($anggota_list as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['kode'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>
                <span class="badge bg-success">
                    {{ $item['status'] }}
                </span>
            </td>
            <td>
                <a href="{{ route('anggota.show', $item['id']) }}"
                   class="btn btn-primary btn-sm">
                   Detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection