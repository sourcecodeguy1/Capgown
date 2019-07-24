@extends('layouts/app')

@section('content')

    <h2>University of California Gown <span><a class="btn btn-outline-dark pull-right" href="/inventory">Go back</a></span></h2>
    <br />
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th></th>
            <th>new fit</th>
            <th></th>
            <th></th>
            <th>Small Chevron</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th scope="col">Gowns</th>
            <th scope="col">2019</th>
            <th scope="col">2017/2018</th>
            <th scope="col">2016</th>
            <th scope="col">2015</th>
            <th scope="col">Light Blue</th>
            <th scope="col">Seconds</th>
            <th scope="col">Velveteen</th>
            <th scope="col">Velveteen discolored</th>
            <th scope="col">Rental</th>
            <th scope="col">Rentals Out</th>
            <th scope="col">Rentals Left</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ucposts as $ucpost)
        <tr>
            <td>{{$ucpost->Gowns}}</td>
            <td>{{$ucpost->gown_2019}}</td>
            <td>{{$ucpost->gown_2017_2018}}</td>
            <td>{{$ucpost->gown_2016}}</td>
            <td>{{$ucpost->gown_2015}}</td>
            <td>{{$ucpost->Light_Blue}}</td>
            <td>{{$ucpost->Seconds}}</td>
            <td>{{$ucpost->Velveteen}}</td>
            <td>{{$ucpost->Velveteen_discolored}}</td>
            <td>{{$ucpost->Rental}}</td>
            <td>{{$ucpost->Rentals_Out}}</td>
            <td>{{$ucpost->Rentals_Left}}</td>
            <th>{{$ucpost->Total}}</th>
            <td><a href="/university_california/{{$ucpost->id}}/edit" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
            <tr>
                <th>TOTAL</th>
                @foreach($gowns_sum as $gown)
                    <th>{{$gown}}</th>
                @endforeach
            </tr>
        </tbody>
    </table>
    {{--<script type="text/javascript" src="{{asset('js/index.js')}}"></script>--}}
@endsection
