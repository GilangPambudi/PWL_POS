@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Level</h3>
        </div>
        <form method="POST" action="{{ url('/level/' . $level->level_id) }}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="form-group">
                    <label for="level_kode">Kode Level</label>
                    <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ $level->level_kode }}" required>
                </div>
                <div class="form-group">
                    <label for="level_nama">Nama Level</label>
                    <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ $level->level_nama }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('level') }}" class="btn btn-default">Kembali</a>
            </div>
        </form>
    </div>
@endsection