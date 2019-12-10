@extends('dashboard')

@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Gegevens aanpassen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="dashboard-detail-container">
        <div class="dashboard-detail-wrapper">
            <div class="dashboard-centered-button-container">
                <form action="{{ route('customerDetail.update', $company->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <h2>Bedrijf</h2>
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                    <label for="company_name">Bedrijfsnaam</label>
                    <input type="text" name="company_name" value="{{ $company->name }}">

                    <label for="company_email">Email</label>
                    <input type="text" name="company_email" value="{{ $company->email }}">

                    <label for="company_adres">Adres</label>
                    <input type="text" name="company_address" value="{{ $company->address }}">

                    <h2>Contactpersoon</h2>
                    <input type="hidden" name="user_id" value="{{ $company->user->id }}">
                    <label for="user_name">Naam</label>
                    <input type="text" name="user_name" value="{{ $company->user->name }}">

                    <label for="user_email">Email</label>
                    <input type="text" name="user_email" value="{{ $company->user->email }}">
                    <input type="submit" class="centered-button" value="Gegevens aanpassen">
                </form>
            </div>
        </div>
    </div>
@endsection
