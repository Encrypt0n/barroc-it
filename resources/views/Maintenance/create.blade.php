@extends('dashboard')
@section('content')
    <div class="dashboard-title-container">
        <div class="dashboard-title">
            <h2><span class="title-highlighted-dash">-</span> Wekrbon invullen <span class="title-highlighted-dash">-</span> </h2>
        </div>
    </div>

    <form action="{{route('jobTicket.store')}}" method="POST">
        @csrf
    <div class="form-container">
        <label for="">Bezoek:</label>

        <div class="finished">
        <label for="finished">Voltooid:</label>
        <input type="checkbox" name="finished">
        </div>

        <div class="repaired">
        <label for="repaired">Wat er gerepareerd is:</label>
        <input type="text" name="repaired">
        </div>

        <div class="comments">
        <label for="comments">Opmerking(en)</label>
        <input type="text" name="comments">
        </div>
    </div>
        <div class="dashboard-detail-wrapper">

{{--        @foreach($supplies as $supply)--}}
{{--                <label for="supply">{{$supply->name}}</label>--}}
{{--                <input type="text" name="supply_id" id="supply">--}}
{{--            @endforeach--}}

            <div class="leftItems">
            <div class="right">
            <label for="supply">Rubber (10mm)</label>
            <input type="text" name="supplyOne" id="supply">
            </div>

            <div class="item">
            <label for="supply">Rubber (14mm)</label>
            <input type="text" name="supplyTwo" id="supply">
            </div>

            <div class="item">
            <label for="supply">Slang</label>
            <input type="text" name="supplyThree" id="supply">
            </div>

            <div class="item">
            <label for="supply">Voeding (elektra)</label>
            <input type="text" name="supplyFour" id="supply">
            </div>

            <div class="item">
            <label for="supply">Ontkalker</label>
            <input type="text" name="supplyFive" id="supply">
            </div>

            <div class="item">
            <label for="supply">Waterfilter</label>
            <input type="text" name="supplySix" id="supply">
            </div>

            <div class="item">
            <label for="supply">Reservoir sensor</label>
            <input type="text" name="supplySeven" id="supply">
            </div>

            <div class="item">
            <label for="supply">Druppelstop</label>
            <input type="text" name="supplyEight" id="supply">
            </div>
        </div>

        <div class="rightItems">

            <div class="item">
                <label for="supply">Electrische pomp</label>
                <input type="text" name="supplyNine" id="supply">
            </div>

            <div class="item">
                <label for="supply">Tandwiel 110mm</label>
                <input type="text" name="supplyTen" id="supply">
            </div>

            <div class="item">
                <label for="supply">Tandwiel 70mm</label>
                <input type="text" name="supplyEleven" id="supply">
            </div>

            <div class="item">
                <label for="supply">Maalmotor</label>
                <input type="text" name="supplyTwelve" id="supply">
            </div>

            <div class="item">
                <label for="supply">Zeef</label>
                <input type="text" name="supplyThirteen" id="supply">
            </div>

            <div class="item">
                <label for="supply">Reinigingstabletten</label>
                <input type="text" name="supplyFourteen" id="supply">
            </div>

            <div class="item">
                <label for="supply">Reiningingsborsteltjes</label>
                <input type="text" name="supplyFifteen" id="supply">
            </div>

            <div class="item">
                <label for="supply">Ontkalkingspijp</label>
                <input type="text" name="supplySixteen" id="supply">
            </div>
        </div>
        </div>
        <input type="submit" class="centered-button" value="Werkbon versturen">

    </form>
@endsection
