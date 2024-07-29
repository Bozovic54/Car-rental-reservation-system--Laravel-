<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Rezervacija;
class RezervacijaController extends Controller
{
    public function homepage(){
        return view('homepage',[
            'automobili'=>Auto::all()
        ]);
    }
    public function autoDetaljno($id){
        return view('auto',[
            'auto'=>Auto::find($id)
        ]);
    }
    public function unosRezervacije(Request $request,$id){
        $novaRezervacija= new Rezervacija();
        $novaRezervacija->ime=$request->input('ime');
        $novaRezervacija->prezime=$request->input('prezime');
        $novaRezervacija->datum=$request->input('datum');
        $novaRezervacija->broj_dana=$request->input('broj_dana');
        $novaRezervacija->auto_id=$id;
        $novaRezervacija->save();
        return redirect(route('homepage'));
    }
    public function spisakRezervacija(){
        return view('rezervacije', ['rezervacije'=>Rezervacija::all()]);
    }
    public function rezervacijaDetaljno($id){
        return view('rezervacija',[
            'rezervacija'=>Rezervacija::find($id)
        ]);
    }
    public function promenaStatusa(Request $request,$id){
        $rezervacija=Rezervacija::find($id);
        $rezervacija->status=$request->input('status');
        $rezervacija->save();
        return redirect(route('spisak'));
    }
    
     
}
