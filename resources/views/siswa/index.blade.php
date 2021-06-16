@extends('layouts.app')
@section('content')
<div class="card">
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>nis</th>
                    <th>nama</th>
                    <th>rombel</th>
                    <th>rayon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswa)
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->rombel}}</td>
                <td>{{$siswa->rayon}}</td>
                <td>
                    <form action="{{ route('siswa.destroy', [$siswa->id] )}}" method="POST">
                        <a href="{{ route('siswa.edit', $siswa->id)}}" class="btn btn-primary">Edit</a>
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection