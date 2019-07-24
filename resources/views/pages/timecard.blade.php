@extends('layouts/app')

@section('content')
    <div class="row">
        <form class="form-group col-md-12 navbar navbar-expand-sm">

            <input type="text" class="form-control col-xs-12 col-sm-6 col-md-6 col-lg-6" id="employee_id" placeholder="Enter your employee id number" required>


            &nbsp;<button type="submit" class="btn btn-primary col-xs-12 col-sm-6 col-md-6 col-lg-6 form-control">Submit</button>
        </form>
    </div>
@endsection