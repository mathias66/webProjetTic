@extends('webProjetDb/clientViews.template')

@section('title')
  Home Properties | 404
@stop

@section('content')  
<!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    66075226
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@markups.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="{{route('register')}}" class="aa-register">Register</a>
                  <a href="{{route('signin')}}" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->
  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
          <a class="navbar-brand aa-logo" href="{{route('index')}}"> Home <span>Property</span></a>
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->                     
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="{{route('index')}}">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('properties')}}">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="{{route('properties')}}">PROPERTIES</a></li>
                <li><a href="{{route('propertiesDetail')}}">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li>
            <li><a href="{{route('gallery')}}">GALLERY</a></li>                                         
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('blogArchive')}}">BLOG <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="{{route('blogArchive')}}">BLOG</a></li>
                <li><a href="{{route('blogSingle')}}">BLOG DETAILS</a></li>                                            
              </ul>
            </li>
            <li><a href="{{route('contact')}}">CONTACT</a></li>
            <li class="active"><a href="#">404 PAGE</a></li>
            <!-- <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties-detail.html">PRODUCT DETAILS</a></li>
                <li><a href="blog-single.html">BLOG DETAILS</a></li>                
                <li class="active"><a href="404.html">404 PAGE</a></li>                
              </ul>
            </li> -->
          </ul>                          
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start Proerty header  -->
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>404 Error</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">404</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->
  <section id="aa-error">
    <div class="container">
      <row>
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>404</h2>
            <p><span class="fa fa-warning"></span>Oops! The Page you requested was not found!</p>
            <a href="#">Back Home</a>
          </div>
        </div>
      </row>
    </div>
  </section>


  @include('webProjetDb/clientViews.footer')
  @include('webProjetDb/clientViews.jqueryLibrary')
  @stop