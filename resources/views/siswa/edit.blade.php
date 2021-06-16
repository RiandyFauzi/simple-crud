@extends('layouts.app')
@section('content')
<div class="card">
    <div class="container-fluid" style="padding-top: 30px;">
        <form action="{{ route('siswa.update', [$siswa->id])}}" method="post">
        @method('put')
            @csrf

            <div class="form-group">
                <label for="">nis</label>
                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}">
                @error('nis')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">
                @error('nama')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">rombel</label>
                <input type="text" name="rombel" class="form-control" value="{{ $siswa->rombel }}">
                @error('rombel')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">rayon</label>
                <input type="text" name="rayon" class="form-control" value="{{ $siswa->rayon }}">
                @error('rayon')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
</div>
@endsection