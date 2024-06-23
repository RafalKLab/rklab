@extends('crud::template.default')

@section('content')
    <div class="container">
        @isset($purchase)
            <h1>purchase update</h1>
        @else
            <h1>Add new purchase</h1>
        @endisset
        <hr>
        <form method="POST"
              @isset($purchase)
              action="{{route('purchases.update', $purchase)}}"
              @else
              action="{{route('purchases.store')}}"
            @endisset
        >
            <div>
                @isset($purchase)
                    @method('PUT')
                @endisset
                @csrf

               <div class="row">
<label for="price" class='col-sm-2 col-form-label '>price: </label>
<div class="col-sm-6">
<input type='text' class='form-control' name='price' id='price'
value='@isset($purchase){{ $purchase->price }}@endisset
{{Request::old('price') ? : ''}}'>@if($errors->has('price'))<span class="text-danger">{{$errors->first('price')}}</span>@endif
</div></div><br><div class="row">
<label for="name" class='col-sm-2 col-form-label '>name: </label>
<div class="col-sm-6">
<input type='text' class='form-control' name='name' id='name'
value='@isset($purchase){{ $purchase->name }}@endisset
{{Request::old('name') ? : ''}}'>@if($errors->has('name'))<span class="text-danger">{{$errors->first('name')}}</span>@endif
</div></div><br><div class="row">
<label for="desc" class='col-sm-2 col-form-label '>desc: </label>
<div class="col-sm-6">
<textarea class='form-control' name='desc' id='desc' rows='3'>@isset($purchase){{ $purchase->desc }}@endisset{{Request::old('desc') ? : ''}}</textarea>@if($errors->has('desc'))<span class="text-danger">{{$errors->first('desc')}}</span>@endif
</div></div><br><div class="row">
<label for="date" class='col-sm-2 col-form-label '>date: </label>
<div class="col-sm-6">
<input type='date' class='form-control' name='date' id='date'
value='@isset($purchase){{ \Carbon\Carbon::parse( $purchase->date )->format('Y-m-d') }}@endisset'>@if($errors->has('date'))<span class="text-danger">{{$errors->first('date')}}</span>@endif
</div></div><br>
                <a class = "btn btn-secondary" href="{{route('purchases.index')}}">Back</a>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection
