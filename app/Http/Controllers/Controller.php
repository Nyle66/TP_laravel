<?php

namespace App\Http\Controllers;

use App\Users;
use App\Bitcoin;
use App\Etherium;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homeMethod(){
        return view('home');
    }

    public function compteMethod(){
        return view('compte');
    }

}
