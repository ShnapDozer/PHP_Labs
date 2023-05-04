@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ $product->image }}" alt="{{ $product->name }}">
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->cost }}</p>
    <p>Quantity: {{ $product->count }}</p>
@endsection