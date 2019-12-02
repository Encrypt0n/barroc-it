@extends('dashboard')
@section('content')
    <div class="container">
        <form action="{{route('supplies.update', $supply->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group" >
                <label for="name">Product naam</label>
                <input type="text" name="name" value="{{$supply->name}}">
            </div>

            <div class="input-group">
                <label for="price">Prijs</label>
                <input type="text" name="price" value="{{$supply->price}}">
            </div>

            <div class="input-group">
                <label for="supply_categories_id">Categorie</label>
                <select name="supply_categories_id" id="">
                    @foreach($supplyCategories as $supplyCategory)
                    <option
                            @if ($supply->supplyCategory->id == $supplyCategory->id) selected @endif
                            value="{{$supplyCategory->id}}">
                            {{ $supplyCategory->name }}
                    </option>
                        @endforeach
                </select>
            </div>

            <div class="input-group"><input type="submit" value="Bewerk product"></div>
        </form>
    </div>
@endsection

