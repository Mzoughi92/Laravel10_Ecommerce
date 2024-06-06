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



              <section class="content-header">
                <div class="container-fluid">
              
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Produkten Liste</h3>
                          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                
          
                              <div class="col-sm-16">
                                
                                <a href="{{ url('admin/product/add')}}" class="btn btn-primary"> <i class="fas fa-address-book"></i> Produkt hinzufügen</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          @include('admin.layouts._message')
                          <table class="table table-hover" > <!-- style="width: 150%;"-->
                            <thead>
                              <tr>
                                <th><center>#</center></th>
                                <th><center>Name</center></th>
                                <th><center>Erstellt von</center></th>
                          
                                <th><center>Status</center></th>
                                <th><center>Erstellungsdatum</center></th>
                                <th><center>Aktion</center></th>
                              </tr>
                            </thead>
                            <tbody>
                        @foreach ($getRecord as $value)
                        <tr>
                          <td><center> {{ $value->id }} </center></td>
                          
                          <td><center>{{ $value->title }}</center></td>
                          <td><center>{{ $value->created_by_name }}</center></td>

                   

                          <td><center>
                            @if($value->status == 0)
                            <span class="badge bg-success"><center>Aktiv</center></span>
                            @else
                            <span data-feather="x-octagon"></span>
                            <span class="badge bg-danger"><center>Inaktiv</center></span>
                            @endif
                          </center></td>
                          <td><center>{{ date('d-m-Y', strtotime($value->created_at)) }}</center></td>
                          <td>  <center>
                            <a href="{{ url('admin/product/edit/'.$value->id) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i>  Bearbeiten</a>
                            <a href="{{ url('admin/product/delete/'.$value->id) }}" class="btn btn-danger"> <i class="fas fa-trash"></i>  Löschen</a>
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
