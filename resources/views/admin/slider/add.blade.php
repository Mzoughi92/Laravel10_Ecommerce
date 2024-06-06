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
                                        <h3 class="card-title">Banner hinzufügen</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Title<span style="color: red">*</span></label>
                                                <input type="text" class="form-control" required value="{{ old('name') }}" name="name" placeholder="name" >
                                            </div>




                                            <hr />

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Beschreibung<span style="color: red">*</span></label>
                                                       <textarea name="description" class="form-control editor" placeholder="Beschreibung"></textarea>
                                                      </div>
                                                    </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Beschreibung2<span style="color: red">*</span></label>
                                                       <textarea name="description2" class="form-control editor" placeholder="Beschreibung2"></textarea>
                                                      </div>
                                                    </div>
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
                                                <label>Link:<span style="color: red">*</span></label>
                                                <input type="text" class="form-control" required  name="link" placeholder="http:/www.beispiel.de/1556478989" >
                                            </div>



                                          
                                            <div class="form-group">
                                                <label>Status  <span style="DiscountCode: red">*</span></label>
                                                <select class="form-control" name="status">
                                                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">InAktiv</option>
                                                </select>
                                                </div>
                                          

                                        </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Speichern</button>
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
