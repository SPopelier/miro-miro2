@extends('layouts.main')

@section('title', 'product-list')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="dropdown col text-center">
                <button class="btn btn-dark btn-lg dropdown-toggle " type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    FILTRER
                </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                        <li><a class="dropdown-item" href="{{ url('/products/sort/price') }}">Trier par prix</a></li>
                        <li><a class="dropdown-item" href="{{ url('/product/sort/name') }}">Trier par nom</a></li>
                    </ul>
        </div>
    </div>
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
                        <p class="card-text fw-bold">{{ $product->price }}€</p>
                        <a href="{{ route('product-details', $product->id) }}" class="btn btn-dark btn-lg mt-auto">Voir le produit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
