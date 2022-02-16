@extends('admin/layouts.admin-app')

@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Statement of Account </h2>
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
                <div class="clearfix"></div>
            </div>


            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Time</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Details</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction_details as $key => $data)
                            <tr>
                             <td>{{ $key+1 }}</td>
                             <td><?php $dateObject = new DateTime($data->added_date);
                                $added_date=$dateObject->format('d-m-y h:i A')?>   {{  $added_date }} </td>
                             <td>{{  $data->amount }}</td>
                             <td>@if( $data->type == Config::get('constants.credit'))
                                   Credit
                                 @else
                                 Debit
                                    @endif

                               </td>
                             <td>{{  $data->details }}</td>
                             <td>{{  $data->balance }}</td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                    {!! $transaction_details->links() !!}
                </div>

            </div>
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
