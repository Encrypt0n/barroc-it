@extends('dashboard')
@section('content')

    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Bijbestellen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
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