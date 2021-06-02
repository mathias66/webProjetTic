@extends('webProjetDb/clientViews.template')

@section('title')
  Home Properties | Register
@stop

@section('content')
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.html">Property Home</a>
                <h4>Create your account and Stay with us</h4>
              </div>
              <form class="contactform">                                                 
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="name">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                  <input type="password" name="confirm-password"> 
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit">                    
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
