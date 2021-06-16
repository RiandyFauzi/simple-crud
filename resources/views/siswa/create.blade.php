@extends('layouts.app')
@section('content')
<div class="card">
    <div class="container-fluid" style="padding-top: 30px;">
        <form action="{{ route('siswa.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="">nis</label>
                <input type="text" name="nis" class="form-control">
                @error('nis')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control">
                @error('nama')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">rombel</label>
                <input type="text" name="rombel" class="form-control">
                @error('rombel')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">rayon</label>
                <input type="text" name="rayon" class="form-control">
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