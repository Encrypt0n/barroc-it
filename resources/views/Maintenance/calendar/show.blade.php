@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> {{ $calendar->CalendarType->name }} / {{ $calendar->date }} / {{ $calendar->Company->name }} <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
            <div class="dashboard-detail-wrapper-splitter">
                <div class="dashboard-detail-wrapper-splitter-item">
                    <h4>- Bedrijf -</h4>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Bedrijfsnaam:</p>
                        <p>{{ $calendar->Company->name }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Email:</p>
                        <p>{{ $calendar->Company->email }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Adres:</p>
                        <p>{{ $calendar->Company->address }}</p>
                    </div>
                </div>
                <div class="dashboard-detail-wrapper-splitter-item">
                    <h4>- Contactpersoon -</h4>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Naam:</p>
                        <p>{{ $calendar->Company->User->name }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Email:</p>
                        <p>{{ $calendar->Company->User->email }}</p>
                    </div>
                </div>
            </div>
            <div>
                <h4>Te repareren/Installeren:</h4>
                <p>{{ $calendar->to_repair }}</p>
                <h4>Mee te nemen:</h4>
                <p>{{ $calendar->to_use }}</p>
                <h4>Gekoppelde medewerker</h4>
                <p>{{ $calendar->User->name }}</p>
            </div>
        </div>
    </div>
@endsection
