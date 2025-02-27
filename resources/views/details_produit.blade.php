@extends('layouts.structeur')

@section('title')
    Details Produit
@endsection

@section('main')
<div class="container mx-auto bg-white p-6 rounded-lg shadow-lg min-h-screen">
    <h1 class="text-3xl font-extrabold mb-6 text-gray-800">Détails</h1>

    <div class="flex border border-gray-300 items-center gap-4">
        <div class="shadow-md">
            <img src="{{$products_details[0]->image}}" class="w-full max-w-96 border-r border-gray-300 shadow-sm focus:ring focus:ring-blue-300" alt="{{$products_details[0]->titre}}">
        </div>

        <div class="mb-4 w-full">
            <h1 class=" text-3xl font-extrabold text-gray-800 w-full p-3">{{$products_details[0]->titre}}</h1>
            <p class="w-full p-3 text-xl italic">{{$products_details[0]->prix}} MAD</p>

            <form action="/ProduitController/cree" method="POST" >
                @csrf
                <div class="flex justify-between mt-3 items-center">
                    <div>
                     <label for="quantite" class="block text-gray-700 font-bold mb-1">Quantité :</label>
                     <input type="number" id="quantite" name="quantite" class="px-6 py-3 text-gray-700 border border-gray-200 font-semibold rounded-lg shadow-md transition"> 
                    </div>
                    
                    <button type="submit" class="px-6 py-3 mr-10 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">
                        🛒 Ajouter au panier
                    </button>
                </div>
            </form>
            
    </div>

    
</div>

        <div class="border border-gray-200 rounded-lg items-center mt-10">
            <h1 class=" text-3xl font-extrabold text-gray-800 w-full p-1">Description</h1>
            <article class=" text-gray-700 font-light mb-2 w-full p-3 italic">{{$products_details[0]->description}}</article>
        </div>
        

    
</div>
@endsection
