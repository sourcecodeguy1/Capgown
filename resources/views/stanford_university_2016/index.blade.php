@extends('layouts/app')

@section('content')

    <h2>Stanford University 2016 Gown <span><a class="btn btn-outline-dark pull-right" href="/inventory">Go back</a></span></h2>
    <br />
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Gowns - 2016</th>
            <th scope="col">White</th>
            <th scope="col">Yellow</th>
            <th scope="col">Orange</th>
            <th scope="col">Drab</th>
            <th scope="col">Red</th>
            <th scope="col">Gold</th>
            <th scope="col">Copper</th>
            <th scope="col">Dark Blue</th>
            <th scope="col">Light Blue</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $post_column)

            <tr>
                <td>{{$post_column->gowns_2016}}</td>
                <td>{{$post_column->White}}</td>
                <td>{{$post_column->Yellow}}</td>
                <td>{{$post_column->Orange}}</td>
                <td>{{$post_column->Drab}}</td>
                <td>{{$post_column->Red}}</td>
                <td>{{$post_column->Gold}}</td>
                <td>{{$post_column->Copper}}</td>
                <td>{{$post_column->Dark_Blue}}</td>
                <td>{{$post_column->Light_Blue}}</td>
                <th>{{$post_column->Total}}</th>
                <td><a id="btnEdit" href="/stanford_university_2016/{{$post_column->id}}/edit" class="btn btn-primary">Edit</a></td>
            </tr>

        @endforeach

        <tr>
            <th>TOTAL</th>
            @foreach($sum_all_columns as $column)
                <th>{{$column}}</th>
            @endforeach
        </tr>

        </tbody>
    </table>
    {{--<script type="text/javascript" src="{{asset('js/index.js')}}"></script>--}}
@endsection
