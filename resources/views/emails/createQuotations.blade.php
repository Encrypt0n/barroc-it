@component('mail::message')
    # Nieuwe offerte

    Bedrijf:
    Naam: {{$mailData->companyName}}
    Adres: {{$mailData->companyAddress}}
    Telefoonnummer: {{$mailData->companyPhoneNumber}}
    Email: {{$mailData->companyEmail}}

    Contactpersoon:
    Naam: {{$mailData->contactPerson}}
    Telefoonnummer: {{$mailData->contactPersonPhone}}
    Email: {{$mailData->contactPersonEmail}}

    Bestelling:

    Machines:
    {{$mailData->italianLight}} x Ittalian Light
    {{$mailData->italian}} x Ittalian
    {{$mailData->italianDeluxe}} x Ittalian Deluxe
    {{$mailData->italianDeluxeSpecial}}x Ittalian Deluxe Special

    Bonen:
    {{$mailData->espressoBeneficio}} x Espresso Beneficio
    {{$mailData->yellowBourbonBrasil}} x Yellow Bourbon Brasil
    {{$mailData->espressoRoma}} x Espresso Roma
    {{$mailData->redHoneyHonduras}} x Red Honey Honduras
@endcomponent
