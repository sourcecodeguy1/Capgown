@extends('layouts/app')

@section('content')

<div class="jumbotron text-center">
    <div class="row">
        <div class="card col-lg-4" style="width: 18rem;">
            <i class="fa fa-tags fa-5x" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">Inventory</h5>
                <a href="/inventory" class="btn btn-primary">Check Inventory</a>
            </div>
        </div>
        <div class="card col-lg-4" style="width: 18rem;">
            <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">Time Card</h5>
                <a href="#" class="btn btn-primary">Check Time Card</a>
            </div>
        </div>
        <div class="card col-lg-4" style="width: 18rem;">
            <i class="fa fa-exchange fa-5x" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">Exchanges</h5>
                <a href="#" class="btn btn-primary">Check Exchanges</a>
            </div>
        </div>
    </div>
</div>



@endsection
