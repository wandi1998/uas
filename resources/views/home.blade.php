@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-primary">
            <div class="card">
                <div class="card-header bg-info">Blogger Riswandi Pasaman</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang Di Blogger Riswandi Pasaman
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
