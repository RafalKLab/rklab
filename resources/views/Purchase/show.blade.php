@extends('crud::template.default')
@section('content')
    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope='col'>price</th><th scope='col'>name</th><th scope='col'>desc</th><th scope='col'>date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->price}}</td><td>{{$purchase->name}}</td><td>{{$purchase->desc}}</td><td>{{$purchase->date}}</td>
            </tr>
            </tbody>
        </table>

        <a class = "btn btn-secondary"
        href="{{route('purchases.index')}}">
        Back
        </a>
    </div>

@endsection


