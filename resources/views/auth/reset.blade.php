@include('layouts._head')
<style type="text/css">
    .active-color{
        border: 3px solid #000 !important;
    }
</style>
    <div class="page-wrapper">

        @include('layouts._header')

    


        <main class="main">
          
            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Passwort zurücksetzen</a>
							    </li>
							  
							</ul>
							<div class="tab-content">
							    <div class="" style="display: block;">
									@include('layouts._message')
							    	<form action=""  method="post" style="margin-top: 40px;">
										{{ csrf_field() }}
                                   <div class="form-group" style="margin-top: 40px;">
                                            <label for="password">Neues Kennwort*</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="cpassword">Bestätige das Passwort *</label>
                                            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                                        </div><!-- End .form-group -->



							    		
							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>Zurücksetzen</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

							    		</div><!-- End .form-footer -->
							    	</form>
							    
							    </div><!-- .End .tab-pane -->
							
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->











                     @include('layouts._footer')

                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                                                <div class="mobile-menu-overlay"></div>
                                    
                                @include('layouts._mobilemenu')

                                            @include('layouts._signregister')

                                                            @include('layouts._newletter')
                                                            
                                                                         @include('layouts._scripts')



                                                                                
                                                                                      