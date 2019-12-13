@extends('dashboard')
@section('content')
    <div class="container">
        <form action="{{route('leases.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="input-group">
                <label for="companyName">Bedrijfsnaam</label>
                    <select id="companyName" name="companyName">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }} </option>
                        @endforeach
                    </select>
            </div>

            <div class="input-group">
                <label for="">Factuur betaling</label>
                <select>
                    @foreach($leaseTypes as $leaseType)
                        @if($leaseType->id == 1)
                            <option value="{{$leaseType->id}}">
                                Maandelijks
                            </option>
                        @else
                            <option value="{{$leaseType->id}}">
                                Periodiek
                            </option>
                        @endif
                        @endforeach
                </select>
            </div>
            <input type="submit">
        </form>
    </div>
    @endsection