@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Storings meldingen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>
    @foreach($malfunctions as $malfunction)
        <ul class="dashboard-list">
            <a class="dashboard-list-item-link" href="{{ route('failureRequest.show', $malfunction->id) }}">{{ $malfunction->id }} - {{ $malfunction->companyDetail->name }}</a>
        </ul>
    @endforeach
@endsection