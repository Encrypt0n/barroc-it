@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> {{ $company->name }} <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="form-container">
        <div class="form-container-wrapper">
            <form class="finance-customer-form" action="{{ route('customerEdit.update', $company->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="finance-customer-form-checkbox-container">
                    @if (Auth::user()->role != 1)
                        <input type="hidden" name="ignore_bkr" value="1">
                    @endif
                    @if (Auth::user()->role == 1)
                        <label class="form-label" for="bkr">BKR Check voldaan: </label>
                        @if ($company->bkr == 2)
                            <input type="checkbox" name="bkr" value="bkr" checked>
                        @else
                            <input type="checkbox" name="bkr" value="bkr">
                        @endif
                    @endif
                        <label for="description">Contract akkoord: </label>
                        @if ($quotation->accepted == 1)
                            <input type="checkbox" name="accepted" value="accepted" checked>
                        @else
                            <input type="checkbox" name="accepted" value="accepted">
                        @endif

                    <textarea name="note" placeholder="Opmerking"></textarea>
                    <input class="centered-button" type="submit" value="Klant aanpassen">
                </div>
                <div class="finance-customer-form-textarea">
                    <label class="form-label" for="note">Opmerking:</label>
                    <textarea class="form-textarea" name="note">{{ $company->note }}</textarea>
                </div>
                <input class="centered-button" type="submit" value="Klant aanpassen">
            </form>
        </div>
    </div>
@endsection
