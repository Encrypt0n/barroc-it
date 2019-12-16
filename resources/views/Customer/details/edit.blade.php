@extends('dashboard')

@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Gegevens aanpassen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="form-container">
        <div class="form-container-wrapper">
            <form class="finance-customer-form" action="{{ route('customerDetail.update', $company->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-splitter">
                    <div class="form-splitter-item">
                        <h2>- Bedrijf -</h2>
                        <input type="hidden" name="company_id" value="{{ $company->id }}">
                        <div class="finance-customer-form-textarea">
                            <label class="form-label" for="company_name">Bedrijfsnaam:</label>
                            <input class="form-text" type="text" name="company_name" value="{{ $company->name }}">
                        </div>
                        <div class="finance-customer-form-textarea">
                            <label class="form-label" for="company_email">Email:</label>
                            <input class="form-text" type="text" name="company_email" value="{{ $company->email }}">
                        </div>
                        <div class="finance-customer-form-textarea">
                            <label class="form-label" for="company_adres">Adres:</label>
                            <input class="form-text" type="text" name="company_address" value="{{ $company->address }}">
                        </div>
                    </div>
                    <div class="form-splitter-item">
                        <h2>- Contactpersoon -</h2>
                        <input type="hidden" name="user_id" value="{{ $company->user->id }}">
                        <div class="finance-customer-form-textarea">
                            <label class="form-label" for="user_name">Naam:</label>
                            <input class="form-text" type="text" name="user_name" value="{{ $company->user->name }}">
                        </div>
                        <div class="finance-customer-form-textarea">
                            <label class="form-label" for="user_email">Email:</label>
                            <input class="form-text" type="text" name="user_email" value="{{ $company->user->email }}">
                        </div>
                    </div>
                </div>
                <input type="submit" class="centered-button" value="Gegevens aanpassen">
            </form>
        </div>
    </div>
@endsection
