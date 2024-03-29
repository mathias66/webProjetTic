@extends('webProjetDb/clientViews.template')

    @section('title') 
        Gallery
    @stop

@section('content')
        @include('webProjetDb/clientViews.loader')
        @include('webProjetDb/clientViews.headerSection')
        @include('webProjetDb/clientViews.menuSection')
    

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Gallery</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Gallery</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <section id="aa-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-gallery-area">
            <div class="aa-title">
              <h2>Gallery View</h2>
              <span></span>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
            </div>
            <!-- Start gallery -->
            <div class="aa-gallery-content">
              <div class="aa-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li data-filter="all" class="filter active">All</li>
                  <li data-filter=".apartment" class="filter">Apartment</li>
                  <li data-filter=".livingroom" class="filter">Living Room</li>
                  <li data-filter=".bedroom" class="filter">Bedroom</li>
                  <li data-filter=".kitchen" class="filter">Kitchen</li>
                  <li data-filter=".garage" class="filter">Garage</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div id="mixit-container" class="aa-gallery-body">
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix apartment">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/1.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/1.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>                  
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix garage">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/2.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/2.jpg"><span class="fa fa-eye"></span></a>
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>                  

                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix livingroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/3.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/3.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix bedroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/4.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/4.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix apartment">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/5.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/5.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix livingroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/6.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/6.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix apartment">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/7.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/7.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>                  
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix garage">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/8.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/8.jpg"><span class="fa fa-eye"></span></a>
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>                  

                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix livingroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/9.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/9.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix bedroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/10.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/10.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix kitchen">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/11.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/11.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix livingroom">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="img/gallery/small/12.jpg" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="img/gallery/big/12.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('webProjetDb/clientViews.footer')
  @include('webProjetDb/clientViews.jqueryLibrary')
@stop   