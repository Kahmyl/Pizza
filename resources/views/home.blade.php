@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if (Auth::user()->utype === 'ADM')
                        <p><a href="/pizzas">View all pizza orders</a></p>
                    @else
                        <p><a href="/pizzas/check">View your orders</a></p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
