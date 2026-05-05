@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pasien</h2>
    <a href="{{ route('pasien.create') }}" class="btn btn-success">+ Tambah Pasien Baru</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>No Rekam Medis</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pasiens as $index => $pasien)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pasien->no_rekam_medis }}</td>
            <td>{{ $pasien->nama_pasien }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->umur }}</td>
            <td>
                <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" 
                      style="display:inline" 
                      onsubmit="return confirm('Yakin hapus data pasien ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Belum ada data pasien</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection