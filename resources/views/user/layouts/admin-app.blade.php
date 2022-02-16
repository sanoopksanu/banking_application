<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Groovin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('user.common.style')

</head>

<body>




  @include('user.common.header')




  <main id="main">

    @yield('content')

  </main>

  @include('user.common.footer')
  @include('user.common.script')
  {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}

  <!-- Vendor JS Files -->

</body>

</html>