@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello Mr . {{ Auth::user()->name }}
                    <br>
                    Your Email is {{Auth::user()->email}}
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello Mr . {{ Auth::user()->name }}
                    <br>
                    Your Email is {{Auth::user()->email}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
