@extends('crud::template.default')
@section('content')
    <div class="container">

        <h1>purchases</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">price</th><th scope="col">name</th><th scope="col">desc</th><th scope="col">date</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchases as $purchase)
                <tr>
                <td>{{$purchase->id}}</td>
                    <td>{{$purchase->price}}</td><td>{{$purchase->name}}</td><td>{{$purchase->desc}}</td><td>{{$purchase->date}}</td>
                    <td>
                        <form action="{{route('purchases.destroy', $purchase)}}" method="POST">
                            <a href="{{route('purchases.show', $purchase)}}" class="btn btn-light">show</a>
                            <a href="{{route('purchases.edit', $purchase)}}" class="btn btn-info">edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $purchases->links() }}
        <a href="{{route('purchases.create')}}" class="btn btn-success">Add new</a>
    </div>

@endsection
