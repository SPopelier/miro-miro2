@extends('layouts.main')

@section('title', 'Créer un produit')

@section('content')
<div class="container my-5">
  <h2>Créer un nouveau produit</h2>
  <form method="POST" action="{{ route('store-product') }}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nom</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" required></textarea>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Prix (€)</label>
      <input type="number" class="form-control" name="price" step="0.01" required>
    </div>
    <button type="submit" class="btn btn-success">Créer</button>
    <a href="{{ route('products') }}" class="btn btn-secondary">⬅ Retour</a>
  </form>
</div>
@endsection
