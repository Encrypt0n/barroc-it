@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Bezoek plannen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="form-container">
        <div class="form-container-wrapper">
            <form class="finance-customer-form" action="{{ route('calendar.store') }}" method="POST">
                @csrf
                <div class="finance-customer-form-checkbox-container">
                    <label class="form-label" for="1">Reparatie</label>
                    <input type="radio" id="1" name="type" value="1" checked>
                </div>
                <div class="finance-customer-form-checkbox-container">
                    <label class="form-label" for="2">Routinematig</label>
                    <input type="radio" id="2" name="type" value="2">
                </div>
                <div class="finance-customer-form-checkbox-container">
                    <label class="form-label" for="3">Installatie</label>
                    <input type="radio" id="3" name="type" value="3">
                </div>
                <div class="maintenance-calendar-form-label-split">
                    <label class="form-label" for="date">Datum:</label>
                    <input class="form-date" type="date" name="date">
                </div>
                <div class="maintenance-calendar-form-label-split">
                    <label class="form-label" for="company_id">Bedrijf:</label>
                    <select class="form-select" id="company_id" name="company_id">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="maintenance-calendar-form-label-split">
                    <label class="form-label" for="user_id">Medewerker:</label>
                    <select class="form-select" id="user_id" name="user_id">
                        @foreach ($users as $user)
                            @if ($user->role == 2)
                                <option value="{{ $user->id }}"> {{ $user->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="finance-customer-form-textarea">
                    <label class="form-label" for="to_repair">Te repareren/installeren</label>
                    <textarea class="form-textarea" type="text" id="to_repair" name="to_repair"></textarea>
                </div>
                <div class="finance-customer-form-textarea">
                    <label class="form-label" for="to_use">Mee te nemen</label>
                    <textarea class="form-textarea" type="text" id="to_use" name="to_use"></textarea>
                </div>
                <input type="submit" class="centered-button" value="Bezoek plannen">
            </form>
        </div>
    </div>
@endsection
