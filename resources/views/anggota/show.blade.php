@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-primary text-white">
        Detail Anggota
    </div>

    <div class="card-body">

        <p><strong>Kode Anggota:</strong> {{ $anggota['kode'] }}</p>
        <p><strong>Nama Lengkap:</strong> {{ $anggota['nama'] }}</p>
        <p><strong>Email:</strong> {{ $anggota['email'] }}</p>
        <p><strong>Telepon:</strong> {{ $anggota['telepon'] }}</p>
        <p><strong>Alamat:</strong> {{ $anggota['alamat'] }}</p>

        <p>
            <strong>Status:</strong>

            <span class="badge bg-success">
                {{ $anggota['status'] }}
            </span>
        </p>

        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

@endsection