@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> {{ $company->name }} <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="form-container">
        <div class="form-container-wrapper">
            <h2>Klant aanpassen</h2>
            <form action="{{ route('customerEdit.update', $company->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="description">BKR Check voldaan: </label>
                    @if ($company->bkr == 2)
                        <input type="checkbox" name="bkr" value="bkr" checked>
                    @else
                        <input type="checkbox" name="bkr" value="bkr">
                    @endif
                    <input class="centered-button" type="submit" value="Klant aanpassen">
                </div>
            </form>
        </div>
    </div>
@endsection
