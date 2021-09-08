@extends('layouts.app')
@section('content')
@if ($orders->count() == 0)
<div class="wrapper pizza-index">
    <div class="pizza-item" style="display: block !important;">
        <p><h4>No orders yet.</h4></p>
        <a class="btn btn-success" href="{{ route('pizzas.create') }}">Order Pizza</a>
    </div>
</div>

@else
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
     @foreach($orders as $order)
       <div class="pizza-item">
        <img src="/img/pizza.jpg" alt="pizza icon">
        <h4><a href="/pizzas2/{{ $order->id }}">{{ $order->type }} </a><h4>
       </div>
     @endforeach

</div>
@endif
@endsection
    
