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
                                        <h3 class="card-title">Admin Aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action=" {{ url('admin/admin/update/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="{{ old('name', $getRecord->name)  }}" name="name" placeholder="Ihre Name" required/>
                                            </div>

                                            <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control"  value="{{ old('email', $getRecord->email)  }}" name="email" placeholder="Geben sie Ihre Email" required/>
                                            <div style="color:red">{{ $errors->first('email') }}</div>
                                             </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Passwort" >
                                                <p>Möchten Sie das Passwort ändern, schreiben Sie es bitte!</p>
                                            </div>


                                            <div class="form-group">
                                                <label>Bild</label>
                                                <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="exampleInputFile" />
                                                    <label class="custom-file-label"  for="exampleInputFile">Datei wählen</label>
                                                </div>
                                             
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                    <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">InActiv</option>
                                                </select>
                                                </div>

                                          
                                        
                                        
                                        </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Aktualisieren</button>
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
