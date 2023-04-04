@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Biodata</h1>

<div class="col-lg-12">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Edit</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('biodata.update', $biodata) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ $biodata->nama }}">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        @error('foto')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        @if($biodata->jenis_kelamin == "L")
                            <option name="jenis_kelamin" value="L" id="jenis_kelamin" selected>Laki-Laki</option>
                            <option name="jenis_kelamin" value="P" id="jenis_kelamin">Perempuan</option>
                        @elseif($biodata->jenis_kelamin == "P")
                            <option name="jenis_kelamin" value="L" id="jenis_kelamin">Laki-Laki</option>
                            <option name="jenis_kelamin" value="P" id="jenis_kelamin" selected>Perempuan</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="{{ $biodata->tmpt_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $biodata->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $biodata->tgl_lahir }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

</div>
@endsection
