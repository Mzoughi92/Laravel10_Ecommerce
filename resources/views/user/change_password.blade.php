@include('layouts._head')

    <div class="page-wrapper">

        @include('layouts._header')

        <main class="main">
        	<div class="page-header text-center">
        		<div class="container">
        			<h1 class="page-title">Change Password</span></h1>
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
												<label>Alte Password *</label>
												<input type="password" name="old_password" class="form-control" required>
											</div><!-- End .col-sm-6 -->
	
											<div class="col-sm-6">
												<label>Neu Passwort *</label>
												<input type="password" name="password" class="form-control" required>
											</div><!-- End .col-sm-6 -->
											<div class="col-sm-6">
												<label>Confirm Password *</label>
												<input type="password" name="cpassword"  class="form-control" required>
											</div><!-- End .col-sm-6 -->
										</div><!-- End .row -->
	
										
										
											<button type="submit" style="width: 150px;" class="btn btn-outline-primary-2 btn-order btn-block">Update Password</button>
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
