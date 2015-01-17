@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">Sign In</div>
                <div class="panel-body">

                    @include('partials.errors')


                    {{ Form::open(array('route' => 'auth.sign_in', 'method' => 'post')) }}
                        {{ Form::token() }}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-small btn-center">Submit</button>
                    {{ Form::close() }}

                </div>
            </div>

        </div>
        <div class="col-md-4"></div>

    </div>
@stop