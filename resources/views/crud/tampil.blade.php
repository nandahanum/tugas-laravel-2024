@extends('index')

@section('content')

<table class="table table-striped" >
    <tbody>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $one->nama }}</td> 
            </tr>
            <tr>
                <td>No Handphone</td>
                <td>:</td>
                <td>{{ $one->no_hp }}</td> 
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $one->email }}</td> 
            </tr>
    </tbody>
</table>

<a href="{{ route('index') }}" class="btn btn-primary">Kembali</a>


@endsection