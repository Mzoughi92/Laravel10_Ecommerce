<main class="main">
    <div class="intro-section bg-lighter pt-5 pb-6">
        <div class="container">
            <div class="row">
                <div class="div" style="width: 100%" >
                    <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                        <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "responsive": {
                                    "768": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <div class="intro-slide">

                                @php
                                $getsliderHeader = App\Models\SliderModel::getRecord(); 
                               @endphp

                                @foreach ($getsliderHeader as $value)
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(width: 480px)" srcset="assets/images/slider/slide-1-480w.jpg">
                                        <img src="{{asset('uploads')}}/{{ $value->photo }}" style="width: 50% height: 50px;" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">{{ $value->name }}</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">{{ $value->description }}<br>{{ $value->description2 }}</h1><!-- End .intro-title -->

                                    <a href="{{ $value->link }}" class="btn btn-outline-white">
                                        <span>Jetzt bestellen</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                                @endforeach
                            </div><!-- End .intro-slide -->

                     
                        </div><!-- End .intro-slider owl-carousel owl-simple -->
                        
                        <span class="slider-loader"></span><!-- End .slider-loader -->
                    </div><!-- End .intro-slider-container -->
                </div><!-- End .col-lg-8 -->

                
            </div><!-- End .row -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        }
                    }
                }'>
                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/saida.png" alt="saida">
                </div>

                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/sicam.png" alt="sicam">
                </div>

                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/neblia.png" alt="neblia">
                </div>

                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/presidant.png" alt="presidant">
                </div>

               
                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/kif.png" alt="kif">
                </div>

                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/randa.png" alt="randa">
                </div>

                <div class="brand" style="width: 100%; height: 100px; " >
                    <img src="assets/images/brands/delice.png" alt="delice">
                </div>

            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .bg-lighter -->





    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <div class="heading heading-center mb-3">
            <h2 class="title-lg">EMPFOHLENE PRODUKTE</h2><!-- End .title -->

        </div><!-- End .heading -->
<br>
        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>



           
                        @php
                                    $getProduct = App\Models\ProductModel::getProduct();
                                
                        @endphp

                     @foreach ($getProduct as $value)
                     <div class="product product-11 text-center">
                        @php
                               
                            $getProductImage = $value->getImageSingle($value->id);
                
                        @endphp
                
           
                

                        <figure class="product-media">

                            <a href="{{ url($value->slug)}}">
                                @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                <img src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="product-image">
                                @endif
                            </a>
                        
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="{{ url($value->slug)}}">{{ $value->title }}</a></h3><!-- End .product-title -->
                            <div class="product-price" style="color: black">
                                {{ number_format($value->price, 2) }} €      &nbsp; <span style=" text-decoration: line-through;  color: red;">{{ number_format($value->old_price, 2) }}&nbsp;€  </span>
                            </div><!-- End .product-price -->
                       
                        </div><!-- End .product-body -->
                   

                     
                    </div><!-- End .product -->
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->









            




















                    









































    <div class="container">
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-rocket"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Zahlung & Lieferung</h3><!-- End .icon-box-title -->
                        <p>Kostenloser Versand für Bestellungen über 50 $</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-rotate-left"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Rückgabe und Rückerstattung</h3><!-- End .icon-box-title -->
                        <p>Kostenlose 100 % Geld-zurück-Garantie</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-life-ring"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Qualitätsunterstützung</h3><!-- End .icon-box-title -->
                        <p>Immer Online-Feedback rund um die Uhr</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-lg-4 col-sm-6 -->
        </div><!-- End .row -->

        <div class="mb-2"></div><!-- End .mb-2 -->
    </div><!-- End .container -->




















































            <div class="tab-pane p-0 fade" id="trendy-fur-tab" role="tabpanel" aria-labelledby="trendy-fur-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-new">NEW</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-3-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $970,00
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-sale">30% OFF</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-4-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$337,00</span>
                                <span class="old-price">Was $449,00</span>
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trendy-decor-tab" role="tabpanel" aria-labelledby="trendy-decor-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $251,00
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-6-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $457,00
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trendy-light-tab" role="tabpanel" aria-labelledby="trendy-light-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-2-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Octo 4240</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $746,00
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-5-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $675,00
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="container categories pt-6">
        <h2 class="title-lg text-center mb-4">TUNESISCHE KÜCHE REZEPTEN</h2><!-- End .title-lg text-center -->

        <div class="row">
            <div class="col-6 col-lg-4">
                <div class="banner banner-display banner-link-anim">
                    <a href="#">
                       
                        <img src="{{asset('assets/images/banners/home/brika.jpg')}}" style="height: 540px;" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h3 class="banner-title text-white"><a href="https://www.youtube.com/watch?v=kp9smrvcBKs" target="_blank">Brika</a></h3><!-- End .banner-title -->
                        <a href="https://www.youtube.com/watch?v=kp9smrvcBKs" class="btn btn-outline-white banner-link"  target="_blank">öffnen<i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-sm-6 col-lg-3 -->
            <div class="col-6 col-lg-4 order-lg-last">
                <div class="banner banner-display banner-link-anim">
                    <a href="#">
                        <img src="{{asset('assets/images/banners/home/fricase.jpg')}}" style="height: 540px;" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h3 class="banner-title text-white"><a href="#">fricassee tunisien</a></h3><!-- End .banner-title -->
                        <a href="https://www.youtube.com/watch?v=IwkwbRpYdeQ" class="btn btn-outline-white banner-link" target="_blank">öffnen<i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-sm-6 col-lg-3 -->
            <div class="col-sm-12 col-lg-4 banners-sm">
                <div class="row">
                    <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                        <a href="#">
                            <img src="assets/images/banners/home/melou5iya.jpg" style="height: 260px;" alt="Banner">
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-title text-white"><a href="#">meloukhiya</a></h3><!-- End .banner-title -->
                            <a href="https://www.youtube.com/watch?v=vimxHpCBTJA" class="btn btn-outline-white banner-link" target="_blank">öffnen<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->

                    <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                        <a href="#">
                            <img src="assets/images/banners/home/melawi.jpg" style="height: 260px;" alt="Banner">
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-title text-white"><a href="#">melawi</a></h3><!-- End .banner-title -->
                            <a href="https://www.youtube.com/watch?v=vP7aiX6fCJ0" class="btn btn-outline-white banner-link"  target="_blank" >öffnen<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div>
            </div><!-- End .col-sm-6 col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-6 -->

    



 



</main><!-- End .main -->