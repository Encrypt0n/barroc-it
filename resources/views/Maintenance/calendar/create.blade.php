@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Bezoek plannen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
            <div class="dashboard-centered-button-container">
                <form action="{{ route('calendar.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="1">Reparatie</label>
                        <input type="radio" id="1" name="type" value="1" checked>
                    </div>
                    <div>
                        <label for="2">Routinematig</label>
                        <input type="radio" id="2" name="type" value="2">
                    </div>
                    <div>
                        <label for="3">Installatie</label>
                        <input type="radio" id="3" name="type" value="3">
                    </div>
                    <input type="date" name="date">
                    <select id="company_id" name="company_id">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }} </option>
                        @endforeach
                    </select>

                    <input type="submit" class="centered-button" value="Bezoek plannen">
                </form>
            </div>
        </div>
    </div>
@endsection
