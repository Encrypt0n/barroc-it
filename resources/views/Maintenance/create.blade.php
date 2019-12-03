@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Wekrbon invullen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>

    <form action="{{route('jobTicket.store')}}" method="POST" class="form form-group">
        @csrf
    <div class="form-control">
        <label for="">Bezoek:</label>

        <label for="finished">Voltooid:</label>
        <input type="checkbox" name="finished">
    </div>
        <div class="productsUsed">

{{--        @foreach($supplies as $supply)--}}
{{--                <label for="supply">{{$supply->name}}</label>--}}
{{--                <input type="text" name="supply_id" id="supply">--}}
{{--            @endforeach--}}

            <label for="supply"></label>
            <input type="text" name="rubber_10" id="supply">

            <label for="supply"></label>
            <input type="text" name="rubber_14" id="supply">

            <label for="supply"></label>
            <input type="text" name="" id="supply">

            <label for="supply"></label>
            <input type="text" name="supply_id" id="supply">

            <label for="supply"></label>
            <input type="text" name="supply_id" id="supply">

            <label for="supply"></label>
            <input type="text" name="supply_id" id="supply">

            <label for="supply"></label>
            <input type="text" name="supply_id" id="supply">

            <label for="supply"></label>
            <input type="text" name="supply_id" id="supply">

        </div>
        <input type="submit" class="centered-button" value="Werkbon versturen">

    </form>
@endsection
