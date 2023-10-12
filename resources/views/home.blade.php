@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('mesej'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mesej') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        
                </div>
            </div>
            <button type="button" class="btn btn-secondary">Tambah</button>
            <div class="card">
                <div class="card-header">{{ __('Senarai Agensi') }}</div>

                <div class="card-body">
            <a href="{{ route('agency.create') }}" type="button" class="btn btn-secondary">Tambah Agensi </a>
                <table class="table caption-top">
    <thead>
    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Agensi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tarikh daftar</th>
                            <th scope="col">Lain Lain</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($senaraiAgensi as $key => $agency)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $agency->name }}</td>
                                    <td>{{ $agency->alamat }}</td>
                                    <td>{{ $agency->created_at }}</td>
                                    <td>
                                        <a href="{{ route('agency.show', $agency) }}" type="button" class="btn btn-warning">Kemaskini</a>
                                        <a href="{{ route('agency.delete', $agency) }}" type="button" class="btn btn-danger">Padam</a>
                                    </td>
                                </tr>
                            @endforeach
    </tr>
  </tbody>
</table>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
