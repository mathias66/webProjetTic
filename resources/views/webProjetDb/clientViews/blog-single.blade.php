@extends('webProjetDb/clientViews.template')

@section('title') 
    Blog
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
            <h2>Blog Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Blog Details</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Blog  -->
  <section id="aa-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-area">
            <div class="row">
              <div class="col-md-8">
                <div class="aa-blog-content">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="aa-blog-single aa-blog-details">
                        <figure class="aa-blog-img">
                          <a href="#"><img alt="img" src="img/slider/1.jpg"></a>
                          <span class="aa-date-tag">15 April, 16</span>
                        </figure>
                        <div class="aa-blog-single-content">
                          <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> Admin</a>
                            <a class="aa-blog-comments" href="#"><i class="fa fa-comment-o"></i>6</a>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestias eligendi quidem vero alias ea. Accusantium quas soluta recusandae, ducimus voluptates aut, assumenda earum velit, dignissimos repellendus delectus voluptate, labore.</p>
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p>
                            <cite>- Mr. josep</cite>
                          </blockquote>
                          <h1>H1 Title</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                          <h2>H2 Title</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                          <h3>H3 Title</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                          <h4>H4 Title</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, provident.</p>
                          
                        </div>                   
                      </article>
                    </div>
                    <!-- Post tags -->
                    <div class="col-md-12">
                      <div class="aa-blog-post-tag">
                        <ul>
                          <li>TAGES:</li>
                          <li><a href="#">POPERTY,</a></li>
                          <li><a href="#">LAND,</a></li>
                          <li><a href="#">FLAT,</a></li>
                          <li><a href="#">RENT,</a></li>
                          <li><a href="#">SALE,</a></li>
                          <li><a href="#">OFFICE</a></li>                          
                        </ul>
                      </div>
                    </div>
                    <!-- Social Share -->
                    <div class="col-md-12">
                      <div class="aa-properties-social">
                       <ul>
                         <li>Share</li>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                       </ul>
                     </div>
                    </div>
                    <!-- post navigation -->
                    <div class="col-md-12">
                      <div class="aa-blog-navigation">
                        <div class="aa-blog-pagination-left">
                          <a href="#" class="aa-prev">
                            <span class="fa fa-angle-double-left">                            
                            </span>
                            PREV
                          </a>
                        </div>
                        <div class="aa-blog-pagination-right">
                          <a href="#" class="aa-next">
                            NEXT
                            <span class="fa fa-angle-double-right">                            
                            </span>
                          </a>                          
                        </div>
                      </div>
                    </div>
                    <!-- Related blog post -->
                    <div class="col-md-12">
                      <div class="aa-blog-related-post">
                        <div class="aa-title">
                          <h2>Related Post</h2>
                          <span></span>
                        </div>
                        <div class="aa-blog-related-post-area">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <article class="aa-blog-single">
                                <figure class="aa-blog-img">
                                  <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                                  <span class="aa-date-tag">15 April, 16</span>
                                </figure>
                                <div class="aa-blog-single-content">
                                  <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                  <div class="aa-blog-single-bottom">
                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                  </div>
                                </div>                   
                              </article>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <article class="aa-blog-single">
                                <figure class="aa-blog-img">
                                  <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                                  <span class="aa-date-tag">15 April, 16</span>
                                </figure>
                                <div class="aa-blog-single-content">
                                  <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                  <div class="aa-blog-single-bottom">
                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                  </div>
                                </div>                   
                              </article>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                    <!-- comment threats -->
                    <div class="col-md-12">
                      <div class="aa-comments-area">
                        <h3>5 Comments</h3>
                        <div class="comments">
                          <ul class="commentlist">
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-1.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Adam Barney</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-2.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">John Smith</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                            <ul class="children">
                              <li class="author-comments">
                                <div class="media">
                                  <div class="media-left">    
                                      <img alt="img" src="img/testimonial-3.png" class="media-object news-img">      
                                  </div>
                                  <div class="media-body">
                                   <h4 class="author-name">Admin</h4>
                                   <span class="comments-date"> 20th April, 2016</span>
                                   <span class="author-tag">Author</span>
                                   <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                   <a class="reply-btn" href="#">Reply</a>
                                  </div>
                                </div>
                              </li>
                              <ul class="children">
                                <li>
                                  <div class="media">
                                    <div class="media-left">    
                                        <img alt="img" src="img/testimonial-1.png" class="media-object news-img">      
                                    </div>
                                    <div class="media-body">
                                     <h4 class="author-name">Adam Barney</h4>
                                     <span class="comments-date"> 20th April, 2016</span>
                                     <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                     <a class="reply-btn" href="#">Reply</a>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </ul>
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-2.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Jhon Smith</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <!-- comments pagination -->
                          <nav>
                            <ul class="pagination comments-pagination">
                              <li>
                                <a aria-label="Previous" href="#">
                                  <span aria-hidden="true">«</span>
                                </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a aria-label="Next" href="#">
                                  <span aria-hidden="true">»</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>   
                    <!-- Respond box -->
                    <div class="col-md-12">
                      <div id="respond">
                        <h3 class="reply-title">Leave a Comment</h3>
                        <form id="commentform">
                          <p class="comment-notes">
                            Your email address will not be published. Required fields are marked <span class="required">*</span>
                          </p>
                          <p class="comment-form-author">
                            <label for="author">Name <span class="required">*</span></label>
                            <input type="text" required="required" size="30" value="" name="author">
                          </p>
                          <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" required="required" aria-required="true" value="" name="email">
                          </p>
                          <p class="comment-form-url">
                            <label for="url">Website</label>
                            <input type="url" value="" name="url">
                          </p>
                          <p class="comment-form-comment">
                            <label for="comment">Comment</label>
                            <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                          </p>
                          <p class="form-allowed-tags">
                            You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                          </p>
                          <p class="form-submit">
                            <input type="submit" value="Post Comment" class="aa-browse-btn" name="submit">
                          </p>        
                        </form>
                      </div>
                    </div>
                  </div>                                   
                </div>
              </div>
              <!-- Start blog sidebar -->
              <div class="col-md-4">
                <aside class="aa-blog-sidebar">
                  <!-- Start single sidebar -->
                  <div class="aa-blog-sidebar-single">
                    <form action="">
                      <div class="aa-blog-search">
                        <input class="aa-search-text" type="text" placeholder="Search...">
                        <button class="aa-search-submit" type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                  <!-- Start single sidebar -->
                  <div class="aa-blog-sidebar-single">
                    <h3>Categories</h3>
                    <ul class="aa-blog-catg">
                      <li>Properties <span>15000</span></li>
                      <li>Apartment <span>5000</span></li>
                      <li>Office  <span>3000</span></li>
                      <li>Residential <span>4500</span></li>
                      <li>Commercial <span>1000</span>
                          <ul>
                            <li>category 2.1 <span>50</span></li>
                            <li>category 2.2 <span>100</span></li>
                          </ul>
                      </li>
                      <li>Villa <span>800</span></li>
                      <li>Bungalow  <span>200</span></li>
                      <li>News <span>375</span></li>
                      <li>Reviews <span>458</span></li>
                    </ul>
                  </div>
                  <!-- Start single sidebar -->
                  <div class="aa-blog-sidebar-single">
                    <h3>Tags</h3>
                    <div class="tag-cloud">
                      <a href="#">Apartment</a>
                      <a href="#">Propery</a>
                      <a href="#">Residential</a>
                      <a href="#">Commercial</a>
                      <a href="#">Office</a>
                      <a href="#">Rent</a>
                      <a href="#">Sale</a>
                      <a href="#">Villa</a>
                    </div>                    
                  </div>
                  <!-- Start single sidebar -->
                  <div class="aa-blog-sidebar-single">
                    <h3>Recent Post</h3>
                    <div class="aa-blog-recent-post">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img alt="img" src="img/blog-img-3.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">This is Title</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                          <span>15 April, 16</span>
                        </div>              
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img alt="img" src="img/blog-img-2.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">This is Title</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                          <span>15 April, 16</span>
                        </div>              
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img alt="img" src="img/blog-img-1.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">This is Title</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                          <span>15 April, 16</span>
                        </div>              
                      </div>
                    </div>                    
                  </div>
                  <!-- Start single sidebar -->
                  <div class="aa-blog-sidebar-single">                    
                    <div class="aa-banner-ads">
                      <a href="#">
                        <img src="img/banner-ads.jpg" alt="banner img">
                      </a>
                    </div>                    
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog  -->

  @include('webProjetDb/clientViews.footer')
        @include('webProjetDb/clientViews.jqueryLibrary')
    @stop