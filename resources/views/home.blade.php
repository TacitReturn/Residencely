@extends('layouts.app')

@section('content')
        <div class="col-md-8 mt-2">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome to your property management dashboard.</p>
                </div>
            </div>
        </div>
@endsection
