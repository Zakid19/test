@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Biodata</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table Biodata</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>Tmpt Lahir</th>
                        <th>Alamat</th>
                        <th>Tgl Lahir</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($biodatas as $biodata)
                    <tr>
                        <td>{{ $biodata->nama }}</td>
                        <td>
                            <img class="avatar rounded-circle" alt="user-icon" src="{{ Storage::url($biodata->foto) }}" style="width: 80px; height:70px" >
                        </td>
                        <td>{{ $biodata->jenis_kelamin }}</td>
                        <td>{{ $biodata->tmpt_lahir }}</td>
                        <td>{{ $biodata->alamat }}</td>
                        <td>{{ $biodata->tgl_lahir }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('biodata.edit', $biodata) }}">Edit</a>
                            <form action="{{ route('biodata.delete', $biodata) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
