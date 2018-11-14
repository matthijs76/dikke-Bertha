@extends('layout')




 @section('content')
<div class="main">
	  <H1 id="titel">Agenda</H1>
    
    <h2 id="secTitel">Wij zijn te vinden op de volgende evenementen:</h2>
    <p  style= "text-align: center;">
    
    @foreach ($agendas as $agenda)
        <li id="agenda">{{ $agenda->name }} </li>
    @endforeach
    
    
    </p>
      <div id="mainpic">
      </div>
      </div>

@endsection