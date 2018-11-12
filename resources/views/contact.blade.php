@extends('layout')

@section('title')
 Contact us
 @endsection

@section('content')
<div class="main">
	  <H1 id="titel">Dikke Bertha koffie op kolen</H1>
    
      <div id="formulier">        
        <div>
            @if (Session::has('flash_message'))
            <div class="alert alert-succes">{{ Session::get('flash_message') }}</div>
            @endif
            <form action="{{ route('contact.store') }}" method="post">
                {{ csrf_field()}}
                <input type="text" name="firstname" value="" placeholder="Naam">
                @if ($errors->has('firstname'))
                    <small class="form-text invalid-feedback">{{ $errors->first('firstname')}}</small>
                @endif  <br><br>  
                <input type="text" name="lastname" value="" placeholder="Achternaam">
                @if ($errors->has('lastname'))
                    <small class="form-text invalid-feedback">{{ $errors->first('lastname')}}</small>
                @endif  <br><br>  
                <input type="email" name="email" value="" placeholder="Uw email adres">
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
                @endif   <br><br> 
                <textarea name="message" rows="10" cols="30" placeholder="Uw vraag"></textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                @endif    
                <br>
                <input type="submit">
            </form>
        </div>    
        </div>
    </div>

@endsection
