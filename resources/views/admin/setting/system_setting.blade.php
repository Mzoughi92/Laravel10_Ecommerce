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
                                    @include('admin.layouts._message')
                                     <div class="card">
                                        <div class="card-header">
                                        <h3 class="card-title">System Setting</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>website <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" value="{{ $getRecord->website_name }}" name="website_name" >
                                            </div>

                                            <div class="form-group">
                                                <label>Logo <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="logo">
                                                @if(!empty($getRecord->getLogo()))
                                                    <img src="{{ $getRecord->getLogo() }}" style="width: 200px;">
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Fevicon <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="fevicon">
                                                @if(!empty($getRecord->getFevicon()))
                                                    <img src="{{ $getRecord->getFevicon() }}" style="width: 50px;">
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>footer_description<span style="color: red">*</span></label>
                                                <textarea class="form-control" name="footer_description">{{ $getRecord->footer_description }}</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Footer Payment Icon<span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="footer_payment_icon">
                                                @if(!empty($getRecord->getFooterPayment()))
                                                    <img src="{{ $getRecord->getFooterPayment() }}" style="width: 50px;">
                                                @endif
                                            </div>
                                            


                                        <hr />

                                        <div class="form-group">
                                            <label>Adress<span style="color: red">*</span></label>
                                            <textarea class="form-control" name="address" >{{ $getRecord->address }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Adress<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $getRecord->address_tow }}"  name="address_tow" >
                                        </div>


                                        <div class="form-group">
                                            <label>Phone<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $getRecord->phone }}"  name="phone" >
                                        </div>


                                        <div class="form-group">
                                            <label>Phone 2<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $getRecord->phone_two }}" name="phone_two" >
                                        </div>

                                        <div class="form-group">
                                            <label>Submit Contact Email<span style="color: red">*</span></label>
                                            <input type="submit_email" class="form-control" value="{{ $getRecord->submit_email }}" >
                                        </div>


                                        <div class="form-group">
                                            <label>Email<span style="color: red">*</span></label>
                                            <input type="email" class="form-control" value="{{ $getRecord->email }}" >
                                        </div>

                                        <div class="form-group">
                                            <label>Email 2<span style="color: red"></span></label>
                                            <input type="email_two" class="form-control" value="{{ $getRecord->email_two }}" >
                                        </div>


                                        <div class="form-group">
                                            <label>Working Hour <span style="color: red"></span></label>
                                            <textarea class="form-control" name="working_hour" >{{ $getRecord->working_hour }}</textarea>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <label>Facebook Link<span style="color: red"></span></label>
                                            <input type="text" class="form-control"  value="{{ $getRecord->facebook_link }}"  name="facebook_link" >
                                        </div>

                                        <div class="form-group">
                                            <label>Twitter Link<span style="color: red"></span></label>
                                            <input type="text" class="form-control"  value="{{ $getRecord->twitter_link }}" name="twitter_link" >
                                        </div>


                                        <div class="form-group">
                                            <label>Instagram Link<span style="color: red"></span></label>
                                            <input type="text" class="form-control"  value="{{ $getRecord->instagram_link }}" name="instagram_link" >
                                        </div>

                                        <div class="form-group">
                                            <label>Youtube Link<span style="color: red"></span></label>
                                            <input type="text" class="form-control"  value="{{ $getRecord->youtube_link }}" name="youtube_link" >
                                        </div>


                                        <div class="form-group">
                                            <label>pinterest Link<span style="color: red"></span></label>
                                            <input type="text" class="form-control"  value="{{ $getRecord->youtube_link }}" name="youtube_link" >
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
                            </div>
                        </section>
                      
                    @include('admin.layouts.footer')
                     

        </div>

            <!-- Main scripts -->
          @include('admin.layouts.scripts')
            <!-- End scripts -->

      </body>
</html>
