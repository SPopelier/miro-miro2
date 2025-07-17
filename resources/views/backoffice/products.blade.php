@extends('layouts.main')

@section('title', 'Products')

@section('content')

<div class="container">
  <h1 class="my-4">Produits</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Accès</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->price }} €</td>
          <td><a href="{{ route('product-details-backoffice', $product->id) }}" class="btn btn-dark btn-lg mt-auto">Voir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
