@extends('app')
    @section('content')

        <form action="">
            <h1>Offerte aanvragen</h1>
            <label for="companyName">Bedrijfsnaam</label>
            <input type="text" name="companyName">

            <label for="address">Adres</label>
            <input type="text" name="address">

            <label for="phoneNumber">Telefoonnummer</label>
            <input type="text" name="phoneNumber">

            <label for="email">Email adres</label>
            <input type="text" name="email">

            <label for="contactPerson">Contactpersoon</label>
            <input type="text" name="contactPerson">

            <label for="contactPersonPhone">Contactp. telefoonnummer</label>
            <input type="text" name="contactPersonPhone">

            <label for="contactPersonEmail">Contactp. email adres</label>
            <input type="text" name="contactPersonEmail">

            <label for=""></label>
            <input type="text" name="italian">

            <button>Offerte aanvragen</button>
        </form>





    @endsection
