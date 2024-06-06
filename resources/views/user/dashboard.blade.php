@include('layouts._head')
<style type="text/css">
.box-btn
{
padding: 10px;text-align: center;border-radius: 5px;box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
}
</style>
    <div class="page-wrapper">

        @include('layouts._header')



        <main class="main">
        	<div class="page-header text-center">
        		<div class="container">
        			<h1 class="page-title">Dashboard</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
           

            <div class="page-content">
            	<div class="dashboard">
	                <div class="container">
                        <br />
	                	<div class="row">
	                		@include('user._sidebar')

	                		<div class="col-md-8 col-lg-9">
	                			<div class="tab-content">
                                    <div class="row">
                                    
                                        <div class="col-md-3">
                                            <div class="box-btn" style="margin-bottom: 20px;">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalOrder }}</div>
                                                <div style="font-size: 16px;"> Total order</div>
                                            </div>
                                        </div>

                                         <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalTodayOrder }}</div>
                                                <div style="font-size: 16px;"> Today order</div>
                                            </div>
                                        </div>


                                        <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalAmount }}</div>
                                                <div style="font-size: 16px;"> Total Amount</div>
                                            </div>
                                        </div>


                                        <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalTodayAmount }}</div>
                                                <div style="font-size: 16px;"> Today Amount</div>
                                            </div>
                                        </div>



                                       <div class="col-md-3">
                                            <div class="box-btn" style="margin-bottom: 20px;">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalPending }}</div>
                                                <div style="font-size: 16px;"> Penfing Orders</div>
                                            </div>
                                        </div>

                                         <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalInprogress }}</div>
                                                <div style="font-size: 16px;"> In Progree Orders</div>
                                            </div>
                                        </div>


                                        <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalCompleted }}</div>
                                                <div style="font-size: 16px;"> Completed Orderst</div>
                                            </div>
                                        </div>


                                        <div class="col-md-3" style="margin-bottom: 20px;">
                                            <div class="box-btn">
                                                <div style="font-size: 20px; font-weight: bold;">{{ $TotalCancelled }}</div>
                                                <div style="font-size: 16px;"> Cancelled Orders</div>
                                            </div>
                                        </div>


                                    </div>
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
