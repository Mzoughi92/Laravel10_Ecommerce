<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard v3</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v3</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fab fa-first-order"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Orders</span>
          <span class="info-box-number">{{ $TotalOrder }}</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fab fa-first-order"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Heute Orders</span>
          <span class="info-box-number">{{ $TotalTodayOrder }}</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Gesamtzahlung</span>
          <span class="info-box-number">{{ number_format($TotalAmount, 2) }} €</span>
        </div>
      </div>
    </div>

    
    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Heute Zahlung</span>
          <span class="info-box-number">{{ number_format($TotalTodayAmount, 2) }} €</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Gesamtkunde</span>
          <span class="info-box-number">{{ $TotalCustomer }}</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Heute Kunde</span>
          <span class="info-box-number">{{ $TotalTodayCustomer }}</span>
        </div>
      </div>
    </div>

  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                 <select class="form-control ChangeYear" style="width: 100px;">
                   @for($i=2022; $i<=date('Y'); $i++)
                   <option  {{ ($year == $i) ? 'selected': '' }} value="{{ $i }}">{{ $i }}</option>
                   @endfor
                </select>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">{{ number_format($totalAmount, 2) }} €</span>
                    <span>Sales Over Time</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart-order" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Customer
                  </span>

                  <span class="mr-2">
                    <i class="fas fa-square text-gray"></i> Order
                  </span>

                  <span class="mr-2">
                    <i class="fas fa-square text-danger"></i> Amount
                  </span>


                </div>
              </div>
            </div>
            <!-- /.card -->

            
          </div>
            
          <!-- /.card -->

          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Last orders</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body  p-0">
              

              <table class="table table-striped table-valign-middle">
                <thead>
                  <tr>
                    <th><center>#</center></th>
                    <th><center>Bestellung Nummer</center></th>
                    <th><center>Name</center></th>
                  
                    <th><center>Land</center></th>
                    <th><center>Adresse</center></th>
                    <th><center>Stadt</center></th>
                    <th><center>Erstellt von</center></th>
                    <th><center>PLZ</center></th>
                    <th><center>Handy Nummer</center></th>
                    <th><center>Email</center></th>
                    <th><center>Gutschein-code (€) </center></th>
                    <th><center>Gutschein-Betrag (€)</center></th>
                    <th><center>Versand</center></th>
                    <th><center>Bezahlung method</center></th>
                    <th><center>Summe (€)</center></th>
                    <th><center>Erstellen Datum / Uhr</center></th>
                    
                    <th><center>Aktion</center></th>
                  </tr>
                </thead>
                
                     <tbody>
                      @foreach ($getLatestOrders as $value)
                              <tr>
                                <td><center>{{ $value->id }}</center></td>
                                <td><center>{{ $value->order_number }}</center></td>
                                <td><center>{{ $value->first_name }} {{ $value->last_name}}</center></td>
                          
                                <td><center>{{ $value->country }}</center></td>
                                <td><center>{{ $value->address_one }} <br/> {{ $value->address_two }} </center></td>
                                <td><center>{{ $value->city }}</center></td>
                                <td><center>{{ $value->state }}</center></td>
                                <td><center>{{ $value->postcode }}</center></td>
                                <td><center>{{ $value->phone }}</center></td>
                                <td><center><b>{{ $value->email }} </b> </center></td>
                                <td><center>{{ $value->discount_code }}</center></td>
                                <td><center><b>{{ number_format($value->discount_amount, 2) }} </b></center></td>
                                <td><center><b>{{ number_format($value->shipping_amount, 2) }} € </b></center></td>
                                <td style="text-transform: capitalize;"><center>{{ $value->payment_method }}</center></td>
                              
                                <td><center><b>{{ number_format($value->total_amount, 2)  }} € </b> </center></td>
                                <td><center>{{ date('d-m-Y h:i A', strtotime($value->created_at)) }}</center></td>
                                <td><center><a href="{{ url('admin/orders/detail/'.$value->id) }}" class="btn btn-primary">Detail</a></center></td>
                              </tr>
                              @endforeach
                            </tbody>
              </table>

              
            </div>
          </div>
          <!-- /.card -->
        </div>
     
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ url('assets/admin/dist/js/pages/dashboard3.js') }}"></script>
<script type="text/javascript">
$('.ChangeYear').change(function ()
{
  var year = $(this).val();
  window.location.href = "{{ url('admin/dashboard?year=')}}"+year;
});


   $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart-order')
  var salesChart  = new Chart($salesChart, {
    type   : 'bar',
    data   : {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data           : [{{ $getTotalCustomerMonth }}]
        },
        {
          backgroundColor: '#ced4da',
          borderColor    : '#ced4da',
          data           : [{{ $getTotalOrderMonth }}]
        },
        {
          backgroundColor: 'red',
          borderColor    : 'red',
          data           : [{{ $getTotalOrderAmountMonth }}]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value, index, values) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }
              return '€' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })

  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type                : 'line',
        data                : [100, 120, 170, 167, 180, 177, 160],
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : [60, 80, 70, 67, 80, 77, 100],
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
})

</script>
