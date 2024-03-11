<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abscence;

class AbscenceController extends Controller
{
    //


    public function enregistrer(Request $request){
        $data = $request->validate([
            'justification'=> 'string',
            'date' => 'required|string',
        ]);

        $newAbscence = abscence::create($data);//Pour enregistrer les étudiants 
    }

    public function consulter(){
        $abscence = Abscence::all();//Pour récuperer tous les étudiants
        return response()->json($abscence);
    }
    public function supprimer(Request $request){
        $idToDelete = $request->id;
        $supprimer = Abscence::destroy($idToDelete);
    }

    public function recuperer(Abscence $abscence){
        $idToUpadate = $abscence->id;
        $abscenceToUpadate = Abscence::findOrFail($idToUpadate);
        return response ()->json([$abscenceToUpadate]);

    }
    public function modifier(Request $request,Abscence $abscence){

        $data = $request->validate([
            'justification'=> 'string',
            'date' => 'required|string',
        ]);


        $abscence->update($data);//Pour enregistrer les étudiants

        // Retourner une réponse indiquant que la modification a été effectuée avec succès
    return response()->json(['message' => 'Abscence modifiée avec succès', 'abscence' => $abscence]);
    }

}
