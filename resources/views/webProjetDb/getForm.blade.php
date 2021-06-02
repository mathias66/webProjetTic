@extends('webProjetDb.templateForm')

@section('containt')
<form method="POST" action="{!! url('usersForm') !!}" accept-charset="UTF-8">
		{!! csrf_field() !!}   
		<label for="nom">Entrez votre nom : </label>    
		<input name="nom" type="text" id="nom">  <br>  
		<input type="submit" value="Envoyer !">	
	</form>
@stop