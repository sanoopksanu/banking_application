@extends('admin/layouts.admin-app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Welcome {{ $user_info->name }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                    class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>

                        </li>
                        </li>
                    </ul>
                    <div class="clearfix">


                    </div>

                </div>
                <br><br>
                YOUR ID : {{ $user_info->email }} <br><br>
                YOUR BALANCE : {{ $user_info->balance }}


            </div>
        </div>

    </div>

    <br>
    <br>

    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br>
@endsection
