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
                                        <h3 class="card-title">Versandkosten aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                              
                                        <form action="{{  url('admin/shipping_charge/update/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
 

                                        <div class="card-body">

                                    

                                            <div class="form-group">
                                                <label>Dicount Code Name <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" value="{{ old('name', $getRecord->name)  }}" name="name" placeholder="Name" required/>
                                            </div>



                                         
                                         
    
                                                
                                                <div class="form-group">
                                                    <label>Betrag<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control" value="{{ old('price', $getRecord->price)  }}" name="price" placeholder="Betrag" required/>
                                                </div>




                                                <div class="form-group">
                                                    <label>Status  <span style="color: red">*</span></label>
                                                    <select class="form-control" name="status">
                                                        <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                        <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">InAktiv</option>
                                                    </select>
                                                    </div>
    
                                        </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Confirme</button>
                                                </div>
                                        </form>

                                        </div>
                                    </div>

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
