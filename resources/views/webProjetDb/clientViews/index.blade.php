@extends('webProjetDb/clientViews.template')

@section('title')
  Home Properties | Home
@stop

@section('content')  
  @include('webProjetDb/clientViews.loader')
  @include('webProjetDb/clientViews.headerSection')
  @include('webProjetDb/clientViews.menuSection')
  @include('webProjetDb/clientViews.slider')
  @include('webProjetDb/clientViews.search')
  @include('webProjetDb/clientViews.aboutUs')
  @include('webProjetDb/clientViews.latestProperty')
  include('webProjetDb/clientViews.serviceSection')

  

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->

  @include('webProjetDb/clientViews.ourAgentSection')
  @include('webProjetDb/clientViews.clientTestimonial')
  @include('webProjetDb/clientViews.clientBrand')
  @include('webProjetDb/clientViews.latestBlog')
  @include('webProjetDb/clientViews.footer')
  @include('webProjetDb/clientViews.jqueryLibrary')
@stop   