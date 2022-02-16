<style>

  .active_class {

    background-color: rgb(60, 0, 128);

  }

  </style>

<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ABC Bank</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      {{-- <img src="" alt="..." class="img-circle profile_img"> --}}
    </div>

  </div>
  <!-- /menu profile quick info -->

  <br />

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

      <ul class="nav side-menu">
        <li  class="{{ ($page_name == 'home') ? 'active_class' : '' }}">
          <a href="{{url('inbox/home')}}" ><i class="fa fa-home"></i> Home </span></a>

        </li>

        <li  class="{{ ($page_name == 'deposite') ? 'active_class' : '' }}">
          <a href="{{url('deposit')}}" class=""><i class="glyphicon glyphicon-cloud-upload"></i>  Desposit </span></a>

        </li>

        <li  class="{{ ($page_name == 'withdraw') ? 'active_class' : '' }}">
          <a href="{{url('withdrawal')}}" class=" "><i class="glyphicon glyphicon-cloud-download"> </i> Withdrawal  </span></a>

        </li>

        <li  class="{{ ($page_name == 'transfer') ? 'active_class' : '' }}">
          <a href="{{url('transfer')}}" class=""><i class="glyphicon glyphicon-resize-horizontal"></i> Transfer  </span></a>

        </li>

        <li  class="{{ ($page_name == 'statement') ? 'active_class' : '' }}">
          <a href="{{url('statement')}}" class=""><i class="glyphicon glyphicon-list-alt"></i> Statement   </span></a>

        </li>



    </div>


  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->
</div>