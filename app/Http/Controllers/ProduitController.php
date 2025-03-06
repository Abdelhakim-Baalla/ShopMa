<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produits;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ProduitController extends Controller
{

    public function cree(Request $request)
    {
        DB::table('produits')->insert([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => $request->image,
            'created_at' => Carbon::now(),
        ]);

        return redirect('/dashboard');
    }

    public function index()
    {
        $products = DB::table('produits')->get();
        return view('/dashboard', compact('products'));
    }

    public function produit()
    {
        $products = DB::table('produits')->get();
        return view('/produit', compact('products'));
    }


    public function modifier(Request $request)
    {

        return view('/modifier_produit', compact('request'));
    }

    public function enregisterModification(Request $request)
    {

        DB::table('produits')->where('id', $request->id_modifier)->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => $request->image,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/dashboard');
    }


    public function supprimer(Request $request)
    {
        $id_supprimer = $request->id_supprimer;

        DB::table('produits')->where('id', '=', $id_supprimer)->delete();
        return redirect('/dashboard');
    }


    public function details(Request $request)
    {
        $id_details = $request->id_details;

        $products_details = DB::table('produits')->where('id', '=', $id_details)->first();

        // var_dump( $products_details);
        // die();
        return view('/details_produit', compact('products_details'));
    }


    public function Panier(Request $request)
    {
        // Log::info($request->all());
        
        $data = $request->json()->all();

        // Log::info($data);

        $products = [];
        foreach ($data as $product) {
            DB::table('produits')->where('id', $product['product'])->update([
                'quantity_selecter' => $product['quantity'],
                'prix_selecter' => $product['prix']
            ]);
            array_push($products, DB::table('produits')->where('id', '=', $product['product'])->get());
            
        }


        return response()->json($products);
    }


    public function commande(Request $request){
        echo 'commande';
        var_dump($request) ;
    }
}
