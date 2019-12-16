@extends('dashboard')
@section('content')
    <div class="container">
        <form action="{{ route('createQuotation.store') }}" method="post">
            @csrf
            <div class="dashboard-title-container">
                <div class="dashboard-title">
                    <h2><span class="title-highlighted-dash">-</span> Prijsopgave aanmaken <span class="title-highlighted-dash">-</span> </h2>
                </div>
            </div>

            <select name="customer">


                @foreach ($customers

                         as $customer) {

                "<option value="{{$customer->id}}">"{{$customer->name}}"</option>";
                }
                @endforeach




            </select>

{{--            <input type="hidden" name="customer[{{$customer->id}}]">--}}





            {{--contactinformatie--}}
{{--            <div class="contact">--}}

{{--                <div class="contactItem">--}}
{{--                    <label for="companyName">Bedrijfsnaam</label>--}}
{{--                    <input type="text" name="companyName">--}}
{{--                </div>--}}

{{--                <div class="contactItem">--}}
{{--                    <label for="contactPersonEmail">Contactpersoon email</label>--}}
{{--                    <input type="text" name="contactPersonEmail">--}}
{{--                </div>--}}

{{--                <div class="contactItem">--}}
{{--                    <label for="contactPerson">Contactpersoon</label>--}}
{{--                    <input type="text" name="contactPerson">--}}
{{--                </div>--}}

{{--                <div class="contactItem">--}}
{{--                    <label for="contactPersonPhone">Contactpersoon telefoonnummer</label>--}}
{{--                    <input type="text" name="contactPersonPhone">--}}
{{--                </div>--}}

{{--                <div class="contactItem">--}}
{{--                    <label for="companyAddress">Bedrijf adres</label>--}}
{{--                    <input type="text" name="companyAddress">--}}
{{--                </div>--}}
{{--            </div>--}}
            {{--bestelling--}}
            <div class="orders">
                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Ittalian Light €280</label>
                    <input type="text" name="italianLight">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Italian €290</label>
                    <input type="text" name="italian">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Italian Deluxe €350</label>
                    <input type="text" name="italianDeluxe">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Italian Deluxe Special €375</label>
                    <input type="text" name="italianDeluxeSpecial">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Espresso Beneficio €21.60</label>
                    <input type="text" name="espressoBeneficio">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Yellow Bourbon Brasil €23.20</label>
                    <input type="text" name="yellowBourbonBrasil">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Espresso Roma €20.80</label>
                    <input type="text" name="espressoRoma">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Red Honey Honduras €27.80</label>
                    <input type="text" name="redHoneyHonduras">
                </div>







            </div>


            <p>*Prijzen excl btw.</p>
            <p>Totaalprijs wordt automatisch in de email gezet.</p>

            <div class="dashboard-centered-button-container">
                <input class="centered-button" type="submit" value="Prijsopgrave opsturen">
            </div>
        </form>
    </div>
@endsection
