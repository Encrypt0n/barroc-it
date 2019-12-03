@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> {{ $company->name }} <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
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
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>BKR voldaan:</p>
                        @if ($company->bkr == 2)
                            <img class="cross-check" src="{{ asset('storage/img/check.png') }}" alt="check">
                        @elseif ($company->bkr == 1)
                            <img class="cross-check" src="{{ asset('storage/img/cross.png') }}" alt="cross">
                        @elseif ($company->bkr == 0)
                            <p>...</p>
                        @endif
                    </div>
                </div>
                <div class="dashboard-detail-wrapper-splitter-item">
                    <h4>- Contactpersoon -</h4>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Naam:</p>
                        <p>{{ $company->User->name }}</p>
                    </div>
                    <div class="dashboard-detail-wrapper-splitter-item-data">
                        <p>Email:</p>
                        <p>{{ $company->User->email }}</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <p><b>Opmerkingen:</b></p>
                    <p>{{ $company->note }}</p>
                </div>
            </div>
            <div class="dashboard-centered-button-container">
                <form action="{{ route('customerEdit.edit', $company->id) }}">
                    @csrf
                    <input type="submit" class="centered-button" value="Klant aanpassen">
                </form>
            </div>
        </div>
    </div>
@endsection
