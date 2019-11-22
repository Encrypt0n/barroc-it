@extends('app')
@section('content')
<<<<<<< Updated upstream

    <form action="{{ route('createQuotation.store') }}" method="post">
        @csrf
        <h1>Prijsopgave aanmaken</h1>

        {{--contactinformatie--}}
        <div class="contact">
            <div class="contactItem">
                <label for="contactPersonEmail">Contactpersoon email</label>
                <input type="text" name="contactPersonEmail">
            </div>

            <div class="contactItem">
                <label for="contactPerson">Contactpersoon</label>
                <input type="text" name="contactPerson">
            </div>

            <div class="contactItem">
                <label for="contactPersonPhone">Contactpersoon telefoonnummer</label>
                <input type="text" name="contactPersonPhone">
            </div>

            <div class="contactItem">
                <label for="companyAddress">Bedrijf adres</label>
                <input type="text" name="companyAddress">
            </div>
        </div>
        {{--bestelling--}}
        <div class="orders">
            <div class="orderitem">
                <label for="italianLight">Barroc Intens Ittalian Light - € 289,-</label>
                <input type="text" name="italianLight">
            </div>

            <div class="orderitem">
                <label for="italianLight">Barroc intens Italian - € 289,-</label>
                <input type="text" name="italian">
            </div>

            <div class="orderitem">
                <label for="italianLight">Barroc Intens Italian Deluxe - € 375,-</label>
                <input type="text" name="italianDeluxe">
            </div>

            <div class="orderitem">
                <label for="italianLight">Barroc intens italian Deluxe Special - € 375,-</label>
                <input type="text" name="italianDeluxeSpecial">
            </div>

            <div class="orderitem">
                <label for="italianLight">Espresso Beneficio - € 21,60</label>
                <input type="text" name="espressoBeneficio">
            </div>

            <div class="orderitem">
                <label for="italianLight">Yellow Bourbon Brasil - € 23,20</label>
                <input type="text" name="yellowBourbonBrasil">
            </div>

            <div class="orderitem">
                <label for="italianLight">Espresso Roma - € 20,80</label>
                <input type="text" name="espressoRoma">
            </div>

            <div class="orderitem">
                <label for="italianLight">Red Honey Honduras - € 27,80</label>
                <input type="text" name="redHoneyHonduras">
            </div>
        </div>


        <p>*Prijzen excl btw.</p>
        <p>Totaalprijs wordt automatisch in de email gezet.</p>


        <input type="submit" value="Prijsopgrave opsturen">
    </form>


=======
    <div class="container">
        <form action="{{ route('createQuotation.store') }}" method="post">
            @csrf
            <h1>Prijsopgave aanmaken</h1>

            {{--contactinformatie--}}
            <div class="contact">
                <div class="contactItem">
                    <label for="contactPersonEmail">Contactpersoon email</label>
                    <input type="text" name="contactPersonEmail">
                </div>

                <div class="contactItem">
                    <label for="contactPerson">Contactpersoon</label>
                    <input type="text" name="contactPerson">
                </div>

                <div class="contactItem">
                    <label for="contactPersonPhone">Contactpersoon telefoonnummer</label>
                    <input type="text" name="contactPersonPhone">
                </div>

                <div class="contactItem">
                    <label for="companyAddress">Bedrijf adres</label>
                    <input type="text" name="companyAddress">
                </div>
            </div>
            {{--bestelling--}}
            <div class="orders">
                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Ittalian Light</label>
                    <input type="text" name="italianLight">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc intens Italian</label>
                    <input type="text" name="italian">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc Intens Italian Deluxe</label>
                    <input type="text" name="italianDeluxe">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Barroc intens italian Deluxe Special</label>
                    <input type="text" name="italianDeluxeSpecial">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Espresso Beneficio</label>
                    <input type="text" name="espressoBeneficio">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Yellow Bourbon Brasil</label>
                    <input type="text" name="yellowBourbonBrasil">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Espresso Roma</label>
                    <input type="text" name="espressoRoma">
                </div>

                <div class="orderitem">
                    <label for="italianLight">Red Honey Honduras</label>
                    <input type="text" name="redHoneyHonduras">
                </div>
            </div>

>>>>>>> Stashed changes

            <p>*Prijzen excl btw.</p>
            <p>Totaalprijs wordt automatisch in de email gezet.</p>


            <input type="submit" value="Prijsopgrave opsturen">
        </form>
    </div>
@endsection
