@extends('layouts.layouts')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a style="text-decoration: none !important; color:grey !important;" href="{{ url('/home') }}" >Home</a>
            @else
                <a style="text-decoration: none !important; color:grey !important;"  href="{{ route('login') }}" >Login</a> |
                @if (Route::has('register'))
                    <a style="text-decoration: none !important; color:grey !important;"  href="{{ route('register') }}" >Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
           <div class="title m-b-md">
           <img src="/img/Sweetie.jpg" alt="pizza logo" style="padding-bottom: 10px;">
              <div class ="change"> Pizza House</div>
              <div class="c2">The norths best pizzas</div> 
           </div>
           <p class="mssg">{{ session('mssg') }}</p>
           <a href="/pizzas/create" style="text-decoration: none;"><button class="btn btn-secondary">Order</button></a>
    </div>
</div>
@endsection   