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
            <li class="active"><a href="{{route('index')}}">HOME</a></li>
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
           <li><a href="{{route('404page')}}">404 PAGE</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
