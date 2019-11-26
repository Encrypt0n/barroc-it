@extends('dashboard')

@section('content')
<div class="form-container">
    <div class="form-container-wrapper">
        <h2>Storing melden</h2>
        <form action="{{ route('failureRequest.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="description">Beschrijving</label>
                <textarea type="text" id="description" name="description" placeholder="Beschrijving"></textarea>
                <input class="centered-button" type="submit" value="Storing melden">
            </div>
        </form>
    </div>
</div>
@endsection
