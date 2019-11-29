@extends('dashboard')
@section('content')


<form action="{{ route('supplies.store')}}" method="post">

    @csrf


            @foreach ($supplies as $supply)


                <div class="orderitem">
                    <label for="italianLight" name="name">{{$supply->name}}</label>
                    <input type="text" name="amount[{{$supply->id}}]"  >


                </div>




            @endforeach


                <input type="submit" value="Bestellen">
    </form>

    @endsection