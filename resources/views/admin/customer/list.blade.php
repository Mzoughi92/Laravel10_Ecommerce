<!DOCTYPE html>
<html lang="en">
          <!-- Main head -->
          @include('admin.layouts.head')
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
               
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title"> Kunden Liste :(Total {{ $getRecord->total() }})</h3>
                      </div>

                <form method="get">
                    <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">
                           Kunde Suchen
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
                                       <input type="text" name="name" placeholder="name" class="form-control" value="{{ Request::get('name')}}">
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
                                   <a href="{{ url('admin/customer/list')}}" class="btn btn-primary">Reset</a>
                               </div>
                           </div>

                       </div>
                   </div>
               </form>


              <section class="content-header">
                <div class="container-fluid">
              
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Kunden - Liste</h3>
                          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          @include('admin.layouts._message')
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th><center>#</center></th>
                                <th><center>Name</center></th>
                                <th><center>Email</center></th>
                                <th><center>Status</center></th>
                                <th><center>Datum</center></th>
                                <th><center>Aktion</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($getRecord as $value)
                              <tr>
                                <td><center>{{ $value->id }}</center></td>
                                <td><center>{{ $value->name }}</center></td>
                                <td><center>{{ $value->email }}</center></td>
                                <td><center>
                                  @if($value->status == 0)
                                  <span class="badge bg-success"><center>Aktiv</center></span>
                                  @else
                                  <span data-feather="x-octagon"></span>
                                  <span class="badge bg-danger"><center>Inaktiv</center></span>
                                  @endif
                                </center></td>
                                <td><center><b>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</b></center></td>
                                <td>  <center>
                                <a href="{{ url('admin/customer/delete/'.$value->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Löschen</a>
                               </center>
                                </td>
                              </tr>
                              @endforeach
                             
                           
                            </tbody>
                          </table>

                          <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                              <ul class="pagination justify-content-center m-0">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
                              </ul>
                            </nav>
                          </div>


                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
            
                </div><!-- /.container-fluid -->
              </section>
              <!-- /.content -->

            <!-- Main Footer -->
          @include('admin.layouts.footer')
            <!-- End Footer -->

        </div>

            <!-- Main scripts -->
          @include('admin.layouts.scripts')
            <!-- End scripts -->

      </body>
</html>
