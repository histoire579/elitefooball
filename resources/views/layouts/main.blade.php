<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  @yield('extra-meta')
  <title>Elitefootball </title>
  <link href="{{ asset('dist/assets/img/favicon.png') }}" rel="shortcut icon">
  <link href="{{ asset('dist/assets/css/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/elitefoot.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/fonts/dm.css') }}" rel="preload"  as="style" onload="this.rel='stylesheet'">
  @yield('extra-css')
  @yield('extra-script')
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img class="logo-dark" src="dist/assets/img/logo.png" srcset="dist/assets/img/logo@2x.png 2x" alt="" />
              <img class="logo-light" src="dist/assets/img/logo-light.png" srcset="dist/assets/img/logo-light@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                        <li class="col"><a class="dropdown-item" href="./demo1.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi1.jpg" srcset="dist/assets/img/demos/mi1@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo I</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo2.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi2.jpg" srcset="dist/assets/img/demos/mi2@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo II</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo3.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi3.jpg" srcset="dist/assets/img/demos/mi3@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo III</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo4.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi4.jpg" srcset="dist/assets/img/demos/mi4@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo IV</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo5.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi5.jpg" srcset="dist/assets/img/demos/mi5@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo V</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo6.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi6.jpg" srcset="dist/assets/img/demos/mi6@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo VI</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo7.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi7.jpg" srcset="./assets/img/demos/mi7@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo VII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo8.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi8.jpg" srcset="dist/assets/img/demos/mi8@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo VIII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo9.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi9.jpg" srcset="dist/assets/img/demos/mi9@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo IX</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo10.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi10.jpg" srcset="dist/assets/img/demos/mi10@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo X</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo11.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi11.jpg" srcset="dist/assets/img/demos/mi11@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XI</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo12.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi12.jpg" srcset="dist/assets/img/demos/mi12@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo13.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi13.jpg" srcset="dist/assets/img/demos/mi13@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XIII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo14.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi14.jpg" srcset="./assets/img/demos/mi14@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XIV</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo15.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi15.jpg" srcset="dist/assets/img/demos/mi15@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XV</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo16.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi16.jpg" srcset="dist/assets/img/demos/mi16@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XVI</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo17.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi17.jpg" srcset="dist/assets/img/demos/mi17@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XVII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo18.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi18.jpg" srcset="dist/assets/img/demos/mi18@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XVIII</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo19.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi19.jpg" srcset="dist/assets/img/demos/mi19@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XIX</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo20.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi20.jpg" srcset="dist/assets/img/demos/mi20@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XX</span>
                          </a></li>
                        <li class="col"><a class="dropdown-item" href="./demo21.html">
                            <figure class="rounded lift d-none d-lg-block"><img src="dist/assets/img/demos/mi21.jpg" srcset="dist/assets/img/demos/mi21@2x.jpg 2x" alt=""></figure>
                            <span class="d-lg-none">Demo XXI</span>
                          </a></li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./services.html">Services I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./about.html">About I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./about2.html">About II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./shop2.html">Shop II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./shop-product.html">Product Page</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./shop-cart.html">Shopping Cart</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./shop-checkout.html">Checkout</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./contact.html">Contact I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./contact2.html">Contact II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./contact3.html">Contact III</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./career.html">Job Listing I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./career2.html">Job Listing II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./career-job.html">Job Description</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./404.html">404 Not Found</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./page-loader.html">Page Loader</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./signin.html">Sign In I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./signin2.html">Sign In II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./signup.html">Sign Up I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./signup2.html">Sign Up II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./terms.html">Terms</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu dropdown-lg">
                    <div class="dropdown-lg-content">
                      <div>
                        <h6 class="dropdown-header">Project Pages</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="./projects.html">Projects I</a></li>
                          <li><a class="dropdown-item" href="./projects2.html">Projects II</a></li>
                          <li><a class="dropdown-item" href="./projects3.html">Projects III</a></li>
                          <li><a class="dropdown-item" href="./projects4.html">Projects IV</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                      <div>
                        <h6 class="dropdown-header">Single Projects</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="./single-project.html">Single Project I</a></li>
                          <li><a class="dropdown-item" href="./single-project2.html">Single Project II</a></li>
                          <li><a class="dropdown-item" href="./single-project3.html">Single Project III</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                    </div>
                    <!-- /auto-column -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without Sidebar</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with Left Sidebar</a></li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Post without Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Post with Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Post with Left Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block1.svg" alt=""></div>
                            <span>About</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block2.svg" alt=""></div>
                            <span>Blog</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block3.svg" alt=""></div>
                            <span>Call to Action</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/clients.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block4.svg" alt=""></div>
                            <span>Clients</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/contact.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block5.svg" alt=""></div>
                            <span>Contact</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/facts.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block6.svg" alt=""></div>
                            <span>Facts</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/faq.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block7.svg" alt=""></div>
                            <span>FAQ</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/features.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block8.svg" alt=""></div>
                            <span>Features</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/footer.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block9.svg" alt=""></div>
                            <span>Footer</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/hero.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block10.svg" alt=""></div>
                            <span>Hero</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/misc.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block17.svg" alt=""></div>
                            <span>Misc</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/navbar.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block11.svg" alt=""></div>
                            <span>Navbar</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/portfolio.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block12.svg" alt=""></div>
                            <span>Portfolio</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/pricing.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block13.svg" alt=""></div>
                            <span>Pricing</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/process.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block14.svg" alt=""></div>
                            <span>Process</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="./docs/blocks/team.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block15.svg" alt=""></div>
                            <span>Team</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="dist/docs/blocks/testimonials.html">
                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="dist/assets/img/demos/block16.svg" alt=""></div>
                            <span>Testimonials</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Documentation</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row gx-0 gx-lg-3">
                        <div class="col-lg-4">
                          <h6 class="dropdown-header">Usage</h6>
                          <ul class="list-unstyled cc-2 pb-lg-1">
                            <li><a class="dropdown-item" href="./docs/index.html">Get Started</a></li>
                            <li><a class="dropdown-item" href="./docs/forms.html">Forms</a></li>
                            <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="./docs/changelog.html">Changelog</a></li>
                            <li><a class="dropdown-item" href="./docs/credits.html">Credits</a></li>
                          </ul>
                          <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                          <ul class="list-unstyled cc-2">
                            <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Colors</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Fonts</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">SVG Icons</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/icons-font.html">Font Icons</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/backgrounds.html">Backgrounds</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/misc.html">Misc</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-8">
                          <h6 class="dropdown-header">Elements</h6>
                          <ul class="list-unstyled cc-3">
                            <li><a class="dropdown-item" href="./docs/elements/accordion.html">Accordion</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/alerts.html">Alerts</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/animations.html">Animations</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/avatars.html">Avatars</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/background.html">Background</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/badges.html">Badges</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/breadcrumb.html">Breadcrumb</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/buttons.html">Buttons</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/card.html">Card</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/carousel.html">Carousel</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/dividers.html">Dividers</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/form-elements.html">Form Elements</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/image-hover.html">Image Hover</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/image-mask.html">Image Mask</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/lightbox.html">Lightbox</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/player.html">Media Player</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/modal.html">Modal</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/progressbar.html">Progressbar</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/shadows.html">Shadows</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/shapes.html">Shapes</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/tables.html">Tables</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/tabs.html">Tabs</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/text-animations.html">Text Animations</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/tiles.html">Tiles</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/typography.html">Typography</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    @yield('content')
  <!-- /.content-wrapper py-13 py-md-15 -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" src="dist/assets/img/logo-light.png" srcset="distassets/img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">© 2021 Sandbox. All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Need Help?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Features</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
            <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('dist/assets/js/plugins.js') }}" defer></script>
  <script src="{{ asset('dist/assets/js/theme.js') }}" defer></script>
  
  <!--Start of Tawk.to Script-->
{{--   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/626fb4507b967b11798d6ac2/1g225gn4e';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
  </script> --}}
  <!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">

        

  </script>
  @yield('extra-js')
</body>

</html>