@extends('layouts/app')

@section('content')

    <div class="jumbotron">

        <form action="{!! action('StanfordUniversity2017Controller@update',$stanford_2017_edit->id) !!}" method="POST">

            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">

                <div class="col-lg-3">
                    <label for="gowns_2017">Gown Size</label>
                    <input type="text" name="gowns_2017" id="gowns_2017" class="form-control" value="{{$stanford_2017_edit->gowns_2017}}" readonly>
                </div>

                <div class="col-lg-3">
                    <label for="White">White</label>
                    <input type="number" name="White" id="White" class="form-control" value="{{$stanford_2017_edit->White}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Yellow">Yellow</label>
                    <input type="number" name="Yellow" id="Yellow" class="form-control" value="{{$stanford_2017_edit->Yellow}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Orange">Orange</label>
                    <input type="number" name="Orange" id="Orange" class="form-control" value="{{$stanford_2017_edit->Orange}}" placeholder="Enter number">
                </div>

            </div>

            <br />

            <div class="row">

                <div class="col-lg-3">
                    <label for="Drab">Drab</label>
                    <input type="number" name="Drab" id="Drab" class="form-control" value="{{$stanford_2017_edit->Drab}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Red">Red</label>
                    <input type="number" name="Red" id="Red" class="form-control" value="{{$stanford_2017_edit->Red}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Gold">Gold</label>
                    <input type="number" name="Gold" id="Gold" class="form-control" value="{{$stanford_2017_edit->Gold}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Copper">Copper</label>
                    <input type="number" name="Copper" id="Copper" class="form-control" value="{{$stanford_2017_edit->Copper}}" placeholder="Enter number">
                </div>

            </div>

            <br />

            <div class="row">

                <div class="col-lg-3">
                    <label for="Dark_Blue">Dark Blue</label>
                    <input type="number" name="Dark_Blue" id="Dark_Blue" class="form-control" value="{{$stanford_2017_edit->Dark_Blue}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Light_Blue">Light Blue</label>
                    <input type="number" name="Light_Blue" id="Light_Blue" class="form-control" value="{{$stanford_2017_edit->Light_Blue}}" placeholder="Enter number">
                </div>

                <div class="col-lg-3">
                    <label for="Total">Total</label>
                    <input type="text" name="Total" id="Total" class="form-control" value="{{$total}}" readonly>
                </div>

            </div>

            <br />

            <div class="row">
                <div class="col-lg-11">
                    <input type="submit" class="btn btn-success" value="Update" />
                </div>
                <div class="col-lg-1">
                    <a href="/stanford_university_2017" class="btn btn-dark">Back</a>
                </div>
            </div>
        </form>
    </div>

@endsection