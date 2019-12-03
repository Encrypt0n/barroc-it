@component('mail::message')
    # Bestelling boven 5000


    Er is een bestelling geplaatst van
    @foreach($toohigh as $name => $singletoohigh)
        {{$name}}
        € {{$singletoohigh}}

                    @endforeach



@endcomponent
