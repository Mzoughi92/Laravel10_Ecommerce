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
                                        <h3 class="card-title">Page aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                      
                                            <div class="form-group">
                                                <label>name <span style="color: red"></span></label>
                                                <input type="text" class="form-control"  value="{{ $getRecord->name }}" name="name">
                                            </div>


                                            <div class="form-group">
                                                <label>Title <span style="color: red"></span></label>
                                                <input type="text" class="form-control"  value="{{ $getRecord->title }}" name="title">
                                            </div>



                                            <div class="form-group">
                                                <label>Image<span style="color: red"></span></label>
                                                <input type="file" class="form-control"  name="image">
                                                @if(!empty($getRecord->getImage()))
                                                <img style="width: 20%" src="{{ $getRecord->getImage() }}" >
                                                @endif
                                            </div>



                                            <div class="form-group">
                                                <label>Beschreibung<span style="color: red">*</span></label>
                                               <textarea name="description" class="form-control editor" placeholder="Beschreibung">{{ $getRecord->description }}</textarea>
                                              </div>

<hr>


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
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Include Summernote JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.editor').summernote({
        height: 300
      });
    });
  </script>

       
        </body>
</html>
