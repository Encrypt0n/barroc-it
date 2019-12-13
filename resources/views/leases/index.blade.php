@extends('app')
@section('content')
    <div class="container">
        <table>
            <tr>
                <th>Contactpersoon</th>
                <th>Medewerker Finance</th>
                <th>Lease type</th>
            </tr>
            @foreach($leases as $lease)
                <tr>
                    <td>{{$lease->customer->name}}</td>
                    <td>{{$lease->finance->name}}</td>
                    @if($lease->leaseType->id == 1)
                        <td>Maandelijks</td>
                    @else
                        <td>Periodiek</td>
                        @endif
                </tr>
                @endforeach
        </table>
        <a href="{{route('leases.create')}}">Maak een lease contract aan</a>
    </div>
    @endsection