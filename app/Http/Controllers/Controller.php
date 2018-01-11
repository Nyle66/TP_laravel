<?php

namespace App\Http\Controllers;

use App\Users;
use App\Bitcoin;
use App\Etherium;
use App\Http\Requests\addBitcoinRequest;
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

}
