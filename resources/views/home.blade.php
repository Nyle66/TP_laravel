@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button><a href="{{ url('/addCompte') }}">Ajouter un Compte</a></button><br><br>
                    <h2>Comptes Bitcoin :</h2>
                    <?php 
                    use App\Bitcoin;
                    $bitcoin = Bitcoin::all();
                    
                    foreach ($bitcoin as $bit){
                        echo "Compte n°";
                        echo $bit->id;
                        echo "  -->  Solde : ";
                        echo $bit->valeur;
                        echo "<hr>";
                    }
                    ?>
                    <button><a href="{{ url('/bitTrans') }}">Effectuer une transaction</a></button>
                    <hr>
                    <h2>Comptes Etherium :</h2>
                    <?php 
                    use App\Etherium;
                    $etherium = Etherium::all();
                    
                    foreach ($etherium as $eth){                    
                        $url = "/bitTrans/" . $eth->id;
                        echo "Compte n°";
                        echo $eth->id;
                        echo "  -->  Solde : ";
                        echo $eth->valeur;
                        echo "<hr>";
                    }
                    ?>
                    <button><a href="{{ url('/ethTrans') }}">Effectuer une transaction</a></button>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
