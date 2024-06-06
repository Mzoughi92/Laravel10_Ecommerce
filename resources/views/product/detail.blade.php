<!DOCTYPE html>
<html lang="en">


<!-- molla/product-extended.html  22 Nov 2019 10:03:20 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/nouislider/nouislider.css')}}">
          <style type="text/css">
            .btn-wishlist-add::before
                    {
                        content: '\f233' !important;
                    }
          </style>
</head>

    <div class="page-wrapper">

        @include('layouts._header')

                <div class="msg" style="width: 40%">
                    <center>
                        @include('admin.layouts._message')
                    </center>
                </div>
        
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url($getProduct->getCategory->slug) }}">{{ $getProduct->getCategory->name }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ url($getProduct->getCategory->slug.'/'.$getProduct->getSubCategory->slug) }}">{{ $getProduct->getSubCategory->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $getProduct->title }}</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery">
                                    <figure class="product-main-image">

                                        @php
                                            $getProductImage = $getProduct->getImageSingle($getProduct->id);
                                        @endphp

                                        @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                      <img id="product-zoom" src="{{ $getProductImage->getLogo()}}" data-zoom-image="{{ $getProductImage->getLogo()}}" alt="product image">
                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                        @endif
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                  
                                        @foreach ($getProduct->getImage as $image)
                                        <a class="product-gallery-item" href="#" data-image="{{ $image->getLogo() }}" data-zoom-image="{{ $image->getLogo() }}">
                                            <img src="{{ $image->getLogo() }}" style="height: 100px" alt="product back">
                                        </a>
                                        @endforeach
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title" style="color: black"><b>{{ $getProduct->title }}</b></h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: {{ $getProduct->getReviewRating($getProduct->id) }}%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->

                                        
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( {{ $getProduct->getTotalReview()}} Reviews )</a>
                            
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                      <span id="getTotalPrice"  style="color: black">{{ number_format($getProduct->price, 2) }}&nbsp;€ inkl. MwSt</span>
                                    </div><!-- End .product-price -->



                                    <div class="old-pe">
                                        <h4 style="text-decoration: line-through;  color: red;">{{ number_format($getProduct->old_price, 2) }}&nbsp;€  </h4>
                                    </div><!-- End .product-content -->



                                    <div class="product-content">
                                        <p>{{ $getProduct->short_description }} </p>
                                    </div><!-- End .product-content -->

                                    <form action="{{ url('product/add-to-cart') }}" method="post">
                                            {{ csrf_field() }}
                                   <input type="hidden" name="product_id" value="{{ $getProduct->id }}">

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Menge:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="100" name="qty" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                 
                                        <button type="submit" class="btn-product btn-cart" >In WarenKorb</button>
                                        <div class="details-action-wrapper">
                                        @if(!empty(Auth::check()))
                                        
                                            <a href="javascript:;" class="add_to_wishlist
                                             add_to_wishlist{{ $getProduct->id }}
                                                 {{ !empty($getProduct->checkWishlist($getProduct->id)) ? 'btn-wishlist-add' : '' }}
                                                  btn-product btn-wishlist" title="Wishlist" id="{{ $getProduct->id }}">
                                                <span>add to wishlist</span>
                                            </a>
                                        @else
                                            <a href="#signin-modal" data-toggle="modal" class="btn-product btn-wishlist" title="Wishlist">
                                                <span>add to wishlist</span>
                                            </a>
                                        @endif
                                        
                                        </div>
                                        
                                    </div><!-- End .product-details-action -->
                                </form>
                                
                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Kategorie:</span>
                                           <a href="{{ url($getProduct->getCategory->slug) }}">{{ $getProduct->getCategory->name }}</a> ,
                                        <a href="{{ url($getProduct->getCategory->slug.'/'.$getProduct->getSubCategory->slug) }}">{{ $getProduct->getSubCategory->name }}</a>
                       
                                        </div><!-- End .product-cat -->

                                   <!--     <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>-->
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
                </div><!-- End .container -->
           
                <div class="product-details-tab product-details-extended">
                    <div class="container">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Beshreibung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Produkt information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews ({{ $getProduct->getTotalReview()}})</a>
                            </li>
                        </ul>
                    </div><!-- End .container -->

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                               
                                    <div class="container" style="margin-top: 30px;">
                                        {!! $getProduct->description !!}
                                    </div><!-- End .container -->
                               

                        
                            
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <div class="container" style="margin-top: 30px;">
                                    {!! $getProduct->description !!}
                                </div><!-- End .container -->
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <div class="container" style="margin-top: 30px;">
                           {!! $getProduct->shipping_returns !!}
                                </div><!-- End .container -->
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <div class="container">
                                    <h3>Reviews ({{ $getProduct->getTotalReview()}})</h3>
                                    @foreach ($getReviewProduct as $review)
                                        <div class="review">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <h4><a href="#">{{ $review->name }}</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: {{ $review->getPercent() }}%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <span class="review-date">{{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</span>
                                                </div><!-- End .col -->
                                            
                                                <div class="col">
                                                    <h4>{{ $review->review }}</h4>
                                               
                                                </div><!-- End .col-auto -->
                                            </div><!-- End .row -->
                                        </div><!-- End .review -->
                                    @endforeach

                                    {!! $getReviewProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
                                  
                                </div><!-- End .container -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->

                <div class="container">
                    <h2 class="title text-center mb-4">ÄHNLICHE PRODUKTE</h2><!-- End .title text-center -->
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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


                        @foreach($getRelatedProduct as $value)

                        @php
                             $getProductImage = $value->getImageSingle($value->id);
                        @endphp
                       
                        <div class="product product-7">
                            <figure class="product-media">
                            
                                <a href="{{ url($value->slug) }}">
                                    @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                    <img style="height: 280px;width: 100%; object-fit: cover;" 
                                    src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="product-image">
                                    @endif
                                </a>

                              

                                <div class="product-action-vertical">
                                    @if(!empty(Auth::check()))
                                    <a href="javascript:;" data-toggle="modal" class="add_to_wishlist add_to_wishlist{{ $value->id }} btn-product-icon btn-wishlist btn-expandable {{ !empty($value->checkWishlist($value->id)) ? 'btn-wishlist-add' : '' }}" id="{{ $value->id }}"  title="Wishlist">
                                        <span>add to wishlist</span>
                                    </a>
                                @else
                                    <a href="#signin-modal" data-toggle="modal" class="btn-product-icon btn-wishlist btn-expandable" title="Wishlist">
                                        <span>add to wishlist</span>
                                    </a>
                                @endif
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="{{ url($value->category_slug.'/'.$value->sub_category_slug)}}">{{ $value->sub_category_name }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{ url( $value->slug )}}">{{ $value->title }}</a></h3>
                                <div class="product-price" style="color: black">
                                    {{ number_format($value->price, 2) }} €      &nbsp; <span style="text-decoration: line-through;  color: red;">{{ number_format($getProduct->old_price, 2) }}&nbsp;€  </span>
                                </div><!-- End .product-price -->
                                
                          

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width:{{ $value->getReviewRating($value->id) }}%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( {{ $value->getTotalReview()}} Reviews )</span>
                                </div><!-- End .rating-container -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        @endforeach


                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->



                     @include('layouts._footer')

                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                                                <div class="mobile-menu-overlay"></div>
                                    
                                @include('layouts._mobilemenu')

                                            @include('layouts._signregister')

                                                            @include('layouts._newletter')


                                                            
                                                            <script src="{{url('assets/js/jquery.min.js')}}"></script>
                                                            <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
                                                            <script src="{{url('assets/js/jquery.hoverIntent.min.js')}}"></script>
                                                            <script src="{{url('assets/js/jquery.waypoints.min.js')}}"></script>
                                                            <script src="{{url('assets/js/superfish.min.js')}}"></script>
                                                            <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
                                                            <script src="{{url('assets/js/bootstrap-input-spinner.js')}}"></script>
                                                            <script src="{{url('assets/js/jquery.elevateZoom.min.js')}}"></script>
                                                            <script src="{{url('assets/js/bootstrap-input-spinner.js')}}"></script>
                                                            <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
                                                            <!-- Main JS File -->
                                                            <script src="{{url('assets/js/main.js')}}"></script>


                                                                   
                                                            <script type="text/javascript">

                                                                $('body').delegate('.add_to_wishlist', 'click', function(e){
                                                                var product_id = $(this).attr('id');
                                                                $.ajax({
                                                                    type : "POST",
                                                                    url : "{{ url('add_to_wishlist') }}",
                                                                    data : {
                                                                    "_token": "{{ csrf_token() }}",
                                                                    product_id:product_id,
                                                                    },
                                                                    dataType : "json",
                                                                    success: function(data)
                                                                    {
                                                                        if(data.is_wishlist == 0)
                                                                        {
                                                                          $('.add_to_wishlist'+product_id).removeClass('btn-wishlist-add');
                                                                        }
                                                                        else
                                                                        {
                                                                          $('.add_to_wishlist'+product_id).addClass('btn-wishlist-add');
                                                                        }
                                                                    }
                                                                });
                                                                });




                                                                                                                
                                                                                                                                                


                                                            $('.getSizePrice').change(function(){
                                                               var product_price = '{{ $getProduct->price }}';
                                                                var price = $('option:selected', this).attr('data-price');
                                                                var total = parseFloat(product_price) + parseFloat(price);
                                                                $('#getTotalPrice').html(total.toFixed(2));
                                                            });

                                                            </script>












