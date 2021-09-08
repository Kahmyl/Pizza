@extends('layouts.app')
@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->user }}</h1>
  <p class="type" >Delivery to:  {{ $pizza->name  }}</p>
  <p class="type" >Type - {{ $pizza->type  }}</p>
  <p class="base" >Base - {{ $pizza->base  }}</p>
  <p class="toppings">Extra toppings</p>
  <ul>
    @foreach($pizza->toppings as $topping)
      <li>{{ $topping }}</li>
    @endforeach
  </ul>
  
</div>
<a href="/pizzas/check" class="back">Back to pizza lists</a>
@endsection
    
