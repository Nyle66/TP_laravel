<?php

namespace App\Http\Controllers;

use DB;
use App\Users;
use App\Bitcoin;
use App\Etherium;
use App\Http\Requests\addBitcoinRequest;
use App\Http\Requests\addEtheriumRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addCompteMethod(){
        return view('addCompte');
    }

    public function bitTransMethod(){
        return view('bitTrans');
    }

    public function addBitcoinService(addBitcoinRequest $request)
    {
        $r = $request->all();

        $solde = $r['solde'];
        //$currentUser = $r[''];

        $bitcoin = new Bitcoin();
        $bitcoin->key = rand();
        $bitcoin->user_id = 1;
        $bitcoin->valeur = $solde;
        $bitcoin->save();

        return redirect()->back();
    }

    public function addEtheriumService(addEtheriumRequest $request)
    {
        $r = $request->all();

        $solde = $r['solde'];

        //$currentUser = $r[''];

        $etherium = new Etherium();
        $etherium->key = rand();
        $etherium->user_id = 1;
        $etherium->valeur = $solde;
        // dump($etherium);
        // die();
        $etherium->save();

        return redirect()->back();
    }

    public function bitTransactionMethod(Request $request)
    {
        $r = $request->all();

        $montant = $r['montant'];
        $compteD = $r['compteD'];
        $compteC = $r['compteC'];

        $bitcoin1 = Bitcoin::find($compteD);
        $bitcoin2 = Bitcoin::find($compteC);

        $montantD = $bitcoin1->valeur - $montant;
        $montantC = $bitcoin2->valeur + $montant;


        if($montantD >= 0){
            DB::table('bitcoins')
            ->where('id', $compteD)
            ->update(['valeur' => $montantD]);
    
            DB::table('bitcoins')
            ->where('id', $compteC)
            ->update(['valeur' => $montantC]);

            return redirect()->back()->with('succes', 'Transaction réussie !');
        }
        else{
            return redirect()->back()->with('error', 'Transaction échouée !');
        }
        

        
    }

}
