@extends('webProjetDb.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> webProjetModel Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><i class="fa fa-user-tie"></i> Full Name:</strong>
                {{ $contact->name }} {{ $contact->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><i class="fa fa-envelope"></i> Email:</strong>
                {{ $contact->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><i class="fa fa-phone"></i> Phone:</strong>
                {{ $contact->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><i class="fa fa-briefcase"></i> Job:</strong>
                {{ $contact->job }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><i class="fa fa-map-marker-alt"></i> Address:</strong>
                {{ $contact->address }}
            </div>
        </div>
    </div>
@endsection