@extends('layouts/app')

@section('content')

    <div class="jumbotron text-center">
        <a class="btn btn-outline-dark pull-right" href="/dashboard">Go back</a>
        <h2>Inventory - Gown</h2>
        <div class="row">

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">Stanford University 2018/2019 Gown</h5>
                  <a href="/stanford_university" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">Stanford University 2017 Gown</h5>
                  <a href="/stanford_university_2017" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">Stanford University 2016 Gown</h5>
                  <a href="/stanford_university_2016" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>
      </div>
        <br />
        <div class="row">
            <div class="card col-lg-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">University California Gown</h5>
                    <a href="/university_california" class="btn btn-primary">Check Inventory</a>
                </div>
            </div>
        </div>
    </div>
    {{------------------------------CAPS---------------------------}}
    <div class="jumbotron text-center">
        <h2>Inventory - Caps</h2>
        <div class="row">

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">UC</h5>
                  <a href="#" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">MIT</h5>
                  <a href="#" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>

          <div class="card col-lg-4" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">Harvard</h5>
                  <a href="#" class="btn btn-primary">Check Inventory</a>
              </div>
          </div>

      </div>
    </div>

@endsection
