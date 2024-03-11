<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClasseController extends Controller
{
    //

    public function consulter(){
        $classe = Classe::all();
        return response()->json($classe);
    }

    public function enregistrer(Request $request){
        $data = $request->validate([
            'libelle_classe'=> 'required|string',
        ]);

        $newClasse = Classe::create($data);//Pour enregistrer les classes
        
    }

    public function supprimer(Request $request){
        $idToDelete = $request->id;
        $supprimer = Classe::destroy($idToDelete);
    }

    public function recuperer(Classe $classe){
        $idToUpadate = $classe->id;
        $classeToUpadate = Classe::findOrFail($idToUpadate);
        return response ()->json([$classeToUpadate]);

    }


    public function modifier(Request $request, Classe $classe){

        $data = $request->validate([
            'libelle_classe'=> 'required|string',
        ]);


        $classe->update($data);//Pour enregistrer les classes

        // Retourner une réponse indiquant que la modification a été effectuée avec succès
    return response()->json(['message' => 'Classe modifiée avec succès', 'etudiant' => $classe]);
    }
}
