@extends('layouts.structeur')

@section('title')
    Modifier un Produit
@endsection

@section('main')
<div class="container mx-auto p-6 bg-gray-50 shadow-xl rounded-lg min-h-screen">
    <h1 class="text-3xl font-extrabold mb-6 text-gray-800">✏️ Modifier le Produit</h1>

   

    <form action="/ProduitController/modifier" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Titre du Produit :</label>
            <input type="text" name="titre" id="titre" value="{{$request->titre_modifier}}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description :</label>
            <textarea name="description" id="description" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{$request->description_modifier}}</textarea>
        </div>

        <div class="mb-4">
            <label for="prix" class="block text-gray-700 font-bold mb-2">Prix (MAD) :</label>
            <input type="number" name="prix" id="prix" value="{{$request->prix_modifier}}" step="0.01" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Image actuelle :</label>

            <img src="{{$request->image_modifier}}" alt="{{$request->titre_modifier}}" class="w-32 h-32 object-cover rounded-lg shadow-md">
            
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Changer l'image :</label>
            <input type="text" name="image" id="image" value="{{$request->image_modifier}}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <input type="hidden" name="id_modifier" value="{{$request->id_modifier}}">
        <div class="flex justify-between items-center mt-6">
            <a href="/dashboard" class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-lg shadow-lg hover:bg-gray-700 transition">🔙 Retour</a>
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition">💾 Enregistrer</button>
        </div>
    </form>
</div>
@endsection
