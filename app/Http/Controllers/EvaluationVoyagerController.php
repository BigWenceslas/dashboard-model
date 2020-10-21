<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Service;
use App\EvaluationsEntreprisesClient;
use App\EvaluationsEntreprisesDeveloppement;
use App\EvaluationsEntreprisesPerformance;
use App\EvaluationsEntreprisesProbleme;
use App\EvaluationsEntreprisesProduit;
use App\DonneesEvaluation;
use App\User;

class EvaluationVoyagerController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    
   public function show(Request $request, $id)
    {
        $clients = EvaluationsEntreprisesClient::get();
        $developpements = EvaluationsEntreprisesDeveloppement::get();
        $performances = EvaluationsEntreprisesPerformance::get();
        $problemes = EvaluationsEntreprisesProbleme::get();
        $produits = EvaluationsEntreprisesProduit::get();
        $reponses = DonneesEvaluation::find($id);
        $reponses_v = [];
        if($reponses){
            $reponses_v = @unserialize($reponses->contenu);
            array_shift($reponses_v);
            $reponses->contenu = $reponses_v; 
        }
        //dd($reponses->contenu);
        $user = User::find($reponses->user_id);
        if ($user) {
            $user = $user->name;
        }else{
            $user = "Inexistant";
        }
        return view('vendor.voyager.donnees-evaluations.read',compact('clients','developpements','performances'
        ,'problemes','produits','reponses','user'));
    } 
}