@extends('webProjetDb/clientViews.template')

@section('title') 
    IMMOPORTO
@stop

    @section('content')
        @include('webProjetDb/clientViews.loader')
        @include('webProjetDb/clientViews.headerSection')
        @include('webProjetDb/clientViews.menuSection')
        @include('webProjetDb/clientViews.slider')
        @include('webProjetDb/clientViews.search')
        @include('webProjetDb/clientViews.aboutUs')
        @include('webProjetDb/clientViews.latestProperty')
        @include('webProjetDb/clientViews.serviceSection')
        @include('webProjetDb/clientViews.ourAgentSection')
        @include('webProjetDb/clientViews.clientTestimonial')
        @include('webProjetDb/clientViews.clientBrand')
        @include('webProjetDb/clientViews.latestBlog')
        @include('webProjetDb/clientViews.footer')
        @include('webProjetDb/clientViews.jqueryLibrary')
    @stop   