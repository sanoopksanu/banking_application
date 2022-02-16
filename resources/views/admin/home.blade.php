@extends('admin/layouts.admin-app')

@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Welcome  {{ $user_info->name }} </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    {{-- <li> <a href="{{url('admin/create')}}" class="btn btn-info"> <i class="fa fa-plus"> </i> New loan </a> --}}
                    </li>
                    </li>
                </ul>
                <div class="clearfix">


                </div>

            </div>
         YOUR ID :   {{ $user_info->email }} <br>
          YOUR BALANCE :  {{ $user_info->balance }}

{{--
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client Id</th>
                                <th>Number Of Payment</th>
                                <th>First Payment Date</th>
                                <th>Last Payment Date</th>

                                <th>Loan Amount</th>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loan_details as $key => $data)
                            <tr>
                             <td>{{ $key + 1 }}</td>
                             <td> {{ $data->clientid }}  </td>
                             <td>{{  $data->num_of_payment }}</td>
                             <td>{{  $data->first_payment_date }}</td>
                             <td>{{  $data->last_payment_date }}</td>
                             <td>{{  $data->loan_amount }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>

            </div> --}}
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
