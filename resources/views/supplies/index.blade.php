@extends('app')
@section('content')
    <div class="container">
        <div class="products">
            @foreach($supplies as $supply)
                <div class="product">
                    <div class="product-name">
                        <a href="{{route('supplies.index', $supply->id )}}">{{$supply->name}}</a>
                    </div>
                    <div class="product-availability">
                        @if($supply->amount > 0)
                            <p><span class="in-stock">Op voorraad</span> {{$supply->amount}}</p>
                        @else
                            <p class="not-in-stock">Niet beschikbaar</p>
                        @endif
                    </div>

                </div>
                @endforeach
                <form action="{{ route('supplies.create') }}">
                    @csrf
                    <div class="form-group">

                        <input class="centered-button" type="submit" value="Bijbestellen">
                    </div>
                </form>

        </div>

    </div>
@endsection