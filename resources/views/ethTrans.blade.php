@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Transaction</div>

                @if(session()->has('succes'))
                    <div class="alert alert-success">
                        {{ session()->get('succes') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="panel-body">
                   
                    
                    {{ Form::open(array('url'=>'ethTransaction')) }}
                    
                        {{Form::label('compteD','Numéro du Compte à débiter : ')}}
                        {{Form::select('compteD', $compteE )}}<br>

                        {{Form::label('montant','Montant à transferer : ')}}
                        {{Form::number('montant')}}<br>

                        {{Form::label('compteC','Numéro du Compte à créditer : ')}}
                        {{Form::select('compteC', $compteE )}}<br>
            
                        {{Form::submit('Valider')}}
    
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
