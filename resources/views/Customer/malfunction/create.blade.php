@extends('dashboard')

@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Storing melden <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    <div class="form-container">
        <div class="form-container-wrapper">
            <form class="finance-customer-form"                                                                                                                         action="{{ route('failureRequest.store') }}" method="post">
                @csrf
                <div class="finance-customer-form-textarea">
                    <label class="form-label" for="description">Beschrijving</label>
                    <textarea class="form-textarea" type="text" id="description" name="description" placeholder="Beschrijving"></textarea>
                </div>
                <input class="centered-button" type="submit" value="Storing melden">
            </form>
        </div>
    </div>
@endsection
