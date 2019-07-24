@extends('layouts/app')

@section('content')

    <div class="jumbotron">

        <form action="{!! action('UCPostsController@update',$edit_uc->id) !!}" method="POST">

            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">

                <div class="col-lg-3">
                    <label for="Gown">Gown Size</label>
                    <input type="text" name="Gowns" id="Gowns" class="form-control" value="{{$edit_uc->Gowns}}" readonly>
                </div>

                <div class="col-lg-3">
                    <label for="Gown2019">Gown 2019</label>
                    <input type="number" name="gown_2019" id="Gown2019" class="form-control" value="{{$edit_uc->gown_2019}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Gown20172018">Gown 2017/2018</label>
                    <input type="number" name="gown_2017_2018" id="Gown20172018" class="form-control" value="{{$edit_uc->gown_2017_2018}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Gown2016">Gown 2016</label>
                    <input type="number" name="gown_2016" id="Gown2016" class="form-control" value="{{$edit_uc->gown_2016}}" placeholder="Enter number">
                </div>

            </div>

            <br />

            <div class="row">

                <div class="col-lg-3">
                    <label for="Gown2015">Gown 2015</label>
                    <input type="number" name="gown_2015" id="Gown2015" class="form-control" value="{{$edit_uc->gown_2015}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="LightBlue">Light Blue</label>
                    <input type="number" name="Light_Blue" id="LightBlue" class="form-control" value="{{$edit_uc->Light_Blue}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Seconds">Seconds</label>
                    <input type="number" name="Seconds" id="Seconds" class="form-control" value="{{$edit_uc->Seconds}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Velveteen">Velveteen</label>
                    <input type="number" name="Velveteen" id="Velveteen" class="form-control" value="{{$edit_uc->Velveteen}}" placeholder="Enter number">
                </div>

            </div>

            <br />

            <div class="row">

                <div class="col-lg-3">
                    <label for="Velveteen_discolored">Velveteen Discolored</label>
                    <input type="number" name="Velveteen_discolored" id="Velveteen_discolored" class="form-control" value="{{$edit_uc->Velveteen_discolored}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Rental">Rental</label>
                    <input type="number" name="Rental" id="Rental" class="form-control" value="{{$edit_uc->Rental}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Rentals_Out">Rentals Out</label>
                    <input type="number" name="Rentals_Out" id="Rentals_Out" class="form-control" value="{{$edit_uc->Rentals_Out}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Rentals_Left">Rentals Left</label>
                    <input type="number" name="Rentals_Left" id="Rentals_Left" class="form-control" value="{{$edit_uc->Rentals_Left}}" placeholder="Enter number">
                </div>

            </div>

            <div class="row">
                <div class="col-lg-3">
                    <label for="Total">Total</label>
                    <input type="number" name="Total" id="Total" class="form-control" value="{{$edit_uc->Total}}" placeholder="Enter number" readonly="">
                </div>
            </div>

            <br />

            <div class="row">
                <div class="col-lg-11">
                    <input type="submit" class="btn btn-success" value="Update" />
                </div>
                <div class="col-lg-1">
                    <a href="/university_california" class="btn btn-dark">Back</a>
                </div>
            </div>
        </form>
    </div>

@endsection