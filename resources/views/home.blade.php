@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br><br>
                    Upload hier je agendapunt:<br><hr>
                    
                    {!! Form::open(['action' => 'AgendaController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                           
                            {{Form::textarea('name','',['class' => 'form-control', 'placeholder' => 'Agendapunt'])}}
                        </div>
                        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
                
                
                       
            </div>
        </div>
   
</div>
</div>
@endsection
