@include('layouts._head')
    <div class="page-wrapper">
        @include('layouts._header')

        <main class="main">
        	<div class="page-header text-center">
        		<div class="container">
        			<h1 class="page-title">Edit Profil</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->

            <div class="page-content">
            	<div class="dashboard">
	                <div class="container">
                        <br />
						@include('layouts._message')
	                	<div class="row">
	                		@include('user._sidebar')

	                		<div class="col-md-8 col-lg-9">
	                			<div class="tab-content">
								  <form action="" method="post">
									{{ csrf_field() }}
									<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
									<div class="row">
										<div class="col-sm-6">
											<label>Vorname *</label>
											<input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->

										<div class="col-sm-6">
											<label>Nachname *</label>
											<input type="text" name="last_name" value="{{ $getRecord->last_name }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->
									</div><!-- End .row -->

									
									<label>Email addresse *</label>
									<input type="email" name="email" value="{{ $getRecord->email }}" class="form-control" required>

									<label>Name der Firma (Optional)</label>
									<input type="text" name="company_name" value="{{ $getRecord->company_name }}" class="form-control">

									<label>Land *</label>
									<input type="text" name="country" value="{{ $getRecord->country }}" class="form-control" required>

									<label>Adresse Straße *</label>
									<input type="text" class="form-control" name="address_one" value="{{ $getRecord->address_one }}"  placeholder="House number and Street name" required>
									<input type="text" class="form-control" name="address_tow" value="{{ $getRecord->address_tow }}" placeholder="Appartments, suite, unit etc ...">

									<div class="row">
										<div class="col-sm-6">
											<label>town *</label>
											<input type="text" name="city" value="{{ $getRecord->city }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->

											<div class="col-sm-6">
											<label>Stadt *</label>
											<input type="text" name="state" value="{{ $getRecord->state }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->

									</div><!-- End .row -->

									<div class="row">
										<div class="col-sm-6">
											<label>PLZ  *</label>
											<input type="text"  name="postcode" value="{{ $getRecord->postcode }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->

										<div class="col-sm-6">
											<label>Handy Nummer*</label>
											<input type="tel" name="phone" value="{{ $getRecord->phone }}" class="form-control" required>
										</div><!-- End .col-sm-6 -->
									</div><!-- End .row -->


								

										<button type="submit" style="width: 100px;" class="btn btn-outline-primary-2 btn-order btn-block">OK</button>
									</form>
									</div>
	                		</div><!-- End .col-lg-9 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .dashboard -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


                     @include('layouts._footer')
                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
                                                <div class="mobile-menu-overlay"></div>      
                                @include('layouts._mobilemenu')
                                            @include('layouts._signregister')
                                                            @include('layouts._newletter')
                                                                         @include('layouts._scripts')
