@extends('webProjetDb/clientViews.template')

@section('title')
  Home Properties | Signin
@stop

@section('content')

<section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="{{route('index')}}">Property Home</a>
                <h4>Sign in to your account</h4>
              </div>
              <form class="contactform">                                                 
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Remember me
                </label>                                                          
                </div> 
                <div class="aa-single-submit">
                  <input type="submit" value="Send Message" class="aa-browse-btn" name="submit">  
                  <p>Don't Have A Account Yet? <a href="{{route('register')}}">CREATE NOW!</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('webProjetDb/clientViews.jqueryLibrary')
  @stop