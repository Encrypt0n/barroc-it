@component('mail::message')
    # Nieuwe prijsopgrave
    Bedrijfsnaam: {{$info->companyname}}


    Contactpersoon:
    Naam: {{$info->contactpersonname}}
    Telefoonnummer: {{$info->contactpersonphone}}
    Email: {{$info->contactpersonemail}}

    Bestelling:

    Machines:
    {{$info->italian_light}} x Italian Light
    {{$info->italian}} x Italian
    {{$info->italian_deluxe}} x Italian Deluxe
    {{$info->italian_deluxe_special}} x Italian Deluxe Special

    Bonen:
    {{$info->espresso_beneficio}} x Espresso Beneficio
    {{$info->yellow_bourbon_brasil}} x Yellow Bourbon Brasil
    {{$info->espresso_roma}} x Espresso Roma
    {{$info->red_honey_honduras}} x Red Honey Honduras
@endcomponent
