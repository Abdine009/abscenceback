<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    //

    public function consulter(){
        $matiere = Matiere::all();//Pour récuperer tous les étudiants
        return response()->json($matiere);
    }


    public function enregistrer(Request $request){
        $data = $request->validate([
            'libelle_matiere'=> 'required|string',
            'annee' => 'required|string',
            
        ]);

        $newMatiere = Matiere::create($data);//Pour enregistrer les étudiants 
    }


    public function supprimer(Request $request){
        $idToDelete = $request->id;
        $supprimer = Matiere::destroy($idToDelete);
    }

    public function recuperer(Matiere $matiere){
        $idToUpadate = $matiere->id;
        $matiereToUpadate = Matiere::findOrFail($idToUpadate);
        return response ()->json([$matiereToUpadate]);

    }

    public function modifier(Request $request, Matiere $matiere){

        $data = $request->validate([
            'libelle_matiere'=> 'required|string',
            'annee' => 'required|string',
        ]);


        $matiere->update($data);//Pour enregistrer les étudiants

        // Retourner une réponse indiquant que la modification a été effectuée avec succès
    return response()->json(['message' => 'Matière modifiée avec succès', 'matière' => $matiere]);
    }
}
