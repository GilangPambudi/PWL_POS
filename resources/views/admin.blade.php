@extends('layouts.template')

@section('subtitle', 'Admin')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Admin')

@section('content')
    {{-- <div class="container">
        <div class="card">
            <div class="card-header">Halaman <?php echo Auth::user()->level_id == 1 ? 'Admin' : 'Manager'; ?>
                    <p>Anda login sebagai:
                        <?php echo Auth::user()->level_id == 1 ? 'Admin' : 'Manager'; ?></p>
                    <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
    </div> --}}

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Halaman <?php echo Auth::user()->level_id == 1 ? 'Admin' : 'Manager'; ?></h3>
          <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <p>Anda login sebagai: <?php echo Auth::user()->level_id == 1 ? 'Admin' : 'Manager'; ?></p>
            <a href="{{ url('logout') }}">Logout</a>
        </div>
      </div>
@endsection

@push('js')
@endpush