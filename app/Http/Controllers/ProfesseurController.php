<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    //
    public function consulter(){
        $professeur = Professeur::all();//Pour récuperer tous les professeurs
        return response()->json($professeur);
    }

    public function enregistrer(Request $request){
        $data = $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'motDePasse' => 'required|string',
        ]);

        $newProfesseur = Professeur::create($data);//Pour enregistrer les étudiants 
    }


    public function supprimer(Request $request){
        $idToDelete = $request->id;
        $supprimer = Professeur::destroy($idToDelete);
    }


    public function recuperer(Professeur $professeur){
        $idToUpadate = $professeur->id;
        $professeurToUpadate = Professeur::findOrFail($idToUpadate);
        return response ()->json([$professeurToUpadate]);

    }

    public function modifier(Request $request,Professeur $professeur){

        $data = $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'motDePasse' => 'required|string',
        ]);


        $professeur->update($data);//Pour enregistrer les étudiants

        // Retourner une réponse indiquant que la modification a été effectuée avec succès
    return response()->json(['message' => 'Professeur modifié avec succès', 'etudiant' => $professeur]);
    }
}
