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
                                        <h3 class="card-title">Kategorie aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="{{  url('admin/category/update/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Name <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" value="{{ old('name', $getRecord->name)  }}" name="name" placeholder="Enter Name" required/>
                                            </div>

                                            <div class="form-group">
                                                <label>Slug <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" required value="{{ old('slug', $getRecord->slug) }}" name="slug" placeholder="Enter slug  URL" >
                                          <div style="color:red">{{ $errors->first('slug') }}</div>
                                            </div>

                                            <div class="form-group">
                                                <label>Status  <span style="color: red">*</span></label>
                                                <select class="form-control" name="status">
                                                    <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                                                    <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">InActive</option>
                                                </select>
                                                </div>


                                            




                                            <div class="form-group">
                                                <label>Meta-Titel<span style="color: red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Meta Title" required value="{{ old('meta_title', $getRecord->meta_title) }}" name="meta_title" >
                                            </div>



                                            <div class="form-group">
                                                <label>Meta-Beschreibung</label>
                                              <textarea class="form-control" placeholder="Meta Description" name="meta_description" >{{ old('meta_description', $getRecord->meta_description) }}</textarea>
                                            </div>



                                            <div class="form-group">
                                                <label>Meta-Keywords</label>
                                                <input type="text" class="form-control" placeholder="Meta Keywords"  value="{{ old('meta_keywords', $getRecord->meta_keywords) }}" name="meta_keywords" >
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
