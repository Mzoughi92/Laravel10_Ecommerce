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
                                        <h3 class="card-title">Rabattcode aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        
                                              
                                        <form action="{{  url('admin/discount_code/update/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
 

                                        <div class="card-body">

                                    

                                            <div class="form-group">
                                                <label>XXXXX Gutschein Code XXXXX <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" value="{{ old('name', $getRecord->name)  }}" name="name" placeholder="XXXXX Gutschein Code XXXXX" required/>
                                            </div>



                                         
                                                <div class="form-group">
                                                    <label> Typ <span style="color: red">*</span></label>
                                                    <select class="form-control" name="type">
                                                        <option {{ (old('type', $getRecord->type)  == 'Amount') ? 'selected' : '' }} value="Amount">Betrag</option>
                                                        <option {{ (old('type', $getRecord->type)  == 'Percent') ? 'selected' : '' }} value="Percent">Prozent</option>
                                                    </select>
                                                    </div>
    
                                                
                                                <div class="form-group">
                                                    <label>Prozent / Betrag<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control" value="{{ old('percent_amount', $getRecord->name)  }}" name="percent_amount" placeholder="Prozent /Betrag" required/>
                                                </div>


                                                <div class="form-group">
                                                    <label>Ablaufdatum <span style="color: red">*</span></label>
                                                    <input type="date" class="form-control" value="{{ old('expire_date', $getRecord->expire_date)  }}" name="expire_date" placeholder="Ablaufdatum" required/>
                                                </div>
    



                                                <div class="form-group">
                                                    <label>Status  <span style="color: red">*</span></label>
                                                    <select class="form-control" name="status">
                                                        <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                        <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Inaktiv</option>
                                                    </select>
                                                    </div>
    
                                        </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> bestätigen</button>
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
