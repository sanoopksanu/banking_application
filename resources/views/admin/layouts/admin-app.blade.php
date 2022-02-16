<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('admin.common.style')

</head>

<body   class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        @include('admin.common.sidemenu')
      </div>

      <!-- top navigation -->
      @include('admin.common.header')
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="">
        <!-- top tiles -->
        <div class="" style="" >
        <div  id="custom_loader"></div>
        <main id="main">

          @yield('content')

        </main>
      </div>
        <!-- /top tiles -->


      </div>
      <!-- /page content -->

      <!-- footer content -->

      <!-- /footer content -->

      @include('admin.common.footer')
      @include('admin.common.script')
    </div>
  </div>




  {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}

  <!-- Vendor JS Files -->

</body>

</html>