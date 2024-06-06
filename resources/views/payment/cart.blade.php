@include('layouts._head')
<style type="text/css">
    .active-color{
        border: 3px solid #000 !important;
    }
</style>
    <div class="page-wrapper">

        @include('layouts._header')

    
											

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">WARENKORB<span>SHOP</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">SHOP</a></li>
                        <li class="breadcrumb-item active" aria-current="page">WARENKORB</li>
                    </ol>
                </div><!-- End .container -->
				<br>
				<div class="msg" style="width: 40%">
					<center>
						@include('admin.layouts._message')
					</center>
				</div>
            </nav><!-- End .breadcrumb-nav -->
			
			
			
            <div class="page-content">
            	<div class="cart">
	                <div class="container">

					
                        @if(!empty(Cart::getContent()->count()))
	                	<div class="row">
	                		<div class="col-lg-9">
							<form action="{{ url('update_cart')}}" method="post"> 
								{{ csrf_field() }}
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>ARTIKEL</th>
											<th><center>EINZELPREIS</center></th>
											<th><center>MENGE</center></th>
											<th><center>GESAMTBETRAG</center></th>
											<th></th>
										</tr>
									</thead>

									<tbody>
                                        @foreach (Cart::getContent() as $key => $cart)
                                            
                                        @php
                                             $getCartProduct = App\Models\ProductModel::getSingle($cart->id);
                                        @endphp

                                        @if(!empty($getCartProduct))

                                        @php
                                        $getProductImage = $getCartProduct->getImageSingle($getCartProduct->id);
                                        @endphp
										<tr>
											<td class="product-col">
												<center>
												<div class="product">
													<figure class="product-media">
														<a href="{{ url($getCartProduct->slug )}}">
															<img src="{{ $getProductImage->getLogo() }}" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="{{ url($getCartProduct->slug )}}">{{ $getCartProduct->title }}</a>
													</h3>
												</div>
											</center>
											</td>
											<td class="price-col"><center>{{ number_format($cart->price, 2) }} €</center></td>
											<td class="quantity-col">
												<center>
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control" value="{{ $cart->quantity }}" min="1" name="cart[{{$key}}][qty]"  max="100" step="1" data-decimals="0" required>
                                               
													<input type="hidden" value="{{ $cart->id }}" name="cart[{{$key}}][id]" >
												</div>
											</center>
                                            </td>
											<td class="total-col"><center>{{ number_format($cart->price * $cart->quantity, 2) }} €</center></td>
											<td class="remove-col"><a href="{{ url('cart/delete/'.$cart->id)}}" > <class="btn-remove" title="Remove Product"><i class="icon-close"></i></a></td>
											
										</tr>
                                        @endif
                                        @endforeach

									</tbody>
								</table><!-- End .table table-wishlist -->

	                			<div class="cart-bottom">
			            			
			            			<button type="submit" class="btn btn-outline-dark-2"><span>AKTUALISIEREN</span><i class="icon-refresh"></i></button>
		            			</div><!-- End .cart-bottom -->
							</form>
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">WARENKORB INSGESAMT</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Summe Artikel (netto):</td>
	                							<td>{{ number_format(Cart::getSubTotal(), 2) }} €</td>
	                						</tr><!-- End .summary-subtotal -->

	                					<!--	<tr class="summary-shipping">
	                							<td>Versand:</td>
	                							<td>&nbsp;</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Free Shipping</label>
													</div>
	                							</td>
	                							<td>0.00 €</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="standart-shipping">Standart:</label>
													</div>
	                							</td>
	                							<td>0.00 €</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div>
	                							</td>
	                							<td>0.00 €</td>
	                						</tr>-->

	                						<tr class="summary-shipping-estimate">
	                							<td>Kosten für Ihr Land<br> <a href="dashboard.html">Adresse ändern</a></td>
	                							<td>&nbsp;</td>
	                						</tr><!-- End .summary-shipping-estimate -->

	                						<tr class="summary-total">
	                							<td>Gesamtbetrag:</td>
	                							<td><b>{{ number_format(Cart::getSubTotal(), 2) }} €</b></td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="{{ url('checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">WEITER NÄCHTEN SCHRITT</a>
	                			</div><!-- End .summary -->

		            			<a href="{{ url('/') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>WEITER SHOPPEN</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
                        @else
                        <p style="font-size: 20px;font-weight:500; ">SIE HABEN KEINE ARTIKEL IM WARENKORB</p>
                        @endif
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->













                     @include('layouts._footer')

                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                                                <div class="mobile-menu-overlay"></div>
                                    
                                @include('layouts._mobilemenu')

                                            @include('layouts._signregister')

                                                            @include('layouts._newletter')
                                                            
                                                                         @include('layouts._scripts')



                                                                                
                                                                                      