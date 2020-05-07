@component('mail::message')
# You have new order from {{ $email }}

Telephone number: {{ $number }}

Person's name: {{ $name }}

Message: {{ $text }}

Have a nice day,<br>
{{ config('app.name') }}
@endcomponent
