@include('layouts._head')
<style type="text/css">
    .active-color{
        border: 3px solid #000 !important;
    }
</style>
    <div class="page-wrapper">

        @include('layouts._header')

        <div class="msg" style="width: 40%">
            <center>
                @include('admin.layouts._message')
            </center>
        </div>
        
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
               
                    <h1 class="page-title">My Wishliste</h1>
                   
        			
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">HOME</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">My wishlist</a></li>
                     

                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12">
                			<div class="toolbox">
                				<div class="toolbox-left">
                					<div class="toolbox-info">
                						Showing <span> {{ $getProduct->perPage() }} of {{ $getProduct->total()}}</span> Products
                					</div><!-- End .toolbox-info -->
                				</div><!-- End .toolbox-left -->

                            </div>

                            <div class="page-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                            <div id="getProductAjax">
                               @include('product._list')
                            </div>
                             <div class="col-lg-12">
                        {!! $getProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
                        </div>
                        
						
                		</div><!-- End .col-lg-9 -->
                       
                </div>
            </div>
        </div>
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->




                     @include('layouts._footer')

                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                                                <div class="mobile-menu-overlay"></div>
                                    
                                @include('layouts._mobilemenu')

                                            @include('layouts._signregister')

                                                            @include('layouts._newletter')
                                                            
                                                                         @include('layouts._scripts')


                                                                                
                                                                                      