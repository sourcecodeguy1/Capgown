@extends('layout/app')

@section('content')
    <h2>{{$title}}</h2>
    <div>
        <div class="row">
            <form class="form-group col-md-12 navbar navbar-expand-sm">

                <input type="text" class="form-control col-xs-12 col-sm-4 col-md-4 col-lg-4" id="employee_id" placeholder="Enter admin name" required>

                &nbsp;<input type="password" class="form-control col-xs-12 col-sm-4 col-md-4 col-lg-4" id="employee_id" placeholder="Enter admin password" required>

                &nbsp;<button type="submit" class="btn btn-primary col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control">Submit</button>
            </form>
        </div>
    </div>

@endsection