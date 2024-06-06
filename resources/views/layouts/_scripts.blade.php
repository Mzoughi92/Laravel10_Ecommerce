

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ url('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{ url('assets/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{ url('assets/js/bootstrap-input-spinner.js')}}"></script>


<script src="{{ url('assets/js/jquery.min.js')}}"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ url('assets/js/superfish.min.js')}}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ url('assets/js/wNumb.js')}}"></script>
<script src="{{ url('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ url('assets/js/nouislider.min.js')}}"></script>
<!-- Main JS File -->

<script src="{{ url('assets/js/main.js')}}"></script>


<script type="text/javascript">




$('body').delegate('#SubmitFormLogin', 'submit', function(e){
         e.preventDefault();
         $.ajax({
                     type : "POST",
                     url : "{{ url('auth_login') }}",
                     data : $(this).serialize(),
                     dataType : "json",
                     success: function (data)
                      {
                      
                     if(data.status == true)
                      {
                      location.reload();
                    }

                    else

                    {

                      alert(data.message);
                    }

                    
                     },
                     error: function (data) {
 
                     }
                 });
                         });























    $('body').delegate('#SubmitFormRegister', 'submit', function(e){
         e.preventDefault();
         $.ajax({
                     type : "POST",
                     url : "{{ url('auth_register') }}",
                     data : $(this).serialize(),
                     dataType : "json",
                     success: function (data)
                      {
                      alert(data.message);
                      if(data.status == true)
                      {
                        location.reload();
                      }
                     },
                     error: function (data) {
 
                     }
                 });
                         });























                     </script>
</body>
</html>