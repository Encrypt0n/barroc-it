@component('mail::message')
    # Nieuwe werkbon

    Bezoek bij:
    {{$mailData->companyName}}

    Wat er gerepareerd is:
    {{$mailData->repaired}}

    Opmerking(en):
    {{$mailData->comments}}

    Wat er gebruikt is:
    {{$mailData->supplyOne}} x Rubber(10mm)
    {{$mailData->supplyTwo}} x Rubber(14mm)
    {{$mailData->supplyThree}} x Slang
    {{$mailData->supplyFour}} x Voeding(elektra)
    {{$mailData->supplyFive}} x Ontkalker
    {{$mailData->supplySix}} x Waterfilter
    {{$mailData->supplySeven}} x Reservoir sensor
    {{$mailData->supplyEight}} x Druppelstop
    {{$mailData->supplyNine}} x Electrische pomp
    {{$mailData->supplyTen}} x Tandwiel 110mm
    {{$mailData->supplyEleven}} x Tandwiel 70mm
    {{$mailData->supplyTwelve}} x Maalmotor
    {{$mailData->supplyThirteen}} x Zeef
    {{$mailData->supplyFourteen}} x Reinigingstabletten
    {{$mailData->supplyFifteen}} x Reinigingsborsteltjes
    {{$mailData->supplySixteen}} x Ontkalkingspijp


@endcomponent
