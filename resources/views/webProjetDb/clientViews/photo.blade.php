@extends('webProjetDb.layout')


@section('content')

    <br>

    <div class="col-sm-offset-4 col-sm-4">

        <div class="panel panel-info">

            <div class="panel-heading">Envoi d'une photo</div>

            <div class="panel-body"> 

                @if(session()->has('error'))

                    <div class="alert alert-danger">{!! session('error') !!}</div>

                @endif

                <form name = "myform1" method="POST" action="{!! url('sendPhoto') !!}" accept-charset="UTF-8">
	            	{!! csrf_field() !!}
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        <label for="image">Image</label>
                        <input type = "file" name ='image' values ="" class = "form-control"></input>
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}

                    </div>
                    <div>
                        <input type = "submit" name ='' values ="Envoyer" class = "btn btn-info pull-right"></input>
                    </div>
                </form>

            </div>

        </div>

    </div>

@stop