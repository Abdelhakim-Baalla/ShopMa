@extends('layouts.structeur')

@section('title')
    Dashboard
@endsection

@section('main')
<div class="container mx-auto p-6 bg-gray-50 shadow-xl rounded-lg min-h-screen">
    <h1 class="text-3xl font-extrabold mb-6 text-gray-800">🛍️ Liste des Produits</h1>
    <a href="/ajouter/produit" class="mb-6 px-8 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition">➕ Ajouter un Nouveau Produit</a>
    
    <div class="overflow-y-auto max-h-[450px]">
        <table class="w-full border-collapse mt-6 shadow-2xl rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gradient-to-r from-gray-200 to-gray-300 text-gray-800">
                    <th class="px-6 py-3 text-lg">Image</th>
                    <th class="px-6 py-3 text-lg">Titre</th>
                    <th class="px-6 py-3 text-lg">Description</th>
                    <th class="px-6 py-3 text-lg">Prix</th>
                    <th class="px-6 py-3 text-lg">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $produit)
                <tr class="text-center bg-white hover:bg-gray-100 transition border border-gray-300">
                    <td class="px-6 py-3">
                        <img src="{{ $produit->image }}" alt="{{ $produit->titre }}" class="w-20 h-20 object-cover mx-auto rounded-lg shadow-md">
                    </td>
                    <td class="px-6 py-3 text-gray-700 font-semibold">{{ $produit->titre }}</td>
                    <td class="px-6 py-3 text-gray-600">{{ Str::limit($produit->description, 60) }}</td>
                    <td class="px-6 py-3 text-gray-900 font-bold">{{ $produit->prix }} MAD</td>
                    <td class="px-6 py-3 flex justify-center space-x-4">
                        <!-- <a href="/modifier/produit" class="px-5 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition">✏️ Modifier</a> -->
                        
                        
                        <form action="/modifier/produit" method="POST" class="inline">
                            @csrf
                            <input type="hidden" name="id_modifier" value="{{ $produit->id }}">
                            <input type="hidden" name="image_modifier" value="{{ $produit->image }}">
                            <input type="hidden" name="titre_modifier" value="{{ $produit->titre }}">
                            <input type="hidden" name="description_modifier" value="{{ $produit->description }}">
                            <input type="hidden" name="prix_modifier" value="{{ $produit->prix }}">
                            <button type="submit" class="px-5 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition">✏️ Modifier</button>
                        </form>
                        
                        
                        <form action="/supprimer/produit" method="POST" class="inline">
                            @csrf
                            <input type="hidden" name="id_supprimer" value="{{ $produit->id }}">
                            <button type="submit" class="px-5 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-lg hover:bg-red-700 transition">🗑️ Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 
</div>
@endsection
