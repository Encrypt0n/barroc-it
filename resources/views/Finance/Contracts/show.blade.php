@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <form action="{{ route('contract.store') }}" method="post">
            @csrf
       Lease type: <select name="lease_type">
            <option value="1">1 maand</option>
            <option value="2">3 maanden</option>
            <option value="3">6 maanden</option>
            <option value="4">12 maanden(in 1 keer)</option>
        </select>


            Definitieve offertes: <select name="quotation">

                @foreach ($quotations

                as $quotation)



                <option value="{{$quotation->id}}">Offertenummer: {{$quotation->id}}</option>


            @endforeach


            </select>


            <input type="hidden" name="customer_id" value="{{$company->id}}">



        <input type="submit" value="Lease keuze opslaan">
        </form>
    </div>




@endsection