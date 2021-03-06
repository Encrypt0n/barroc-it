@extends('dashboard')
@section('content')
    <div class="container">
        <table class="supply-table">
            <tr>
                <th>Product Naam</th>
                <th>Voorraad</th>
                <th>Hoeveelheid</th>
                <th>Categorie</th>
            </tr>
            @foreach($supplies as $supply)
             <tr>
                <td>{{$supply->name}}</td>
                @if($supply->amount > 0)
                     <td class="in-stock">Op voorraad</td>
                    @else
                    <td class="not-in-stock">Niet beschikbaar</td>
                    @endif
                 <td>{{$supply->amount}}</td>
                <td>{{$supply->supplyCategory->name}}</td>
                    <td><a href="{{route('supplies.edit', $supply->id)}}">Bewerk</a></td>
             </tr>
            @endforeach

        </table>
        
        <form action="{{ route('supplies.create') }}">
                            @csrf
                            <div class="form-group">
        
                                <input class="centered-button" type="submit" value="Bijbestellen">
                            </div>
                        </form>
        {{--{{$products->links()}}--}}
    </div>
@endsection