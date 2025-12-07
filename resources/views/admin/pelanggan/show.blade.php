@extends('layouts.admin.app')

@section('content')

<h3>Detail Pelanggan</h3>

<div class="card mb-4">
    <div class="card-body">
        <p><strong>Nama:</strong> {{ $pelanggan->first_name }} {{ $pelanggan->last_name }}</p>
        <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
        <p><strong>Phone:</strong> {{ $pelanggan->phone }}</p>
        <p><strong>Gender:</strong> {{ $pelanggan->gender }}</p>
        <p><strong>Birthday:</strong> {{ $pelanggan->birthday }}</p>
    </div>
</div>
<hr>
<h4>Upload File Pendukung</h4>

<form action="{{ route('pelanggan.uploadFile') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="ref_table" value="pelanggan">
    <input type="hidden" name="ref_id" value="{{ $pelanggan->pelanggan_id }}">

    <div class="mb-3">
        <label for="files" class="form-label">Upload File (boleh lebih dari satu)</label>
        <input type="file" name="files[]" id="files" class="form-control" multiple>
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<hr>

<h4>File Pendukung</h4>

@if ($files->count() == 0)
    <p class="text-muted">Belum ada file yang diupload.</p>
@else
    <ul class="list-group">

        @foreach ($files as $file)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                <div>
                    @if (in_array(strtolower(pathinfo($file->file_name, PATHINFO_EXTENSION)), ['jpg','png','jpeg']))
                        <img src="{{ asset('storage/' . $file->file_path) }}" width="60" class="img-thumbnail me-3">
                    @endif

                    <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">
                        {{ $file->file_name }}
                    </a>
                </div>

                <form action="{{ route('pelanggan.deleteFile', $file->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>

            </li>
        @endforeach

    </ul>
@endif

@endsection
