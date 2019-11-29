@component('mail::message')
    # Nieuwe prijsopgrave

    @foreach($toohigh as $singletoohigh)
    Bedrijfsnaam: {{$singletoohigh->price}}
    @endforeach



@endcomponent
