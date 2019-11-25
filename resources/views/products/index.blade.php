@extends('app')
@section('content')
    <div class="container">
        <div class="products">
            @foreach($products as $product)
                <div class="product">
                    <div class="product-name">
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="product-availability">
                        @if($product->amount > 0)
                            <p><span class="in-stock">Op voorraad</span> {{$product->amount}}</p>
                        @else
                            <p class="not-in-stock">Niet beschikbaar</p>
                        @endif
                    </div>
                </div>
                @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection