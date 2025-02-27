@extends('layouts.structeur')

@section('title')
    Ajouter un Produit
@endsection

@section('main')
<div class="container mx-auto p-6 bg-gray-50 shadow-xl rounded-lg min-h-screen">
    <h1 class="text-3xl font-extrabold mb-6 text-gray-800">Ajouter un nouveaux Produit</h1>

    <form action="/ProduitController/cree" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-semibold mb-2">Titre</label>
            <input type="text" name="titre" id="titre" class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300" required></textarea>
        </div>

        <div class="mb-4">
            <label for="prix" class="block text-gray-700 font-semibold mb-2">Prix (MAD)</label>
            <input type="number" name="prix" id="prix" step="0.01" class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-semibold mb-2">Image du Produit</label>
            <input type="text" name="image" id="image" class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300" >
        </div>

        <div class="flex justify-between mt-6">
            <a href="/dashboard" class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-lg shadow-md hover:bg-gray-600 transition">
                ⬅ Retour
            </a>
            <button type="submit" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">
                ✅ Ajouter le Produit
            </button>
        </div>
    </form>
</div>
@endsection
