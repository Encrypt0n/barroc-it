@component('mail::message')
# Nieuw account
Uw account is geregistreerd in ons systeem!<br>
De inlog gegevens:<br>
Email: {{ $accountInfo['email'] }}<br>
Wachtwoord: {{ $accountInfo['password'] }}<br>

Dankuwel,<br>
{{ config('app.name') }}
@endcomponent
