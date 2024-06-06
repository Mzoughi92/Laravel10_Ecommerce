<style type="text/css">
    .btn-wishlist-add::before
            {
                content: '\f233' !important;
            }
  </style>

  
<div class="products mb-3">
    <div class="row justify-content-center">
        @foreach ($getProduct as $value)
            
        @php
            
            $getProductImage = $value->getImageSingle($value->id);

        @endphp

      
        <div class="col-12 col-md-4 col-lg-4">
            <div class="product product-7 text-center">
                <figure class="product-media">
                 
                    <a href="{{ url( $value->slug )}}">
                        @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                        <img style="height: 280px;width: 100%; object-fit: cover;" src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="product-image">
                         @endif
                    </a>

                    <div class="product-action-vertical">
                        @if(!empty(Auth::check()))
                        <a href="javascript:;" data-toggle="modal" 
                        class="add_to_wishlist add_to_wishlist{{ $value->id }} btn-product-icon btn-wishlist btn-expandable 
                        {{ !empty($value->checkWishlist($value->id)) ? 'btn-wishlist-add' : '' }}" 
                        id="{{ $value->id }}"  title="Wishlist">
                            <span>add to wishlist</span>
                        </a>
                    @else
                        <a href="#signin-modal" data-toggle="modal" class="btn-product-icon btn-wishlist btn-expandable" title="Wishlist">
                            <span>add to wishlist</span>
                        </a>
                    @endif
                    </div><!-- End .product-action-vertical -->

                 
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="{{ url($value->category_slug.'/'.$value->sub_category_slug)}}">{{ $value->sub_category_name }}</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="{{ url( $value->slug )}}">{{ $value->title }}</a></h3><!-- End .product-title -->
                    <div class="product-price"  style="color: black">
                        {{ number_format($value->price, 2) }} €      &nbsp; <span style=" text-decoration: line-through;  color: red;">{{ number_format($value->old_price, 2) }}&nbsp;€  </span>
                    </div><!-- End .product-price -->


                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: {{ $value->getReviewRating($value->id) }}%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( {{ $value->getTotalReview()}} Reviews )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->
        </div><!-- End .col-sm-6 col-lg-4 -->
        @endforeach

    </div><!-- End .row -->
</div><!-- End .products -->

                     
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

</script>