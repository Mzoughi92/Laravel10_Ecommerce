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
                          <h3 class="card-title">SEITEN LISTE</h3>
                          
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                
          
                              <div class="col-sm-16">
                                
                                <a href="{{ url('admin/discount_code/add')}}" class="btn btn-primary"> <i class="fas fa-address-book"></i> + Gutschein</a>
                              </div>
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
                                <th><center>Title</center></th>
                                <th><center>Aktion</center></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value) 
                              <tr>
                                <td><center>{{ $value->id }}</center></td>
                                <td><center>{{ $value->name }}</center></td>
                                <td><center>{{ $value->title }}</center></td>
                         
                                    <td>  <center>
                                        <a href="{{ url('admin/page/edit/'.$value->id) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i>Bearbeiten</a>
                                     </center>
                                      </td>
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
              <!-- /.content -->

            <!-- Main Footer -->
          @include('admin.layouts.footer')
            <!-- End Footer -->

        </div>

            <!-- Main scripts -->
          @include('admin.layouts.scripts')
            <!-- End scripts -->
            <script src="{{asset('assets/admin/plugins/jquery/tinymce-jquery.min.js')}}"></script>
      </body>
</html>
