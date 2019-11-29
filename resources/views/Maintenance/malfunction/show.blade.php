@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> {{ $company->name }} <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
            <h4>Opmerking storing:</h4>
            <p>{{ $malfunction->description }}</p>
            <div class="dashboard-detail-wrapper-splitter">
                <div class="dashboard-detail-wrapper-splitter-item">
                    <h4>- Bedrijf -</h4>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Bedrijfsnaam:</p>
                        <p>{{ $company->name }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Email:</p>
                        <p>{{ $company->email }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Adres:</p>
                        <p>{{ $company->address }}</p>
                    </div>
                </div>
                <div class="dashboard-detail-wrapper-splitter-item">
                    <h4>- Contactpersoon -</h4>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Naam:</p>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Email:</p>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection