<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produits;
use Carbon\Carbon;
class ProduitController extends Controller
{

    public function cree(Request $request){
        DB::table('produits')->insert([
            'titre'=>$request->titre,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'image'=>$request->image,
            'created_at' => Carbon::now(),
          ]);
        
        return redirect('/dashboard');
    }
    
    public function index(){
        $products = DB::table('produits')->get();
        return view('/dashboard', compact('products'));
        
    }

    public function produit(){
        $products = DB::table('produits')->get();
        return view('/produit', compact('products'));
        
    }


    public function modifier(Request $request){
        
        return view('/modifier_produit', compact('request'));
        
    }

    public function enregisterModification(Request $request){
        
        DB::table('produits')->where('id', $request->id_modifier)->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => $request->image,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/dashboard');
        
    }


    public function supprimer(Request $request){
        $id_supprimer = $request->id_supprimer;

        DB::table('produits')->where('id', '=', $id_supprimer)->delete();
        return redirect('/dashboard');
        
    }


    public function details(Request $request){
        $id_details = $request->id_details;

        $products_details = DB::table('produits')->where('id', '=', $id_details)->get();

        // var_dump( $products_details[0]->id);
        // die();
        return view('/details_produit', compact('products_details'));
        
    }
}
