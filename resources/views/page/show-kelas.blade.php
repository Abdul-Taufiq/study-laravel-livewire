@extends('page.layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary mb-4" href="{{ route('belajar-crud') }}">Kembali</a>

        <h4 class="mb-4">hallo, ini detail kelas {{ $kelas->tingkat }} {{ $kelas->kelas }}</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kelas</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Goldar</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas->datadiri as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kelas->tingkat . ' ' . $kelas->kelas }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jns_kelamin }}</td>
                        <td>{{ $data->goldar }}</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
