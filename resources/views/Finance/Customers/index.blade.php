@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Klanten <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    @foreach($companies as $company)
        <ul class="dashboard-list">
            <a class="dashboard-list-item-link" href="{{ route('customerEdit.show', $company->id) }}">{{ $company->name }}</a>
        </ul>
    @endforeach
@endsection