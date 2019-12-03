@extends('app')
@section('content')
    <div class="container">
        <table>
            @foreach($leases as $lease)
                <tr>
                    <td>{{$lease->customer->name}}</td>
                </tr>
                @endforeach
        </table>
    </div>
    @endsection