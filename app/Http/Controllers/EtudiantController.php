<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //

    public function index (){
        //return view('it works');
        return response(['message' => 'It works!'], 200);
    }

    public function creer (){

    }

    public function enregistrer(Request $request){
        $data = $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'motDePasse' => 'required|string',
        ]);

        $newEtudiant = Etudiant::create($data);//Pour enregistrer les étudiants 
    }

    public function consulter(){
        $etudiant = Etudiant::all();//Pour récuperer tous les étudiants
        return response()->json($etudiant);
    }
    public function supprimer(Request $request){
        $idToDelete = $request->id;
        $supprimer = Etudiant::destroy($idToDelete);
    }

    public function recuperer(Etudiant $etudiant){
        $idToUpadate = $etudiant->id;
        $etudiantToUpadate = Etudiant::findOrFail($idToUpadate);
        return response ()->json([$etudiantToUpadate]);

    }
    public function modifier(Request $request,Etudiant $etudiant){

        $data = $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'motDePasse' => 'required|string',
        ]);


        $etudiant->update($data);//Pour enregistrer les étudiants

        // Retourner une réponse indiquant que la modification a été effectuée avec succès
    return response()->json(['message' => 'Étudiant modifié avec succès', 'etudiant' => $etudiant]);
    }
}
