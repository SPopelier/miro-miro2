@extends('layouts.main')

@section('title', 'Liste des produits')

@section('content')

<div class="container hero-section d-flex align-items-center justify-content-center text-center mt-5 mb-5">
    <a href="#products" class="btn btn-dark btn-lg">FILTRER</a>
</div>

<section id="products" class="container">
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch mb-4">
                <div class="card w-100 h-100 d-flex flex-column">
                    <img class="card-img-top" src="{{ asset('assets/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text fw-bold">{{ $product->price }}€00</p>
                        <a href="{{ route('product-details', $product->id) }}" class="btn btn-dark btn-lg mt-auto">Voir le produit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
