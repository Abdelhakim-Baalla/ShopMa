@extends('layouts.structeur')

@section('title')
    Nos Produits
@endsection

@section('main')
<div class="container mx-auto p-2 bg-gray-50 shadow-xl rounded-lg min-h-screen">
    <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-8">🛍️ Nos Produits</h1>

    <div class="mt-12">
        <div class="flex flex-wrap gap-4 justify-center">
        @if ($products->isEmpty())
            <p class="text-center text-gray-500 mt-8 text-lg">Aucun produit disponible pour le moment.</p>
         @else 
            @foreach($products as $produit)
                <div class="bg-white rounded-lg w-72 shadow-lg p-2">
                    <img src="{{ $produit->image }}" alt="{{ $produit->titre }}" class="w-full h-48 object-cover rounded-lg">
                    <h3 class="text-xl font-semibold mt-4">{{ $produit->titre }}</h3>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold text-gray-900">{{ $produit->prix }} MAD</span>
                        <form action="/produit/details" method="POST">
                            @csrf
                            <input type="hidden" name="id_details" value="{{ $produit->id }}">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition">Détails</button>
                        </form>
                    </div>
                </div>
        @endforeach
        
        @endif
        
        </div>
    </div>

    
        
    
</div>
@endsection
