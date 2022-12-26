
 <!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo("title");?></title>
    <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
    <header class="header">
      <a class="site-title  pt-lg-4 ms-0" href="index.html"></a>
           
        <nav class="navbar  navbar-expand-md navbar-light  py-5 ">
            <div class="container  ">
              <a class="navbar-brand "  style="color:#fff;" href="#">Traveling</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
             <div class="collapse navbar-collapse " id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px; color:#fff;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo home_url();?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="http://localhost/wordpress/sample-page/">about us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdwon
                    </a>
                    <ul class="dropdown-menu"  data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>"aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">link</a></li>
                      <li><a class="dropdown-item" href="#">link</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">link</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Link</a>
                  </li>
                  <li class="nav-item">
                  <button type="button" class="btn btn-primary">Primary</button>
                  </li>
                </ul>
              </div>
      </div>
          </nav>
          <section id="Hero" class="text-light   text-start   py-5">
            <div class="container">
                <div class="row raw-cols-lg-2  " >
                    <div class="col col-lg-6  " >
                        <h1 class="py-5"><?php the_title();?></h1>
                        
                         <article class="article-fluid fs-6">
                          <?php 
                      if ( have_posts() ) {
                          while ( have_posts() ) {
                              the_post();
                              the_content();
                            }  
                       }?>
                         </article>
                      
                    </div>
                    </div>
                   <a class="d-flex justify-content-md-center justify-content-lg-start py-5" href="#"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"></path></svg>
                    <p > watch Video</p>
                </a>
                </div> 
          </section>      
          </header>
