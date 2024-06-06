@include('layouts._head')

    <div class="page-wrapper">

        @include('layouts._header')



        <main class="main">
        	<div class="page-header text-center">
        		<div class="container">
        			<h1 class="page-title">Orders</span></h1>
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

                                   

                            <table class="table table-hover" >
                            <thead style="text-transform: capitalize;">
                              <tr>
                       
                                <th><center>BNummer</center></th>
                                <th><center>B method</center></th>
                                <th><center>Status</center></th>
                                <th><center>Sum (€)</center></th>
                                <th><center>Datum / Uhr</center></th>
                                <th><center>Aktion</center></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value) 
                              <tr>
                                
                                <td><center>{{ $value->order_number }}</center></td>
                               
                                <td style="text-transform: capitalize;"><center>{{ $value->payment_method }}</center></td>
                        
                      <td>
                        <center>
                        @if($value->status ==0) Pending
                        @elseif($value->status ==1) Inprogress
                        @elseif($value->status ==2) Delivered
                        @elseif($value->status ==3) Completed
                        @elseif($value->status ==4) Cancelled
                        @endif
                        </center>
                    </td>
                                <td><center><b>{{ number_format($value->total_amount, 2)  }} € </b> </center></td>
                                <td><center>{{ date('d-m-Y h:i A', strtotime($value->created_at)) }}</center></td>
                                <td><center><a href="{{ url('user/orders/detail/'.$value->id) }}" class="btn btn-primary">Detail</a></center></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>



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
