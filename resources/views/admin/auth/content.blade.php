<div class="login-box" style="width: 40%">
    <div class="login-logo">
      <a href="{{ url('/')}}" class="logo">
        <img src="{{ url('assets/images/2.png')}}"  alt="Molla Logo" width="200" height="200">
    </a>
    <br>
    
      <b style="color: black"><b>ADMIN</b></b><a href="#"><b style="color: red;"> <b>SESSION</b>  <span style="color: yellow;"><b>DEUTSCHLAND</b></span></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">EINLOGGEN ZU IHRE PANEL</p>
  @include('admin.layouts._message')
        <form action="{{ url('admin') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field()}}
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Passwort">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                 SPEICHERN
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">ANMELDEN</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
     
  
        <p class="mb-1">
          <a href="#">Passwort vergessen?</a>
        </p>
      
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->