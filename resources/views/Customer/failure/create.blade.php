@extends('dashboard')

@section('content')
<div class="form-container">
    <div class="form-container-wrapper">
        <h2>Storing melden</h2>
        <form action="{{  }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name"><br>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description" placeholder="Description"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Create Category">
            </div>
        </form>
    </div>
</div>
@endsection
