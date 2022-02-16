@extends('admin/layouts.admin-app')

@section('content')
    <form novalidate action="{{ route('transfer.store') }}" method="POST" class="needs-validation"
        enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12 col-lg-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Transfer Money </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">

                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        @if ($message = Session::get('smsg'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if ($message = Session::get('emsg'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="category">Email <span class="required-color">*</span></label>
                                    <input type="email" id="email" name="email" autocomplete="off" class="form-control"
                                        id=" Sub category" data-parsley-pattern-message="This is not a valid name"
                                        data-parsley-trigger="keyup"
                                        value=""
                                        placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>




                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="category">Amount <span class="required-color">*</span></label>
                                    <input type="number" id="amount" name="amount" autocomplete="off" class="form-control"
                                        id=" Sub category" data-parsley-pattern-message="This is not a valid name"
                                        data-parsley-trigger="keyup"
                                        value=""
                                        placeholder="Enter Amount to Transfer">
                                    @if ($errors->has('amount'))
                                        <p class="text-danger">{{ $errors->first('amount') }}</p>
                                    @endif
                                </div>
                            </div>




                        </div>





                        <div class="row">

                            <div class="col-lg-12 ">
                                <button class="btn btn-success" style="width: 100%" type="submit"> Transfer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>



































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
    <br><br>
    <br><br><br>

    <br><br><br><br>
@endsection
