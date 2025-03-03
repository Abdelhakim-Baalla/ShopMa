@extends('layouts.structeur')

@section('title')
    Détails Produit
@endsection

@section('main')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
   
    <nav class="flex mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray-600">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Accueil
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="/produit" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-gray-600">Produits</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $products_details->titre }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-gray-50 p-6 flex items-center justify-center">
                <div class="relative group w-full h-full flex items-center justify-center">
                    <img src="{{ $products_details->image }}" 
                         class="max-h-96 object-contain rounded-lg transition-all duration-300 group-hover:scale-105" 
                         alt="{{ $products_details->titre }}">
                </div>
            </div>
            
            <div class="p-8 flex flex-col">
                <div class="mb-auto">
                    <h1 class="text-3xl font-bold text-gray-900 tracking-tight">{{ $products_details->titre }}</h1>

                    
                </div>

                <div class="border-t border-gray-200 pt-6">
                    <div class="flex items-end justify-between mb-6">
                        <div>
                            <p class="text-gray-500 text-sm">Prix</p>
                            <p class="text-3xl font-bold text-gray-900">{{ $products_details->prix }} <span class="text-sm font-medium">MAD</span></p>
                        </div>
                    </div>

                    <div action="/ajouter/panier" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $products_details->id }}">
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="w-full sm:w-1/4">
                                <label for="quantite" class="block text-sm font-medium text-gray-700 mb-1">Quantité</label>
                                <div class="relative flex items-center">
                                    <button type="button" class="p-2 bg-gray-100 rounded-l-md border border-gray-300" onclick="this.nextElementSibling.stepDown()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                        </svg>
                                    </button>
                                    <input type="number" id="quantity" name="quantite" value="1" min="1" max="99" 
                                           class="p-2 w-full text-center border-t border-b border-gray-300 focus:ring-0 focus:outline-none">
                                    <button type="button" class="p-2 bg-gray-100 rounded-r-md border border-gray-300" onclick="this.previousElementSibling.stepUp()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="w-full sm:w-3/4 flex space-x-4">
                                <button type="submit" class="flex-1 bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-md font-medium transition duration-200 ease-in-out flex items-center justify-center" id="ajouter_panier">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Ajouter au panier
                                </button>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-12">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <button class="border-red-500 text-red-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Détails du produit
                </button>
            </nav>
        </div>
        
        <div class="py-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Description</h3>
            <div class="prose prose-sm max-w-none text-gray-500">
                <p>{{ $products_details->description }}</p>
            </div>
        </div>
    </div>
</div>

<script>
var ajouterPanier = document.getElementById("ajouter_panier");

ajouterPanier.addEventListener('click', function(){
    // localStorage.clear(),
  let quantity = parseInt(document.getElementById("quantity").value);
  let product = {{$products_details->id}};
  let prix = {{ $products_details->prix }};

  let products = localStorage.getItem('products') ? JSON.parse(localStorage.getItem('products')) : [];

  let existingProduct = products.find(item => item.product === product);

  if (existingProduct) {
      existingProduct.quantity = quantity;
  } else {
      products.push({ product: product, quantity: quantity, prix: prix });
  }

  localStorage.setItem('products', JSON.stringify(products));

  console.log(products);
    
});

  



</script>
@endsection