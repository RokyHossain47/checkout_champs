@extends('layouts.frontend')
@section('content')

<div class="container pb-5">
        <div class="header_section_top">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_menu">
                        <ul>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Gift Ideas</a></li>
                            <li><a href="#">New Releases</a></li>
                            <li><a href="#">Today's Deals</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container py-5">
    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top img-fluid" style="max-height:350px;object-fit:contain;">
                <div class="card-body">
                    <h2 class="card-title mb-3">{{ $product->name }}</h2>
                    <h5 class="text-muted mb-3">{{ $product->slug }}</h5>
                    <p class="card-text mb-3">{{ $product->description }}</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Price:</strong> <span class="text-success" style="font-size:1.3em;">${{ $product->price }}</span></li>
                        <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
                        <li class="list-group-item"><strong>SKU:</strong> {{ $product->sku }}</li>
                        <li class="list-group-item"><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn btn-primary btn-lg">Buy Now</a>
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
