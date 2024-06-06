<!DOCTYPE html>
<html lang="en">
          <!-- Main head -->
          @include('admin.layouts.head')
          <style type="text/css">
            .form-group {
                margin-bottom: 2px;
            }
          </style>
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
                                        <h3 class="card-title">Bestellung Detail</h3>
                                        </div>


                                    <div class="card card-primary">
                      

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>#ID :<span style="font-weight: normal;"> {{ $getRecord->id }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Transaction ID :<span style="font-weight: normal;"> {{ $getRecord->transaction_id }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Name : <span style="font-weight: normal;">{{ $getRecord->first_name }} {{ $getRecord->last_name }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Firmen Name : <span style="font-weight: normal;">{{ $getRecord->first_name }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Land : <span style="font-weight: normal;">{{ $getRecord->country }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Adresse :<span style="font-weight: normal;"> {{ $getRecord->address_one }}, {{ $getRecord->address_two }}</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Stadt :<span style="font-weight: normal;"> {{ $getRecord->city }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>PLZ :<span style="font-weight: normal;"> {{ $getRecord->postcode }}</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Handy Nummer :<span style="font-weight: normal;"> {{ $getRecord->phone }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Email : <span style="font-weight: normal;">{{ $getRecord->email }}</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Gutschein-code (€) : <span style="font-weight: normal;">{{ $getRecord->discount_code }} €</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Gutschein-Betrag (€) : <span style="font-weight: normal;">{{ number_format($getRecord->discount_amount, 2) }} €</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Versand Firma : <span style="font-weight: normal;">{{ $getRecord->getShipping->name  }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Versand (€): <span style="font-weight: normal;">{{ number_format($getRecord->shipping_amount, 2) }} €</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Bezahlung method :<span style="font-weight: normal;"> {{ $getRecord->payment_method }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Summe (€) : <span style="font-weight: normal;">{{ number_format($getRecord->total_amount, 2) }} €</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Status : <span style="font-weight: normal;"></span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Note : <span style="font-weight: normal;">{{ $getRecord->note }}</span></label>
                                            </div>
                                            <div class="form-group">
                                                <label>Erstellen Datum / Uhr : <span style="font-weight: normal;">{{ date('d-m-Y h:i A', strtotime($getRecord->created_at)) }}</span></label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Produkt Detail</div>
        </div>



                                <div class="card-body p-0" style="overflow: auto;">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th><center>Bild</center></th>
                                        <th><center>Produkt Name</center></th>
                                        <th><center>QTY</center></th>
                                        <th><center>Preis</center></th>
                                        <th><center>Farbe</center></th>
                                        <th><center>Grosse</center></th>
                                        <th><center>Groesse Preis</center></th>
                                        <th><center>Summe</center></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord->getItem as $item)
                                        @php
                                         $getProductImage = $item->getProduct->getImageSingle($item->getProduct->id);   
                                        @endphp
                                            <tr>
                                                <td> <center><img style="width: 100px; height: 100px;" src="{{ $getProductImage->getLogo() }}"></center></td>
                                                <td> <center>
                                                    <a target="_blank" href="{{ url($item->getProduct->slug)}}"> {{ $item->getProduct->title }}
                                                    </a>
                                                   </center></td>
                                                <td> <center>{{ $item->quantity }}</center></td>
                                                <td> <center>{{ number_format($item->price, 2) }} €</center></td>
                                                <td> <center>{{ $item->color_name }}</center></td>
                                                <td> <center>{{ $item->size_name }}</center></td>
                                                <td> <center>{{ number_format($item->size_name_amount, 2) }} €</center></td>
                                                <td> <center>{{ number_format($item->total_price, 2) }} €</center></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
