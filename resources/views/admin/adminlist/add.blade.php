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
                                        <h3 class="card-title">Admin hinzufügen</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="{{ url('/admin/admin/add') }}" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required value="{{ old('name') }}" name="name" placeholder="Ihre Name" >
                                           
                                            </div>

                                            <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control"  required value="{{ old('email') }}" name="email" placeholder="Ihre Email" >
                                            <div style="color:red">{{ $errors->first('email') }}</div>
                                            </div>


                                                  
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Passwort" required/>
                                                </div>


                                            <div class="form-group">
                                                <label>Bild</label>
                                                <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="exampleInputFile" required/>
                                                    <label class="custom-file-label"  for="exampleInputFile">Datei wählen</label>
                                                </div>
                                             
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inaktiv</option>
                                                </select>
                                                </div>

                                          
                                        
                                        
                                        </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>   Speichern</button>
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
