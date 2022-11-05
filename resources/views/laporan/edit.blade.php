@extends('template.master')

@section('judul_konten')
    Edit
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>

            <form action="/laporan/modify" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $laporan->id}}>
                <div class="card-body>
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        {{ $laporan->nama }}
                       
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP :</label>
                        {{ $laporan->nip }}
                       
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan :</label>
                        {{ $laporan->jabatan }}
                       
                    </div>

                    <div class="form-group">
                        <label for="kegiatan">Kegiatan :</label>
                        {{ $laporan->kegiatan }}
                        
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal :</label>
                        {{ $laporan->tanggal }}
                    </div>

                    <div class="form-group">
                        <label for="status">Status :</label>
                        {{ $laporan->status }}
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
            @endsection
