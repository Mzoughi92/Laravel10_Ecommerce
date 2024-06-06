@include('layouts._head')

<style type="text/css">
.form-group {
margin-bottom: 2px;
}
</style>
    <div class="page-wrapper">

        @include('layouts._header')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <main class="main">
        	<div class="page-header text-center">
        		<div class="container">
        			<h1 class="page-title">Order Details</span></h1>
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
                                      @include('layouts._message')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>#ID :<span style="font-weight: normal;"> {{ $getRecord->order_number }}</span></label>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Name : <span style="font-weight: normal;">{{ $getRecord->first_name }} {{ $getRecord->last_name }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Firmen Name : <span style="font-weight: normal;">{{ $getRecord->first_name }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Land : <span style="font-weight: normal;">{{ $getRecord->country }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Adresse :<span style="font-weight: normal;"> {{ $getRecord->address_one }}, {{ $getRecord->address_two }}</span></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Stadt :<span style="font-weight: normal;"> {{ $getRecord->city }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>PLZ :<span style="font-weight: normal;"> {{ $getRecord->postcode }}</span></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Handy Nummer :<span style="font-weight: normal;"> {{ $getRecord->phone }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Email : <span style="font-weight: normal;">{{ $getRecord->email }}</span></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Gutschein-code (€) : <span style="font-weight: normal;">{{ $getRecord->discount_code }} €</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Gutschein-Betrag (€) : <span style="font-weight: normal;">{{ number_format($getRecord->discount_amount, 2) }} €</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Versand Firma : <span style="font-weight: normal;">{{ $getRecord->getShipping->name  }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Versand (€): <span style="font-weight: normal;">{{ number_format($getRecord->shipping_amount, 2) }} €</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bezahlung method :<span style="font-weight: normal;"> {{ $getRecord->payment_method }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Summe (€) : <span style="font-weight: normal;">{{ number_format($getRecord->total_amount, 2) }} €</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Status : <span style="font-weight: normal;">
                                              
                                                    @if($getRecord->status ==0) Pending
                                                    @elseif($getRecord->status ==1) Inprogress
                                                    @elseif($getRecord->status ==2) Delivered
                                                    @elseif($getRecord->status ==3) Completed
                                                    @elseif($getRecord->status ==4) Cancelled
                                                    @endif
                                                 
                                            </span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Note : <span style="font-weight: normal;">{{ $getRecord->note }}</span></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Erstellen Datum / Uhr : <span style="font-weight: normal;">{{ date('d-m-Y h:i A', strtotime($getRecord->created_at)) }}</span></label>
                                        </div>

                                    
                                    </div>
                    






                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Produkt Detail</div>
                                        </div>
                                
                                
                                
                                                                <div class="card-body p-0" style="overflow: auto;">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                      <tr>
                                                                        <th><center>Bild</center></th>
                                                                        <th><center>Produkt Name</center></th>
                                                                        <th><center>QTY</center></th>
                                                                        <th><center>Preis</center></th>
                                                                        @if(!empty($item->color_name))
                                                                        <th><center>  Farbe </center></th>
                                                                        @endif
                                                                        @if(!empty($item->size_name))
                                                                        <th><center>Grosse</center></th>
                                                                        @endif
                                                                        <th><center>Groesse Preis</center></th>
                                                                        <th><center>Summe</center></th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($getRecord->getItem as $item)
                                                                        @php
                                                                         $getProductImage = $item->getProduct->getImageSingle($item->getProduct->id);   
                                                                        @endphp
                                                                            <tr>
                                                                                <td> <center><img style="width: 100px; height: 100px;" src="{{ $getProductImage->getLogo() }}"></center></td>
                                                                                <td style="max-width: 250px;"> <center>
                                                                                    
                                                                                    <a target="_blank" href="{{ url($item->getProduct->slug)}}"> {{ $item->getProduct->title }}
                                                                                    </a>
                                                                                    <br>
                                                                                    @if(!empty($item->color_name))
                                                                                    <b> Color Name: </b>  {{ $item->color_name }} <br />
                                                                                    @endif
                                                                                    @if(!empty($item->size_name))
                                                                                    <b>  Size Name: </b> {{ $item->size_name }} <br />
                                                                                    @endif
                                                                            @if($getRecord->status == 3)

                                                                                            @php
                                                                                          
                                                                                            $getReview = $item->getReview($item->getProduct->id, $getRecord->id);
                                                                                          
                                                                                           // dd($item->getProduct->id, $getRecord->id);

                                                                                           // dd($getRecord->id);
                                                                                           @endphp

                                                                                                    @if(!empty($getReview))
                                                                                                    <b> How many rating :</b>  {{ $getReview->rating }} <br>
                                                                                                        <b>  Review :</b>  {{ $getReview->review }} <br>
                                                                                                    @else
                                                                                                              <button type="button" class="btn btn-primary MakeReview" id="{{ $item->getProduct->id }}" data-order={{ $getRecord->id  }}>Make Review</button>
                                                                                                    @endif

                                                                            
                                                                            @endif
                                                                            </center></td>
                                                                                <td> <center>{{ $item->quantity }}</center></td>
                                                                                <td> <center>{{ number_format($item->price, 2) }} €</center></td>
                                                                                <td> <center>{{ number_format($item->size_name_amount, 2) }} €</center></td>
                                                                                <td> <center>{{ number_format($item->total_price, 2) }} €</center></td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>


                     @include('layouts._footer')

                                    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

                                                <div class="mobile-menu-overlay"></div>
                                    
                                @include('layouts._mobilemenu')

                                            @include('layouts._signregister')

                                                            @include('layouts._newletter')

                                                            <div class="modal fade" id="MakeReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Make Review</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                    <form action="{{ url('user/make-review') }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" required id="getProductId" name="product_id">
                                                                        <input type="hidden" required id="getOrderId"  name="order_id">
                                                                        <div class="modal-body" style="padding: 20px;">
                                                                            <div class="from-group" style="margin-bottom: 20px;">
                                                                                <label>How many star ? *</label>
                                                                                <select class="from-control" required name="rating">
                                                                                    <option value="">Select</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="from-group">
                                                                                <label>Review *</label>
                                                                             <textarea class="form-control" required name="review"></textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                         @include('layouts._scripts')


                                                                   
                                                                         <script type="text/javascript">
                                                                            $(document).ready(function(){
                                                                                $('body').delegate('.MakeReview', 'click', function(){
                                                                                    var product_id = $(this).attr('id');
                                                                                    var order_id = $(this).attr('data-order');
                                                                                    $('#getProductId').val(product_id)
                                                                                    $('#getOrderId').val(order_id)
                                                                                    
                                                                                    $('#MakeReviewModal').modal('show'); // Corrected method name
                                                                                });
                                                                            });
                                                                            </script>