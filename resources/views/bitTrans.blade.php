@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                    <?php 
                        use App\Bitcoin;
                        $bitcoin1 = Bitcoin::find(1);
                        $bitcoin2 = Bitcoin::find(2);
                    ?>
                    
                    {{ Form::open(array('url'=>'bitTransaction')) }}
                    
                        {{Form::label('compteD','Compte à débiter : ')}}
                        {{Form::select('compteD', array(
                            '1' => 'Compte n°1',
                            '2' => 'Compte n°2'
                        ))}}<br>

                        {{Form::label('montant','Montant à transferer : ')}}
                        {{Form::number('montant')}}<br>

                        {{Form::label('compteC','Compte à créditer : ')}}
                        {{Form::select('compteC', array(
                            '1' => 'Compte n°1',
                            '2' => 'Compte n°2'
                        ))}}<br>
            
                        {{Form::submit('Valider')}}
    
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
