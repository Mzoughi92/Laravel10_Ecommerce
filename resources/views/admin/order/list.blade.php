<!DOCTYPE html>
<html lang="en">
          <!-- Main head -->
          @include('admin.layouts.head')
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <!-- End head -->
      <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Main navbar -->
          @include('admin.layouts.navbar')
            <!-- End navbar -->

            <!-- Main sidebar -->
          @include('admin.layouts.sidebar')
            <!-- End sidebar -->

            <!-- Main content -->
            <div class="content-wrapper">



              <section class="content-header">
                <div class="container-fluid">
              
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"> Auftrag Liste :(Total {{ $getRecord->total() }})</h3>
                          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                
          
                              <div class="col-sm-16">
                                
                                <a href="{{ url('admin/category/add')}}" class="btn btn-primary btn-sm">Neue Kategorie hinzufügen</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="overflow: auto;" >
                          @include('admin.layouts._message')
                          <form method="get">
                            <div class="card">
                               <div class="card-header">
                                   <h3 class="card-title">
                                   Bestellung Suchen
                                   </h3>
                               </div>
                               <div class="card-body">
                                   <div class="row">
                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> ID </label>
                                               <input type="text" name="id" placeholder="ID" class="form-control" value="{{ Request::get('id')}}">
                                           </div>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> Name </label>
                                               <input type="text" name="first_name" placeholder="name" class="form-control" value="{{ Request::get('first_name')}}">
                                           </div>
                                       </div>




                                       <div class="col-md-2">
                                        <div class="form-group">
                                            <label> Firmen Name </label>
                                            <input type="text" name="company_name" placeholder="Firmen Name"  class="form-control" value="{{ Request::get('company_name')}}">
                                        </div>
                                    </div>



                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> Famillien Name </label>
                                               <input type="text" name="last_name" placeholder="Famillien Name" class="form-control" value="{{ Request::get('last_name')}}">
                                           </div>
                                       </div>





                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> Email </label>
                                               <input type="text" name="email" placeholder="Email" class="form-control" value="{{ Request::get('email')}}">
                                           </div>
                                       </div>



                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> Land </label>
                                               <input type="text" name="country"  placeholder="Land" class="form-control" value="{{ Request::get('country')}}">
                                           </div>
                                       </div>

                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> State </label>
                                               <input type="text" name="state"  placeholder="State" class="form-control" value="{{ Request::get('state')}}">
                                           </div>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> City </label>
                                               <input type="text" name="city" placeholder="City" class="form-control" value="{{ Request::get('city')}}">
                                           </div>
                                       </div>


                                       <div class="col-md-2">
                                        <div class="form-group">
                                            <label> Handy </label>
                                            <input type="text" name="phone" placeholder="Handy" class="form-control" value="{{ Request::get('phone')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label> PLZ</label>
                                            <input type="text" name="postcode" placeholder="PLZ" class="form-control" value="{{ Request::get('postcode')}}">
                                        </div>
                                    </div>


                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> From Date </label>
                                               <input type="date" style="padding: 6px;" name="from_date" class="form-control" value="{{ Request::get('from_date')}}">
                                           </div>
                                       </div>



                                       <div class="col-md-2">
                                           <div class="form-group">
                                               <label> To Date </label>
                                               <input type="date" style="padding: 6px;" name="to_date" class="form-control" value="{{ Request::get('to_date')}}">
                                           </div>
                                       </div>


                           
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <button class="btn btn-primary">Suchen</button>
                                           <a href="{{ url('admin/orders/list')}}" class="btn btn-primary">Reset</a>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </form>











                            <table class="table table-hover" style="width: 150%;">
                            <thead>
                              <tr>
                                <th><center>#</center></th>
                                <th><center>Bestellung Nummer</center></th>
                                <th><center>Name</center></th>
                                <th><center>Firmen Name</center></th>
                                <th><center>Land</center></th>
                                <th><center>Adresse</center></th>
                                <th><center>Stadt</center></th>
                                <th><center>Erstellt von</center></th>
                                <th><center>PLZ</center></th>
                                <th><center>Handy Nummer</center></th>
                                <th><center>Email</center></th>
                                <th><center>Gutschein-code (€) </center></th>
                                <th><center>Gutschein-Betrag (€)</center></th>
                                <th><center>Versand</center></th>
                                <th><center>Bezahlung method</center></th>
                                <th><center>Summe (€)</center></th>
                                <th><center>Erstellen Datum / Uhr</center></th>
                                
                                <th><center>Aktion</center></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value) 
                              <tr>
                                <td><center>{{ $value->id }}</center></td>
                                <td><center>{{ $value->order_number }}</center></td>
                                <td><center>{{ $value->first_name }} {{ $value->last_name}}</center></td>
                                <td><center>{{ $value->company_name }}</center></td>
                                <td><center>{{ $value->country }}</center></td>
                                <td><center>{{ $value->address_one }} <br/> {{ $value->address_two }} </center></td>
                                <td><center>{{ $value->city }}</center></td>
                                <td><center>{{ $value->state }}</center></td>
                                <td><center>{{ $value->postcode }}</center></td>
                                <td><center>{{ $value->phone }}</center></td>
                                <td><center><b>{{ $value->email }} </b> </center></td>
                                <td><center>{{ $value->discount_code }}</center></td>
                                <td><center><b>{{ number_format($value->discount_amount, 2) }} </b></center></td>
                                <td><center><b>{{ number_format($value->shipping_amount, 2) }} € </b></center></td>
                                <td style="text-transform: capitalize;"><center>{{ $value->payment_method }}</center></td>
                                <td><center><select class="form-control ChangeStatus" id="{{ $value->id }}" style="width:150px;">
                                  <option {{ ($value->status == 0)  ? 'selected' : '' }} value="0"><center>Pending</center></option>
                                  <option {{ ($value->status == 1)  ? 'selected' : '' }} value="1"><center>Inprogress</center></option>
                                  <option {{ ($value->status == 2)  ? 'selected' : '' }} value="2"><center>Delivered</center></option>
                                  <option {{ ($value->status == 3)  ? 'selected' : '' }} value="3"><center>Completed</center></option>
                                  <option {{ ($value->status == 4)  ? 'selected' : '' }} value="4"><center>Cancelled</center></option>
                                </select>
                                </center></td>
                                <td><center><b>{{ number_format($value->total_amount, 2)  }} € </b> </center></td>
                                <td><center>{{ date('d-m-Y h:i A', strtotime($value->created_at)) }}</center></td>
                                <td><center><a href="{{ url('admin/orders/detail/'.$value->id) }}" class="btn btn-primary">Detail</a></center></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
            
                </div><!-- /.container-fluid -->
              </section>

          @include('admin.layouts.footer')

        </div>
        

        <script>
              $('body').delegate('.ChangeStatus', 'change', function() {
                  var status = $(this).val();
                  var order_id = $(this).attr('id');
                  $.ajax({
                      type: "GET",
                      url: "{{ url('admin/order_status')}}",
                      data: {
                          status: status,
                          order_id: order_id
                      },
                      dataType: "json",
                      success: function(data) {
                          alert(data.message);
                      }
                  });
              });
     
      </script>

      </body>
         
    <!-- Include jQuery -->


<!-- Your JavaScript code -->


</html>
