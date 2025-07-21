@extends('layouts.main')

@section('title', 'Cart')

@section('content')


@foreach($cart->products as $cart)
  <div>
    <h4>{{ $product->name }}</h4>
    <p>Quantité : {{ $product->pivot->quantity }}</p>
    <p>Prix unitaire : {{ $product->price }} €</p>
  </div>
@endforeach
 

@endsection