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
                                        <h3 class="card-title">Rabattcode hinzufügen</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                        <form action="" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>xxx gutschein Code xxx<span style="color: red">*</span></label>
                                                <input type="text" class="form-control" required value="{{ old('name') }}" name="name" placeholder="xxx gutschein Code xxx" >
                                            </div>




                                            <div class="form-group">
                                                <label>Typ<span style="color: red">*</span></label>
                                                <select class="form-control" name="type">
                                                    <option {{ (old('type') == 'Amount') ? 'selected' : '' }} value="Amount">Betrag</option>
                                                    <option {{ (old('type') == 'Percent') ? 'selected' : '' }} value="Percent">Prozent</option>
                                                </select>
                                                </div>
                                          

                                                <div class="form-group">
                                                    <label>Prozent / Betrag<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control" required value="{{ old('percent_amount') }}" name="percent_amount" placeholder="Prozent / Betrag" >
                                                </div>


                                                <div class="form-group">
                                                    <label>Ablauf datum<span style="color: red">*</span></label>
                                                    <input type="date" class="form-control" required value="{{ old('expire_date') }}" name="expire_date" >
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
