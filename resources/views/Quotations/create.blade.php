@extends('app')
    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <div class="container">
        <form action="{{ route('quotationRequest.store') }}" method="post">
            @csrf
            <h1>Offerte aanvragen</h1>






                    {{--contactinformatie--}}
       <div class="contact">
           <div class="contactItem">
                  <label for="companyName">Bedrijfsnaam</label>
                 <input type="text" name="companyName">
         </div>

            <div class="contactItem">
                  <label for="address">Adres</label>
                  <input type="text" name="companyAddress">
            </div>

          <div class="contactItem">
                   <label for="phoneNumber">Telefoonnummer</label>
                    <input type="text" name="companyPhoneNumber">
           </div>

           <div class="contactItem">
                  <label for="email">Email adres</label>
                    <input type="text" name="companyEmail">
          </div>

           <div class="contactItem">
                   <label for="contactPerson">Contactpersoon</label>
                    <input type="text" name="contactPerson">
            </div>

            <div class="contactItem">
                   <label for="contactPersonPhone">Contactp. telefoonnummer</label>
                 <input type="text" name="contactPersonPhone">
           </div>

           <div class="contactItem">
                   <label for="contactPersonEmail">Contactp. email adres</label>
                  <input type="text" name="contactPersonEmail">
         </div>
       </div>
                            {{--bestelling--}}
        <div class="orders">
            <div class="orderitem">
                    <label for="italianLight">Barroc Intens Ittalian Light €280</label>
                    <input type="text" name="italianLight">
            </div>

            <div class="orderitem">
                    <label for="italianLight">Barroc intens Italian €290</label>
                    <input type="text" name="italian">
            </div>

            <div class="orderitem">
                    <label for="italianLight">Barroc Intens Italian Deluxe €350</label>
                    <input type="text" name="italianDeluxe">
            </div>

            <div class="orderitem">
                    <label for="italianLight">Barroc intens Italian Deluxe Special €375</label>
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
                    <input type="submit" value="Offerte aanvragen">
                </form>
        </div>




    @endsection
