@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Kalender <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
            <div class="dashboard-centered-button-container">
                <form action="{{ route('calendar.create') }}">
                    @csrf
                    <input type="submit" class="centered-button" value="Bezoek plannen">
                </form>
            </div>
            <div class="dashboard-detail-wrapper-center">
                <div>
                    @foreach($calendars as $calendar)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
