@extends('layouts.main')

@section('title', 'Product details backoffice')

@section('content')

<div class="container my-5">
  <div class="card shadow">
    <div class="card-header">
      <h3 class="mb-0">{{ $product->name }}</h3>
    </div>
    <div class="card-body">
      <p><strong>Description :</strong> {{ $product->description }}</p>
      <p><strong>Prix :</strong> {{ $product->price }} €</p>
    </div>
    <div class="card-footer text-end">
      <a href="{{ route('products') }}" class="btn btn-secondary">⬅ Retour</a>
    </div>
  </div>
</div>

@endsection