@extends('layouts.structeur')

@section('title')
    Accueil
@endsection

@section('main')
<div class="flex flex-col min-h-screen">
   
    <div class="flex-grow container mx-auto p-6 bg-gray-50 shadow-xl rounded-lg">

        <div class="relative bg-cover bg-center h-96 rounded-lg shadow-lg flex items-center justify-center text-white"
            style="background-image: url('https://images.pexels.com/photos/1087727/pexels-photo-1087727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
            <div class=" p-8 rounded-lg text-center">
                <h1 class="text-5xl font-extrabold text-yellow-400">Bienvenue sur <span class="text-white">Shop<p class="text-red-500 inline">Ma</p></span> 🛒</h1>
                <p class="text-lg mt-2">Découvrez nos meilleurs produits à des prix incroyables.</p>
                <a href="/produit" class="mt-4 inline-block px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition">
                    Voir les Produits
                </a>
            </div>
        </div>
        <div class="mt-12 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Pourquoi choisir <span class="text-red-500">ShopMa</span> ?</h2>
            <p class="text-lg mt-4 text-gray-600 px-4 md:px-20">
                Nous offrons une large gamme de produits de qualité aux meilleurs prix. Nos services sont fiables, et nous mettons l'accent sur la satisfaction de nos clients.
            </p>
            <div class="mt-6 flex flex-wrap justify-center gap-8">
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <h3 class="text-xl font-bold text-green-600">✅ Produits de Qualité</h3>
                    <p class="text-gray-700 mt-2">Nous sélectionnons les meilleurs produits pour vous.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <h3 class="text-xl font-bold text-blue-600">🚚 Livraison Rapide</h3>
                    <p class="text-gray-700 mt-2">Recevez vos commandes rapidement et en toute sécurité.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <h3 class="text-xl font-bold text-yellow-600">💰 Meilleurs Prix</h3>
                    <p class="text-gray-700 mt-2">Des offres exceptionnelles toute l'année.</p>
                </div>
            </div>
        </div>


    </div>

    
</div>
@endsection
